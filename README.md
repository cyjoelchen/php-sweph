# PHP Extension for Swiss Ephemeris
## Introduction
`php-sweph` is a PHP extension to Astrodienst Swiss Ephemeris library. It's statically linked with libswe.a to implement one-to-one, C-to-PHP function mapping, no external binary executable required.

## Installation

Follow the steps. Make sure `php-dev` has installed already.

```
    git clone https://github.com/cyjoelchen/php-sweph.git
    cd php-sweph
    phpize
    ./configure 
    make
    sudo make install
```

Add `extension=sweph.so` to php.ini. In my case (nginx + php-fpm), it's located in `/etc/php/7.0/fpm/php.ini`. Reload php-fpm to make it take effect.

Now you should able to see sweph section from `phpinfo()`.

 sweph support | enabled 
---|---
 extension version | 2.0 Rev: 29
 library (libswe.a) version | 2.10.01a
 default ephemeris file path | .:/users/ephe2/:/users/ephe/ 

You are all set!


## Example

```php
<?php

swe_set_ephe_path("/usr/local/share/sweph");

# calc planet position
list($y, $m, $d, $h, $mi, $s) = sscanf(gmdate("Y m d G i s"), "%d %d %d %d %d %d");
$jul_ut = swe_julday($y, $m, $d, ($h + $mi / 60 + $s / 3600), SE_GREG_CAL);

$planets['julday'] = $jul_ut;

for($i = SE_SUN; $i <= SE_VESTA; $i++)
{
    if ($i == SE_EARTH) continue;
    $xx = swe_calc_ut($jul_ut, $i, SEFLG_SPEED);
    if ($xx['rc'] < 0) 
    { // error calling swe_calc_ut();
        $planets[$i] = array('error' => $xx[rc]);
        continue;
    }

    $planets[$i] = array(
        'name' => swe_get_planet_name($i),
        'lng' => $xx[0],
        'lat' => $xx[1],
        'speed' => $xx[3]
    );
}
echo "planets: \n" . json_encode($planets, $options = JSON_PRETTY_PRINT) . "\n";

# calc house cusps
define("GEO_LNG", 121.5);
define("GEO_LAT", 25.05);   // Taipei, Taiwan: 121E30, 25N03

$yy = swe_houses($jul_ut, GEO_LAT, GEO_LNG, "P"); // P = Placidus. 

$houses = array();

for($i = 1; $i <= 12; $i ++) 
{
    $houses[$i] = array('lng' => $yy['cusps'][$i]);
}

echo "houses: \n" . json_encode($houses, $options = JSON_PRETTY_PRINT) . "\n";
?>

```

## Development

This repository ships with a simple Docker setup for easy development.
Setup your local environment for iterative testing:

```
> docker build -t se_php .
> docker run --name se-php -dit -v ${PWD}:/root/php-sweph se_php
```

_The container `se-php` will run in the background._

The easiest way to build and test is to start an interactive terminal:

```
> docker exec -it se-php bash
> ./build-se
``` 

The `build-se` bash script will compile the PHP extension and install it for you.
Run tests from the PHP command line via `php -a`.
Repeat `build-se` execution runs as needed.

When you're finished, exit the container and stop it:

```
> exit
> docker stop se-php
```


