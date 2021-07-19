<?php

# this needs to be set to where the users keeps ephemeris files and sefstars.txt
swe_set_ephe_path("/home/ephe");

# calc planet position
list($y, $m, $d, $h, $mi, $s) = [2021, 7, 18, 14, 30, 00];
$jul_ut = swe_julday($y, $m, $d, ($h + $mi / 60 + $s / 3600), SE_GREG_CAL);

$planets['julday'] = $jul_ut;
$planets['date'] = "$y $m $d $h:$mi:$s";

for($i = SE_SUN; $i <= SE_PLUTO; $i++)
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
define("GEO_LNG", 6.571680);
define("GEO_LAT", 43.205742);
$place = 'La Croix Valmer, France';

$yy = swe_houses($jul_ut, GEO_LAT, GEO_LNG, "P"); // P = Placidus. 

$houses = array();

for($i = 1; $i <= 12; $i ++) 
{
    $houses[$i] =  $yy['cusps'][$i];
}

echo "houses for $place: \n" . json_encode($houses, $options = JSON_PRETTY_PRINT) . "\n";

$flags = array(SE_CALC_RISE, SE_CALC_MTRANSIT, SE_CALC_SET, SE_CALC_ITRANSIT );
$flagnam = array('rise', 'mer_transit', 'set', 'lower_mer_transit');
$planet = SE_MOON;
$pnam = swe_get_planet_name($planet);
for($i = 0; $i < 4; $i++) {
  $rv = swe_rise_trans($jul_ut, $planet, "", 0, $flags[$i], GEO_LNG, GEO_LAT, 0, 0, 0);
  if ($rv['retval'] < 0)
    $tr = 'never';
  else
    $tr = $rv['tret'][0];
  $ptrans[$i] = array(
    'what' => $flagnam[$i],
    'when' => print_date($tr)
  );
}
echo "rise $pnam: \n" . json_encode($ptrans, $options = JSON_PRETTY_PRINT) . "\n";

$starname = 'Sirius';
for($i = 0; $i < 4; $i++) {
  $rv = swe_rise_trans($jul_ut, $planet, $starname, 0, $flags[$i], GEO_LNG, GEO_LAT, 0, 0, 0);
  if ($rv['retval'] < 0)
    $tr = 'never';
  else
    $tr = $rv['tret'][0];
  $strans['star'] = $rv['star'];
  $strans[$i] = array(
    'what' => $flagnam[$i],
    'when' => print_date($tr)
  );
}
echo "rise $starname: \n" . json_encode($strans, $options = JSON_PRETTY_PRINT) . "\n";

function print_date($t)
{
  $r = swe_jdut1_to_utc($t, SE_GREG_CAL);
  $sec = floor($r['sec'] * 100) / 100;
  $date = $r['year'] . " " .  $r['month'] . " " .  $r['day']  . "  " . $r['hour'] .":".$r['min'] .":".$sec;
  # $date = $r['year'] . " / ss";
  return $date;
}
