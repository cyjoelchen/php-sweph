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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.131451, -8.2E-5)
planet Sun	lon=317.131451	lat=-0.000082
horizon coordinates
array(3) {
  [0]=>
  float(31.000507)
  [1]=>
  float(19.979725)
  [2]=>
  float(20.019722)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 31.000507, 19.979725)
converted back	lon=317.131451	lat=-0.000082
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
  float(-0.003587)
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
  float(35.830422)
  [1]=>
  float(14.168707)
  [2]=>
  float(14.225327)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 35.830422, 14.168707)
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
  float(14.16362)
  [2]=>
  float(-0.005087)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(14)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.58169, 3.572777)
planet Mercury	lon=317.581690	lat=3.572777
horizon coordinates
array(3) {
  [0]=>
  float(33.015528)
  [1]=>
  float(23.054619)
  [2]=>
  float(23.088824)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 33.015528, 23.054619)
converted back	lon=317.581690	lat=3.572776
swe_refrac(23.054619, 0, 30, SE_TRUE_TO_APP)
app. alt = 23.054619
swe_refrac_extended(23.054619, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(23)
  [0]=>
  float(23.054619)
  [1]=>
  float(23.051553)
  [2]=>
  float(-0.003066)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(23)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 286.274618, 0.45825)
planet Venus	lon=286.274618	lat=0.458250
horizon coordinates
array(3) {
  [0]=>
  float(55.087223)
  [1]=>
  float(0.0741)
  [2]=>
  float(0.490626)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 55.087223, 0.0741)
converted back	lon=286.274618	lat=0.458250
swe_refrac(0.0741, 0, 30, SE_TRUE_TO_APP)
app. alt = 0.074100
swe_refrac_extended(0.0741, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(0)
  [0]=>
  float(0.0741)
  [1]=>
  float(0.030375)
  [2]=>
  float(-0.043725)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(0)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 84.347674, 3.269828)
planet Mars	lon=84.347674	lat=3.269828
horizon coordinates
array(3) {
  [0]=>
  float(249.152267)
  [1]=>
  float(17.317287)
  [2]=>
  float(17.363768)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 249.152267, 17.317287)
converted back	lon=84.347674	lat=3.269828
swe_refrac(17.317287, 0, 30, SE_TRUE_TO_APP)
app. alt = 17.317287
swe_refrac_extended(17.317287, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(17)
  [0]=>
  float(17.317287)
  [1]=>
  float(17.313116)
  [2]=>
  float(-0.004171)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(17)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 281.081049, 0.116116)
planet Jupiter	lon=281.081049	lat=0.116116
horizon coordinates
array(3) {
  [0]=>
  float(58.699497)
  [1]=>
  float(-3.675365)
  [2]=>
  float(-3.675365)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 58.699497, -3.675365)
converted back	lon=281.081049	lat=0.116116
swe_refrac(-3.675365, 0, 30, SE_TRUE_TO_APP)
app. alt = -3.675365
swe_refrac_extended(-3.675365, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(-3)
  [0]=>
  float(-3.675365)
  [1]=>
  float(-3.675365)
  [2]=>
  float(0)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(-3)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 156.556641, 1.807919)
planet Saturn	lon=156.556641	lat=1.807919
horizon coordinates
array(3) {
  [0]=>
  float(192.185196)
  [1]=>
  float(-29.463314)
  [2]=>
  float(-29.463314)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 192.185196, -29.463314)
converted back	lon=156.556641	lat=1.807919
swe_refrac(-29.463314, 0, 30, SE_TRUE_TO_APP)
app. alt = -29.463314
swe_refrac_extended(-29.463314, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(-29)
  [0]=>
  float(-29.463314)
  [1]=>
  float(-29.463314)
  [2]=>
  float(0)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(-29)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 346.911443, -0.738806)
planet Uranus	lon=346.911443	lat=-0.738806
horizon coordinates
array(3) {
  [0]=>
  float(1.848702)
  [1]=>
  float(35.134978)
  [2]=>
  float(35.15571)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 1.848702, 35.134978)
converted back	lon=346.911443	lat=-0.738806
swe_refrac(35.134978, 0, 30, SE_TRUE_TO_APP)
app. alt = 35.134978
swe_refrac_extended(35.134978, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(35)
  [0]=>
  float(35.134978)
  [1]=>
  float(35.133122)
  [2]=>
  float(-0.001856)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(35)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 321.544645, -0.292381)
planet Neptune	lon=321.544645	lat=-0.292381
horizon coordinates
array(3) {
  [0]=>
  float(27.05245)
  [1]=>
  float(22.432809)
  [2]=>
  float(22.468064)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 27.05245, 22.432809)
converted back	lon=321.544645	lat=-0.292381
swe_refrac(22.432809, 0, 30, SE_TRUE_TO_APP)
app. alt = 22.432809
swe_refrac_extended(22.432809, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(22)
  [0]=>
  float(22.432809)
  [1]=>
  float(22.429649)
  [2]=>
  float(-0.00316)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(22)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 270.338456, 6.283563)
planet Pluto	lon=270.338456	lat=6.283563
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
