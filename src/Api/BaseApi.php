<?php
namespace Komirad\SgBus\Api;


use GuzzleHttp\Client;

abstract class BaseApi
{
    /**
     * Account key provided by LTA
     * @var string
     */
    private static $token;

    protected $servicePath;

    const PAGE_SIZE = 50;

    public function __construct($token) {
        self::$token = $token;
    }

    /**
     * @param $path
     * @param null $params
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public static function get($path, $params = null) {
        $client = new Client([
            'base_uri' => 'http://datamall2.mytransport.sg/ltaodataservice/',
        ]);
        return $client->request('GET', $path, [
            'headers' => [
                'AccountKey' => self::$token
            ],
            'query' => $params
        ]);
    }
}