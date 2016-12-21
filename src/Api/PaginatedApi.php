<?php
/**
 * Created by PhpStorm.
 * User: JC
 * Date: 21/12/2016
 * Time: 4:14 PM
 */

namespace Komirad\SgBus\Api;


abstract class PaginatedApi extends BaseApi
{
    /**
     * @var int
     */
    protected $page = 0;
    /**
     * @var bool
     */
    protected $hasNext = true;

    public function handle($page = 1) {
        $this->page = $page;
        $params = [];
        if($page > 1) {
            $params = [
                '$skip' => ($page-1)*self::PAGE_SIZE
            ];
        }
        $response = self::get($this->servicePath, $params);
        $result = json_decode($response->getBody());
        if(count($result->value) == self::PAGE_SIZE) {
            $this->hasNext = true;
        } else {
            $this->hasNext = false;
        }
        return $result;
    }

    public function next() {
        if(!$this->hasNext) return null;
        return $this->handle(++$this->page);
    }

    public function all() {
        $result = $this->next();
        while($this->hasNext) {
            $result->value = array_merge($result->value, $this->next()->value);
        }
        return $result;
    }
}