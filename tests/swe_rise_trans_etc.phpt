--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php

include 'utility/Format.php';
swe_set_ephe_path('./sweph/ephe');

# calc planet position
list($y, $m, $d, $h, $mi, $s) = [2021, 7, 18, 14, 30, 00];
$jul_ut = swe_julday($y, $m, $d, ($h + $mi / 60 + $s / 3600), SE_GREG_CAL);

$planets['julday'] = $jul_ut;
$planets['date'] = "$y $m $d $h:$mi:$s";

for($i = SE_SUN; $i <= SE_PLUTO; $i++)
{
    $xx = swe_calc_ut($jul_ut, $i, SEFLG_SPEED|SEFLG_SWIEPH);
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
echo "planets:\n";
var_dump(Format::round($planets));

# calc house cusps
define("GEO_LNG", 6.57);
define("GEO_LAT", 43.21);
$place = 'La Croix Valmer, France';

$yy = swe_houses($jul_ut, GEO_LAT, GEO_LNG, "P"); // P = Placidus. 

$houses = array();

for($i = 1; $i <= 12; $i ++) 
{
    $houses[$i] =  $yy['cusps'][$i];
}

echo "houses for $place:\n";
var_dump(Format::round($houses));

$flags = array(SE_CALC_RISE, SE_CALC_MTRANSIT, SE_CALC_SET, SE_CALC_ITRANSIT );
$flagnam = array('rise', 'mer_transit', 'set', 'lower_mer_transit');
$planet = SE_MOON;
$pnam = swe_get_planet_name($planet);
for($i = 0; $i < 4; $i++) {
  $rv = swe_rise_trans($jul_ut, $planet, "", 0, $flags[$i], GEO_LNG, GEO_LAT, 0, 0, 0);
  if ($rv['rc'] < 0)
    $tr = 'never';
  else
    $tr = $rv['tret'][0];
  $ptrans[$i] = array(
    'what' => $flagnam[$i],
    'tr'   => $tr,
    'when' => Format::asUtc($tr)
  );
}
echo "rise $pnam:\n";
var_dump(Format::round($ptrans));

$starname = 'Aldebaran';
for($i = 0; $i < 4; $i++) {
  $rv = swe_rise_trans($jul_ut, $planet, $starname, 0, $flags[$i], GEO_LNG, GEO_LAT, 0, 0, 0);
  if ($rv['rc'] < 0)
    $tr = 'never';
  else
    $tr = $rv['tret'][0];
  $strans['star'] = $rv['star'];
  $strans[$i] = array(
    'what' => $flagnam[$i],
    'tr'   => $tr,
    'when' => Format::asUtc($tr)
  );
}
echo "rise $starname:\n";
var_dump(Format::round($strans));

?>
--EXPECT--
planets:
array(12) {
  ["julday"]=>
  float(2459414.104166)
  ["date"]=>
  string(17) "2021 7 18 14:30:0"
  [0]=>
  array(4) {
    ["name"]=>
    string(3) "Sun"
    ["lng"]=>
    float(116.18535)
    ["lat"]=>
    float(0.000126)
    ["speed"]=>
    float(0.954103)
  }
  [1]=>
  array(4) {
    ["name"]=>
    string(4) "Moon"
    ["lng"]=>
    float(221.700161)
    ["lat"]=>
    float(2.433218)
    ["speed"]=>
    float(14.221994)
  }
  [2]=>
  array(4) {
    ["name"]=>
    string(7) "Mercury"
    ["lng"]=>
    float(101.038063)
    ["lat"]=>
    float(-0.15312)
    ["speed"]=>
    float(1.831599)
  }
  [3]=>
  array(4) {
    ["name"]=>
    string(5) "Venus"
    ["lng"]=>
    float(145.887149)
    ["lat"]=>
    float(1.606489)
    ["speed"]=>
    float(1.203191)
  }
  [4]=>
  array(4) {
    ["name"]=>
    string(4) "Mars"
    ["lng"]=>
    float(142.958951)
    ["lat"]=>
    float(1.15981)
    ["speed"]=>
    float(0.624285)
  }
  [5]=>
  array(4) {
    ["name"]=>
    string(7) "Jupiter"
    ["lng"]=>
    float(330.959482)
    ["lat"]=>
    float(-1.086721)
    ["speed"]=>
    float(-0.084815)
  }
  [6]=>
  array(4) {
    ["name"]=>
    string(6) "Saturn"
    ["lng"]=>
    float(311.254309)
    ["lat"]=>
    float(-0.755638)
    ["speed"]=>
    float(-0.070329)
  }
  [7]=>
  array(4) {
    ["name"]=>
    string(6) "Uranus"
    ["lng"]=>
    float(44.363312)
    ["lat"]=>
    float(-0.409489)
    ["speed"]=>
    float(0.025946)
  }
  [8]=>
  array(4) {
    ["name"]=>
    string(7) "Neptune"
    ["lng"]=>
    float(353.061322)
    ["lat"]=>
    float(-1.144519)
    ["speed"]=>
    float(-0.011878)
  }
  [9]=>
  array(4) {
    ["name"]=>
    string(5) "Pluto"
    ["lng"]=>
    float(295.544263)
    ["lat"]=>
    float(-1.573848)
    ["speed"]=>
    float(-0.024042)
  }
}
houses for La Croix Valmer, France:
array(12) {
  [1]=>
  float(234.343461)
  [2]=>
  float(265.171191)
  [3]=>
  float(301.868576)
  [4]=>
  float(339.096638)
  [5]=>
  float(10.244718)
  [6]=>
  float(34.575604)
  [7]=>
  float(54.343461)
  [8]=>
  float(85.171191)
  [9]=>
  float(121.868576)
  [10]=>
  float(159.096638)
  [11]=>
  float(190.244718)
  [12]=>
  float(214.575604)
}
rise Moon:
array(4) {
  [0]=>
  array(3) {
    ["what"]=>
    string(4) "rise"
    ["tr"]=>
    float(2459415.105138)
    ["when"]=>
    string(22) "2021 7 19  14:31:24 UT"
  }
  [1]=>
  array(3) {
    ["what"]=>
    string(11) "mer_transit"
    ["tr"]=>
    float(2459414.275003)
    ["when"]=>
    string(21) "2021 7 18  18:36:0 UT"
  }
  [2]=>
  array(3) {
    ["what"]=>
    string(3) "set"
    ["tr"]=>
    float(2459414.491543)
    ["when"]=>
    string(22) "2021 7 18  23:47:49 UT"
  }
  [3]=>
  array(3) {
    ["what"]=>
    string(17) "lower_mer_transit"
    ["tr"]=>
    float(2459414.793603)
    ["when"]=>
    string(20) "2021 7 19  7:2:47 UT"
  }
}
rise Aldebaran:
array(5) {
  ["star"]=>
  string(15) "Aldebaran,alTau"
  [0]=>
  array(3) {
    ["what"]=>
    string(4) "rise"
    ["tr"]=>
    float(2459414.551462)
    ["when"]=>
    string(20) "2021 7 19  1:14:6 UT"
  }
  [1]=>
  array(3) {
    ["what"]=>
    string(11) "mer_transit"
    ["tr"]=>
    float(2459414.84822)
    ["when"]=>
    string(21) "2021 7 19  8:21:26 UT"
  }
  [2]=>
  array(3) {
    ["what"]=>
    string(3) "set"
    ["tr"]=>
    float(2459414.147709)
    ["when"]=>
    string(22) "2021 7 18  15:32:42 UT"
  }
  [3]=>
  array(3) {
    ["what"]=>
    string(17) "lower_mer_transit"
    ["tr"]=>
    float(2459414.349585)
    ["when"]=>
    string(22) "2021 7 18  20:23:24 UT"
  }
}
