# FilmTools · SpeedPoint



**Interfaces, classes and decorators for the speed point of a film developing.**

[![Packagist](https://img.shields.io/packagist/v/filmtools/filmspeed.svg?style=flat)](https://packagist.org/packages/filmtools/filmspeed)
[![PHP version](https://img.shields.io/packagist/php-v/filmtools/filmspeed.svg)](https://packagist.org/packages/filmtools/filmspeed)
[![Build Status](https://img.shields.io/travis/filmtools/filmspeed.svg?label=Travis%20CI)](https://travis-ci.org/filmtools/filmspeed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/filmtools/filmspeed/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/filmtools/filmspeed/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/filmtools/filmspeed/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/filmtools/filmspeed/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/filmtools/filmspeed/badges/build.png?b=master)](https://scrutinizer-ci.com/g/filmtools/filmspeed/build-status/master)


## Installation

```bash
$ composer require filmtools/speedpoint
```



## Interfaces and Classes



### SpeedPointInterface

```php
use FilmTools\SpeedPoint\SpeedPointInterface;  
```

**getType() :**  *string|null*
Returns name or description (film speed evaluation method).

**getValue() :** *float*
Returns the speed point exposure value which yields a certain minimum density.

**getSpeedLoss() :** *float*
Returns the difference between the real speed point and the exposure value where the minimum density had been expected.

**getEICorrection() :** *float*
Converts the "speed loss" to Exposure Index (°DIN) steps.



### SpeedPointProviderInterface

```php
use FilmTools\SpeedPoint\SpeedPointProviderInterface; 
```

**getSpeedPoint() :** *SpeedPointInterface*
Returns a Speed point instance.



### SpeedPoint

The ready-to-use  **SpeedPoint** class extends **SpeedPointAbstract** and implements the *SpeedPointInterface.*

```php
use FilmTools\SpeedPoint\SpeedPoint;

// The exposure value where a density is reached
$logH = 0.46;

// Text description is optional. 
$sp = new SpeedPoint( $logH );
$sp = new SpeedPoint( $logH, "Description" );

// Examples:
$sp->getValue();        // 0.46
$sp->getSpeedLoss();    // 0.16
$sp->getEICorrection(); // 3.0
$sp->getType();         // "Description", may be null.
```



## Development and Testing

```
$ git clone https://github.com/filmtools/speedpoint.git
$ cd speedpoint
$ composer install

$ composer test
```

