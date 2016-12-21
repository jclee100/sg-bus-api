<?php

require_once "vendor/autoload.php";

$client = new \Komirad\SgBus\SgBus('xbEPVO6WS3CoUc4Ph6mSWQ==');
//$result = $client::BusArrival('1');
//$result = $client::BusServices();
//$result = $client::BusRoutes();
$busStopsClient = $client::BusStops();
$result = $busStopsClient->next();
$result = $busStopsClient->next();

var_dump($result);