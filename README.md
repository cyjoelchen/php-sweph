# PHP Extension for Swiss Ephemeris
## Introduction
`php-sweph` is a PHP extension to Astrodienst Swiss Ephemeris library. It's statically linked with libswe.a to implement one-to-one, C-to-PHP function mapping, no external binary executable required.

## Installation

Follow the steps. Make sure `php-dev` has installed already.

```
    git clone https://github.com/almuten/php-sweph.git
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
 extension version | 2.0 Rev: 28 
 library (libswe.a) version | 2.07.01 
 default ephemeris file path | .:/users/ephe2/:/users/ephe/ 

You are all set!

## Example

```php
<?php
swe_set_ephe_path('/usr/local/share/sweph');

list($y, $m, $d, $h, $mi, $s) = sscanf(gmdate("Y m d G i s"), "%d %d %d %d %d %d");
$jul_ut = swe_julday($y, $m, $d, ($h + $mi / 60 + $s / 3600), SE_GREG_CAL);

echo '<table>';
echo "<tr><td colspan=5>Date: $y-$m-$d $h:$mi:$s</td></tr>";
echo "<tr><td colspan=5>Julian Date: $jul_ut</td></tr>";

for($i = SE_SUN; $i <= SE_VESTA; $i++)
{
    if ($i == SE_EARTH) continue;

    echo '<tr>';
    echo '<td>' . swe_get_planet_name($i) . '</td>';

    $xx = swe_calc_ut($jul_ut, $i, SEFLG_SPEED);
    if ($xx['rc'] < 0) { // error calling swe_calc_ut();
        echo "<td colspan=4>" . $xx['serr'] . "</td>";
        continue;
    }
    echo '<td>' . $xx[0] . '</td>';
    echo '<td>' . $xx[1] . '</td>';
    echo '<td>' . $xx[2] . '</td>';
    echo '<td>' . $xx[3] . '</td>';
    echo '</tr>';
}
echo '</table>';

```

