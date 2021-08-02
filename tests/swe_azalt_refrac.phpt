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
  $rv = swe_calc_ut($tjd_ut, $p, SEFLG_SWIEPH);
  $xin0 = $rv[0];
  $xin1 = $rv[1];

  echo "swe_azalt($tjd_ut, SE_ECL2HOR, $geo[0], $geo[1], $geo[2], $atpress, $atemp, $xin0, $xin1)\n";
  $rv = swe_azalt($tjd_ut, SE_ECL2HOR, $geo[0], $geo[1], $geo[2], $atpress, $atemp, $xin0, $xin1);
  printf("planet %s\tlon=%f\tlat=%f\nhorizon coordinates\n", $pnam, $xin0, $xin1);
  $azi = $rv[0];
  $talt = $rv[1];
  var_dump(Format::round($rv));

  echo "swe_azalt_rev($tjd_ut, SE_HOR2ECL, $geo[0], $geo[1], $geo[2], $azi, $talt)\n";
  $rv = swe_azalt_rev($tjd_ut, SE_HOR2ECL, $geo[0], $geo[1], $geo[2], $azi, $talt);
  printf("converted back\tlon=%f\tlat=%f\n", $rv[0], $rv[1]);

  echo "swe_refrac($talt, $atpress, $atemp, SE_TRUE_TO_APP)\n";
  $appalt = swe_refrac($talt, $atpress, $atemp, SE_TRUE_TO_APP);
  printf("app. alt = %f\n", $appalt);

  echo "swe_refrac_extended($talt, $geo[2], $atpress, $atemp, 10.0, SE_TRUE_TO_APP)\n";
  $rv = swe_refrac_extended($talt, $geo[2], $atpress, $atemp, 10.0, SE_TRUE_TO_APP);
  var_dump(Format::round($rv));
}

?>
--EXPECT--
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.13145055883, -8.1708335644352E-5)
planet Sun	lon=317.131451	lat=-0.000082
horizon coordinates
array(3) {
  [0]=>
  float(31.000508)
  [1]=>
  float(19.979725)
  [2]=>
  float(20.019722)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 31.000507789831, 19.97972538002)
converted back	lon=317.131451	lat=-0.000082
swe_refrac(19.97972538002, 0, 30, SE_TRUE_TO_APP)
app. alt = 19.979725
swe_refrac_extended(19.97972538002, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(19)
  [0]=>
  float(19.979725)
  [1]=>
  float(19.976139)
  [2]=>
  float(-0.003587)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(19)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 309.8883982075, -1.6164161204145)
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
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 35.830421428922, 14.168707435917)
converted back	lon=309.888398	lat=-1.616416
swe_refrac(14.168707435917, 0, 30, SE_TRUE_TO_APP)
app. alt = 14.168707
swe_refrac_extended(14.168707435917, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.58169019832, 3.5727768041555)
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
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 33.015528055456, 23.054619397828)
converted back	lon=317.581690	lat=3.572777
swe_refrac(23.054619397828, 0, 30, SE_TRUE_TO_APP)
app. alt = 23.054619
swe_refrac_extended(23.054619397828, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(23)
  [0]=>
  float(23.054619)
  [1]=>
  float(23.051554)
  [2]=>
  float(-0.003066)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(23)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 286.27461775725, 0.45824983922003)
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
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 55.087222851488, 0.074099595114085)
converted back	lon=286.274618	lat=0.458250
swe_refrac(0.074099595114085, 0, 30, SE_TRUE_TO_APP)
app. alt = 0.074100
swe_refrac_extended(0.074099595114085, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 84.347673788076, 3.269827510972)
planet Mars	lon=84.347674	lat=3.269828
horizon coordinates
array(3) {
  [0]=>
  float(249.152267)
  [1]=>
  float(17.317286)
  [2]=>
  float(17.363768)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 249.15226738768, 17.317286330931)
converted back	lon=84.347674	lat=3.269828
swe_refrac(17.317286330931, 0, 30, SE_TRUE_TO_APP)
app. alt = 17.317286
swe_refrac_extended(17.317286330931, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
array(6) {
  ["rc"]=>
  int(17)
  [0]=>
  float(17.317286)
  [1]=>
  float(17.313116)
  [2]=>
  float(-0.004171)
  [3]=>
  float(-0.582825)
  ["retflag"]=>
  float(17)
}
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 281.08104864944, 0.11611585917234)
planet Jupiter	lon=281.081049	lat=0.116116
horizon coordinates
array(3) {
  [0]=>
  float(58.699497)
  [1]=>
  float(-3.675366)
  [2]=>
  float(-3.675366)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 58.699496773198, -3.6753655043035)
converted back	lon=281.081049	lat=0.116116
swe_refrac(-3.6753655043035, 0, 30, SE_TRUE_TO_APP)
app. alt = -3.675366
swe_refrac_extended(-3.6753655043035, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 156.55664098162, 1.807919057902)
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
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 192.18519630456, -29.463314277349)
converted back	lon=156.556641	lat=1.807919
swe_refrac(-29.463314277349, 0, 30, SE_TRUE_TO_APP)
app. alt = -29.463314
swe_refrac_extended(-29.463314277349, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 346.91144266408, -0.73880594411775)
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
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 1.8487020305536, 35.134977545971)
converted back	lon=346.911443	lat=-0.738806
swe_refrac(35.134977545971, 0, 30, SE_TRUE_TO_APP)
app. alt = 35.134978
swe_refrac_extended(35.134977545971, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 321.54464479387, -0.29238086027684)
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
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 27.052449976595, 22.432808718829)
converted back	lon=321.544645	lat=-0.292381
swe_refrac(22.432808718829, 0, 30, SE_TRUE_TO_APP)
app. alt = 22.432809
swe_refrac_extended(22.432808718829, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 270.33845556252, 6.2835633668811)
planet Pluto	lon=270.338456	lat=6.283563
horizon coordinates
array(3) {
  [0]=>
  float(70.859347)
  [1]=>
  float(-6.169858)
  [2]=>
  float(-6.169858)
}
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 70.8593465128, -6.1698581235873)
converted back	lon=270.338456	lat=6.283563
swe_refrac(-6.1698581235873, 0, 30, SE_TRUE_TO_APP)
app. alt = -6.169858
swe_refrac_extended(-6.1698581235873, 330, 0, 30, 10.0, SE_TRUE_TO_APP)
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
