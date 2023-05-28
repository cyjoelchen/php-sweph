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

$geo = array(12.1, 49.0, 330);
$tjd_ut = 2454503.06;
$atpress = 0;
$atemp = 30;

for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
    $pnam = swe_get_planet_name($p);
    $rv = Format::round(swe_calc_ut($tjd_ut, $p, SEFLG_SWIEPH));

    $xin0 = $rv[0];
    $xin1 = $rv[1];

    echo "swe_azalt($tjd_ut, SE_ECL2HOR, $geo[0], $geo[1], $geo[2], $atpress, $atemp, $xin0, $xin1)\n";
    $rv = Format::round(swe_azalt($tjd_ut, SE_ECL2HOR, $geo[0], $geo[1], $geo[2], $atpress, $atemp, $xin0, $xin1));
    printf("planet %s\tlon=%f\tlat=%f\nhorizon coordinates\n", $pnam, $xin0, $xin1);
    var_dump($rv);

    $azi = $rv[0];
    $talt = $rv[1];

    echo "swe_azalt_rev($tjd_ut, SE_HOR2ECL, $geo[0], $geo[1], $geo[2], $azi, $talt)\n";
    $rv = Format::round(swe_azalt_rev($tjd_ut, SE_HOR2ECL, $geo[0], $geo[1], $geo[2], $azi, $talt));
    printf("converted back\tlon=%f\tlat=%f\n", $rv[0], $rv[1]);

    echo "swe_refrac($talt, $atpress, $atemp, SE_TRUE_TO_APP)\n";
    $appalt = swe_refrac($talt, $atpress, $atemp, SE_TRUE_TO_APP);
    printf("app. alt = %f\n", round($appalt, 6));

    echo "swe_refrac_extended($talt, $geo[2], $atpress, $atemp, 10.0, SE_TRUE_TO_APP)\n";
    $rv = Format::round(swe_refrac_extended($talt, $geo[2], $atpress, $atemp, 10.0, SE_TRUE_TO_APP));
    var_dump($rv);
}

?>
--EXPECT--
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.13145, -8.1E-5)
planet Sun	lon=317.131450	lat=-0.000081
horizon coordinates
array(3) {
  [0]=>
  float(31.000508)
  [1]=>
  float(19.979725)
  [2]=>
  float(20.019722)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 31.000508, 19.979725)
converted back	lon=317.131450	lat=-0.000081
swe_refrac(19.979725, 0, 30, SE_TRUE_TO_APP)
app. alt = 19.979725
swe_refrac_extended(19.979725, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(19)
  [0]=>
  float(19.979725)
  [1]=>
  float(19.976138)
  [2]=>
  float(-0.003586)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(19)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 309.888398, -1.616416)
planet Moon	lon=309.888398	lat=-1.616416
horizon coordinates
array(3) {
  [0]=>
  float(35.830421)
  [1]=>
  float(14.168707)
  [2]=>
  float(14.225327)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 35.830421, 14.168707)
converted back	lon=309.888398	lat=-1.616416
swe_refrac(14.168707, 0, 30, SE_TRUE_TO_APP)
app. alt = 14.168707
swe_refrac_extended(14.168707, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(14)
  [0]=>
  float(14.168707)
  [1]=>
  float(14.163619)
  [2]=>
  float(-0.005087)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(14)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.58169, 3.572776)
planet Mercury	lon=317.581690	lat=3.572776
horizon coordinates
array(3) {
  [0]=>
  float(33.015527)
  [1]=>
  float(23.054618)
  [2]=>
  float(23.088823)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 33.015527, 23.054618)
converted back	lon=317.581690	lat=3.572775
swe_refrac(23.054618, 0, 30, SE_TRUE_TO_APP)
app. alt = 23.054618
swe_refrac_extended(23.054618, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(23)
  [0]=>
  float(23.054618)
  [1]=>
  float(23.051552)
  [2]=>
  float(-0.003065)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(23)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 286.274617, 0.458249)
planet Venus	lon=286.274617	lat=0.458249
horizon coordinates
array(3) {
  [0]=>
  float(55.087222)
  [1]=>
  float(0.074098)
  [2]=>
  float(0.490624)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 55.087222, 0.074098)
