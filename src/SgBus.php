<?php
namespace Komirad\SgBus;


use Komirad\SgBus\Api\BusArrival;
use Komirad\SgBus\Api\BusRoutes;
use Komirad\SgBus\Api\BusServices;
use Komirad\SgBus\Api\BusStops;

class SgBus
{
    private static $token;

    public function __construct($token) {
        self::$token = $token;
    }

    public static function BusArrival(){
        return (new BusArrival(self::$token));
    }

    public static function BusServices() {
        return (new BusServices(self::$token));
    }

    public static function BusRoutes() {
        return (new BusRoutes(self::$token));
    }

    public static function BusStops() {
        return (new BusStops(self::$token));
    }
}