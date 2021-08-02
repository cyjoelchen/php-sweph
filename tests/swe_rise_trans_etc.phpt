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
echo "planets: \n";
var_dump($planets);

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

echo "houses for $place: \n";
var_dump($houses);

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
    'when' => Format::date($tr)
  );
}
echo "rise $pnam: \n";
var_dump($ptrans);

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
    'when' => Format::date($tr)
  );
}
echo "rise $starname: \n";
var_dump($strans); 

?>
--EXPECT--
planets: 
array(12) {
  ["julday"]=>
  float(2459414.1041667)
  ["date"]=>
  string(17) "2021 7 18 14:30:0"
  [0]=>
  array(4) {
    ["name"]=>
    string(3) "Sun"
    ["lng"]=>
    float(116.18534989049)
    ["lat"]=>
    float(0.00012662472317656)
    ["speed"]=>
    float(0.95410359219874)
  }
  [1]=>
  array(4) {
    ["name"]=>
    string(4) "Moon"
    ["lng"]=>
    float(221.70015460516)
    ["lat"]=>
    float(2.4332191025185)
    ["speed"]=>
    float(14.221994281492)
  }
  [2]=>
  array(4) {
    ["name"]=>
    string(7) "Mercury"
    ["lng"]=>
    float(101.03806285389)
    ["lat"]=>
    float(-0.15312011983447)
    ["speed"]=>
    float(1.8315999176181)
  }
  [3]=>
  array(4) {
    ["name"]=>
    string(5) "Venus"
    ["lng"]=>
    float(145.88714912056)
    ["lat"]=>
    float(1.606489550705)
    ["speed"]=>
    float(1.2031918265558)
  }
  [4]=>
  array(4) {
    ["name"]=>
    string(4) "Mars"
    ["lng"]=>
    float(142.95895147277)
    ["lat"]=>
    float(1.1598101112913)
    ["speed"]=>
    float(0.62428593696902)
  }
  [5]=>
  array(4) {
    ["name"]=>
    string(7) "Jupiter"
    ["lng"]=>
    float(330.95948282093)
    ["lat"]=>
    float(-1.0867218396553)
    ["speed"]=>
    float(-0.084815300481077)
  }
  [6]=>
  array(4) {
    ["name"]=>
    string(6) "Saturn"
    ["lng"]=>
    float(311.25430944266)
    ["lat"]=>
    float(-0.755638849497)
    ["speed"]=>
    float(-0.07032968576381)
  }
  [7]=>
  array(4) {
    ["name"]=>
    string(6) "Uranus"
    ["lng"]=>
    float(44.363312776843)
    ["lat"]=>
    float(-0.40948915017122)
    ["speed"]=>
    float(0.025946676071729)
  }
  [8]=>
  array(4) {
    ["name"]=>
    string(7) "Neptune"
    ["lng"]=>
    float(353.06132222642)
    ["lat"]=>
    float(-1.1445196078033)
    ["speed"]=>
    float(-0.011878927164128)
  }
  [9]=>
  array(4) {
    ["name"]=>
    string(5) "Pluto"
    ["lng"]=>
    float(295.5442639829)
    ["lat"]=>
    float(-1.573848740468)
    ["speed"]=>
    float(-0.024042545347569)
  }
}
houses for La Croix Valmer, France: 
array(12) {
  [1]=>
  float(234.34346163378)
  [2]=>
  float(265.17119112916)
  [3]=>
  float(301.86857662845)
  [4]=>
  float(339.09663856081)
  [5]=>
  float(10.244718259547)
  [6]=>
  float(34.575604926979)
  [7]=>
  float(54.343461633779)
  [8]=>
  float(85.171191129158)
  [9]=>
  float(121.86857662845)
  [10]=>
  float(159.09663856081)
  [11]=>
  float(190.24471825955)
  [12]=>
  float(214.57560492698)
}
rise Moon: 
array(4) {
  [0]=>
  array(3) {
    ["what"]=>
    string(4) "rise"
    ["tr"]=>
    float(2459415.1051389)
    ["when"]=>
    string(22) "2021 7 19  14:31:24 UT"
  }
  [1]=>
  array(3) {
    ["what"]=>
    string(11) "mer_transit"
    ["tr"]=>
    float(2459414.2750031)
    ["when"]=>
    string(21) "2021 7 18  18:36:0 UT"
  }
  [2]=>
  array(3) {
    ["what"]=>
    string(3) "set"
    ["tr"]=>
    float(2459414.4915438)
    ["when"]=>
    string(22) "2021 7 18  23:47:49 UT"
  }
  [3]=>
  array(3) {
    ["what"]=>
    string(17) "lower_mer_transit"
    ["tr"]=>
    float(2459414.7936034)
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
    float(2459414.5514624)
    ["when"]=>
    string(20) "2021 7 19  1:14:6 UT"
  }
  [1]=>
  array(3) {
    ["what"]=>
    string(11) "mer_transit"
    ["tr"]=>
    float(2459414.8482207)
    ["when"]=>
    string(21) "2021 7 19  8:21:26 UT"
  }
  [2]=>
  array(3) {
    ["what"]=>
    string(3) "set"
    ["tr"]=>
    float(2459414.1477096)
    ["when"]=>
    string(22) "2021 7 18  15:32:42 UT"
  }
  [3]=>
  array(3) {
    ["what"]=>
    string(17) "lower_mer_transit"
    ["tr"]=>
    float(2459414.3495859)
    ["when"]=>
    string(22) "2021 7 18  20:23:24 UT"
  }
}