converted back	lon=286.274617	lat=0.458248
swe_refrac(0.074098, 0, 30, SE_TRUE_TO_APP)
app. alt = 0.074098
swe_refrac_extended(0.074098, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(0)
  [0]=>
  float(0.074098)
  [1]=>
  float(0.030373)
  [2]=>
  float(-0.043724)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(0)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 84.347673, 3.269827)
planet Mars	lon=84.347673	lat=3.269827
horizon coordinates
array(3) {
  [0]=>
  float(249.152268)
  [1]=>
  float(17.317286)
  [2]=>
  float(17.363767)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 249.152268, 17.317286)
converted back	lon=84.347673	lat=3.269826
swe_refrac(17.317286, 0, 30, SE_TRUE_TO_APP)
app. alt = 17.317286
swe_refrac_extended(17.317286, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(17)
  [0]=>
  float(17.317286)
  [1]=>
  float(17.313115)
  [2]=>
  float(-0.00417)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(17)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 281.081048, 0.116115)
planet Jupiter	lon=281.081048	lat=0.116115
horizon coordinates
array(3) {
  [0]=>
  float(58.699496)
  [1]=>
  float(-3.675366)
  [2]=>
  float(-3.675366)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 58.699496, -3.675366)
converted back	lon=281.081048	lat=0.116114
swe_refrac(-3.675366, 0, 30, SE_TRUE_TO_APP)
app. alt = -3.675366
swe_refrac_extended(-3.675366, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(-3)
  [0]=>
  float(-3.675366)
  [1]=>
  float(-3.675366)
  [2]=>
  float(0)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(-3)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 156.55664, 1.807919)
planet Saturn	lon=156.556640	lat=1.807919
horizon coordinates
array(3) {
  [0]=>
  float(192.185197)
  [1]=>
  float(-29.463313)
  [2]=>
  float(-29.463313)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 192.185197, -29.463313)
converted back	lon=156.556639	lat=1.807919
swe_refrac(-29.463313, 0, 30, SE_TRUE_TO_APP)
app. alt = -29.463313
swe_refrac_extended(-29.463313, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(-29)
  [0]=>
  float(-29.463313)
  [1]=>
  float(-29.463313)
  [2]=>
  float(0)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(-29)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 346.911442, -0.738805)
planet Uranus	lon=346.911442	lat=-0.738805
horizon coordinates
array(3) {
  [0]=>
  float(1.848703)
  [1]=>
  float(35.134978)
  [2]=>
  float(35.15571)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 1.848703, 35.134978)
converted back	lon=346.911442	lat=-0.738805
swe_refrac(35.134978, 0, 30, SE_TRUE_TO_APP)
app. alt = 35.134978
swe_refrac_extended(35.134978, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(35)
  [0]=>
  float(35.134978)
  [1]=>
  float(35.133121)
  [2]=>
  float(-0.001856)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(35)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 321.544644, -0.29238)
planet Neptune	lon=321.544644	lat=-0.292380
horizon coordinates
array(3) {
  [0]=>
  float(27.052451)
  [1]=>
  float(22.432808)
  [2]=>
  float(22.468063)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 27.052451, 22.432808)
converted back	lon=321.544643	lat=-0.292380
swe_refrac(22.432808, 0, 30, SE_TRUE_TO_APP)
app. alt = 22.432808
swe_refrac_extended(22.432808, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(22)
  [0]=>
  float(22.432808)
  [1]=>
  float(22.429647)
  [2]=>
  float(-0.00316)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(22)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 270.338455, 6.283563)
planet Pluto	lon=270.338455	lat=6.283563
horizon coordinates
array(3) {
  [0]=>
  float(70.859346)
  [1]=>
  float(-6.169858)
  [2]=>
  float(-6.169858)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 70.859346, -6.169858)
converted back	lon=270.338456	lat=6.283563
swe_refrac(-6.169858, 0, 30, SE_TRUE_TO_APP)
app. alt = -6.169858
swe_refrac_extended(-6.169858, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(-6)
  [0]=>
  float(-6.169858)
  [1]=>
  float(-6.169858)
  [2]=>
  float(0)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(-6)
}
