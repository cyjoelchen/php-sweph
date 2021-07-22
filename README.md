# PHP Extension for Swiss Ephemeris

## Introduction
`php-sweph` is a PHP extension to Astrodienst Swiss Ephemeris library. It's statically linked with libswe.a to implement one-to-one, C-to-PHP function mapping, no external binary executable required.

## Installation

This project uses tagged releases.
As such, the `master` branch should be considered unstable and "bleeding edge".

Follow the steps to build the latest version of this extension.
Make sure `php-dev` has installed already.

```
git clone -b v2.0.29 https://github.com/cyjoelchen/php-sweph.git
cd php-sweph
phpize
./configure
make
sudo make install
```

Add `extension=swephp.so` to php.ini. In my case (nginx + php-fpm), it's located in `/etc/php/7.0/fpm/php.ini`. Reload php-fpm to make it take effect.

Now you should able to see swephp section from `phpinfo()`.

 swephp support | enabled 
---|---
 extension version | 3.0 Rev: 00
 library (libswe.a) version | 2.10.01a
 default ephemeris file path | .:/users/ephe2/:/users/ephe/ 

You are all set!

## Contributing

### If you have collaborator access on this project:

1. Open an issue in Github, explaining the work requirements.
2. Locally, `git pull origin master` to bring your local master branch up to date.
3. Locally, `git checkout -b issue/<number>` to create a new working branch.
4. After your commits are finished, `git push origin issue/<number>` to push this branch to Github.
5. Create a PR from the Github web interface, or from the link git displays after your initial branch push.
6. Assign a different collaborator the task of reviewing the work.
7. Once approved, the author of the PR can merge into master and delete the branch.

### If you are not a collaborator on this project:

Contributions are welcome! If you'd like to contribute, please:

1. Fork the project & clone locally.
2. Create an upstream remote and sync your local copy before you branch.
3. Create an issue for the work you plan to contribute, or select an issue you want to work on.
4. Branch for each separate piece of work (ideally named according to the issue).
5. Do the work, __write good commit messages__, and keep your commits small (i.e. as atomic as possible).
6. Push to your origin repository.
7. Create a new PR in GitHub.
8. Respond to any code review feedback.

## Inline documentation
The source code for this extension contains inline documentation in POD style,
which comes from the Perl programming language.

You can view the inline documentation, if you have Perl installed, with this command:

perldoc swephp.c

To create a html documentation page, use this command:

pod2html swephp.c > php-sweph-doc.html

_The HTML version of this documentation is included in this repository here:_
```
/doc/doc.html
```

## Example

```php
<?php

# Set path to ephemeris data files (ex. for Docker setup).
swe_set_ephe_path("./sweph/ephe");

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
        $planets[$i] = array('error' => $xx['rc']);
        continue;
    }

    $planets[$i] = array(
        'name' => swe_get_planet_name($i),
        'lng' => $xx[0],
        'lat' => $xx[1],
        'speed' => $xx[3]
    );
}

$out = ['planets' => json_encode($planets, JSON_PRETTY_PRINT)];

# calc house cusps
define("GEO_LNG", 121.5);
define("GEO_LAT", 25.05);   // Taipei, Taiwan: 121E30, 25N03

$yy = swe_houses($jul_ut, GEO_LAT, GEO_LNG, "P"); // P = Placidus. 

$houses = array();

for($i = 1; $i <= 12; $i ++) 
{
    $houses[$i] = array('lng' => $yy['cusps'][$i]);
}

$out['houses'] = json_encode($houses, JSON_PRETTY_PRINT);

echo '<pre>';
var_dump($out);
echo '</pre>';
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


