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
