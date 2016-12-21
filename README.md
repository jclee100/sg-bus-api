# Sg Bus API

[![Latest Version](https://img.shields.io/github/release/komirad/sg-bus-api.svg?style=flat-square)](https://github.com/komirad/sg-bus-api/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/komirad/sg-bus-api/master.svg?style=flat-square)](https://travis-ci.org/komirad/sg-bus-api)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/komirad/sg-bus-api.svg?style=flat-square)](https://scrutinizer-ci.com/g/komirad/sg-bus-api/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/komirad/sg-bus-api.svg?style=flat-square)](https://scrutinizer-ci.com/g/komirad/sg-bus-api)
[![Total Downloads](https://img.shields.io/packagist/dt/komirad/sg-bus-api.svg?style=flat-square)](https://packagist.org/packages/komirad/sg-bus-api)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require komirad/sg-bus-api
```

## Usage

``` php
$busApi = new Komirad\SgBus\SgBus(<your account key>);

/**
 * Bus arrival times
 * @param $busStopId
 * @param null $serviceNumber Optional.
 * @param bool|false $SST Optional. return result in  Singapore standard time
 * @return mixed
 */
$busApi::BusArrival()->handle($busStopId, $serviceNumber, $SST);

// Paginated APIs 50 results each page
$busApi::BusStops()->next();
$busApi::BusRoutes()->next();
$busApi::BusServices()->next();
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/komirad/sg-bus-api/blob/master/CONTRIBUTING.md) for details.

## Credits

- [JC Lee](https://github.com/komirad)
- [All Contributors](https://github.com/komirad/sg-bus-api/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
