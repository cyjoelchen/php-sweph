# PHP Extension for Swiss Ephemeris

## Introduction
`php-sweph` is a PHP extension to Astrodienst Swiss Ephemeris library. It's statically linked with libswe.a to implement one-to-one, C-to-PHP function mapping, no external binary executable required.

## Compatibility
This extension is tested with PHP versions:
- 7.4
- 8.0
- 8.1
- 8.2

## License
`php-sweph` is work derived from the original release of the Astrodienst Swiss Ephemeris library.
To use `php-sweph`, the licensing conditions imposed by Astrodienst for Swiss Ephemeris must
be fulfilled. A copy of the license file
is found in `sweph/src/LICENSE`. Please note: since Swiss Ephemeris release 2.10.01 the GPL license has been
replaced with the AGPL license, as one of the options in Astrodienst's dual licensing model.

## Installation

This project uses tagged releases.
As such, the `master` branch should be considered unstable and "bleeding edge".

Follow the steps to build the latest version of this extension.
Make sure `php-dev` has installed already.

_If you are on a Mac and use or want to use Homebrew, please see:_
[Installation on macOS Big Sur](https://github.com/cyjoelchen/php-sweph/wiki/Install-on-macOS-Big-Sur.)

```
git clone -b 4.0.10 https://github.com/cyjoelchen/php-sweph.git
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
 library (libswe.a) version | 2.10.03
 default ephemeris file path | .:/users/ephe2/:/users/ephe/ 

You are all set!

## PhpStorm IDE Support
A plugin repository is maintained for this extension, allowing auto-complete and static analysis in PhpStorm for all Swiss Ephemeris methods:

https://github.com/arcpointgroup/phpstorm-library-plugin

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

_Documentation is included in this repository here:_
```
/doc/doc.html
/doc/doc.md
```
[Read it here on GitHub &raquo;](https://github.com/cyjoelchen/php-sweph/blob/master/doc/doc.md)

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
        $planets[$i] = array('error' => $xx['rc'], 'message' => $xx['serr']);
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

Functions can also be tested and executed directly from the command line:                                    
```                                                                                                          
php -r '$jd=swe_julday(2002, 1, 1, 0, 1);var_dump(swe_calc_ut($jd,SE_SUN,SEFLG_SPEED));'                     
                                                                                                             
output:                                                                                                      
array(8) {
  [0]=>
  float(280.38372636858)
  [1]=>
  float(0.00014970535610325)
  [2]=>
  float(0.98329783154375)
  [3]=>
  float(1.0188772684611)
  [4]=>
  float(1.7224710342829E-5)
  [5]=>
  float(-1.0215998283642E-5)
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
```                                                                                                          

## Development

This repository ships with a simple Docker setup for easy development.
Setup your local environment for iterative testing:

```
> docker build -t php_sweph .
> docker run --rm --name php-sweph -dit -v ${PWD}:/root/php-sweph php_sweph
```

_The container `php-sweph` will run in the background._

The easiest way to build and test is to start an interactive terminal:

```
> docker exec -it php-sweph bash
> ./build-se
``` 

The `build-se` bash script will compile the PHP extension and install it for you.
Run tests from the PHP command line via `php -a`.
Repeat `build-se` execution runs as needed.

When you're finished, exit the container[1]:

```
> exit
> docker stop php-sweph
```
[1]
_If you started the container with the command above (i.e. by including the `--rm` switch),
the container will be removed automatically._
