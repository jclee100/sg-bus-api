<?php
namespace Komirad\SgBus\Api;

class BusArrival extends BaseApi
{
    protected $servicePath = 'BusArrival';

    /**
     * @param $busStopId
     * @param null $serviceNumber Optional.
     * @param bool|false $SST Optional. return result in  Singapore standard time
     * @return mixed
     */
    public function handle($busStopId, $serviceNumber = null, $SST = false) {
        $params = [
            'BusStopID' => $busStopId
        ];
        if(!is_null($serviceNumber)) {
            $params['ServiceNumber'] = $serviceNumber;
        }
        if($SST) {
            $params['SST'] = true;
        }
        $response = self::get($this->servicePath, $params);
        return json_decode($response->getBody());
    }
}