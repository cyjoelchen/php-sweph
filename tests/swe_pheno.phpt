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

for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
  $pnam = swe_get_planet_name($p);
  echo "swe_pheno(2454503.6, $p, SEFLG_SWIEPH)\n";
  $rv = swe_pheno(2454503.6, $p, SEFLG_SWIEPH);\
  printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
  var_dump(Format::round($rv['attr']));
}

for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
  $pnam = swe_get_planet_name($p);
  echo "swe_pheno_ut(2453503.6, $p, SEFLG_SWIEPH)\n";
  $rv = swe_pheno_ut(2453503.6, $p, SEFLG_SWIEPH);\
  printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
  var_dump(Format::round($rv['attr']));
}

?>
--EXPECT--
swe_pheno(2454503.6, 0, SEFLG_SWIEPH)
Sun	retflag = 2 10
array(6) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0.540611)
  [4]=>
  float(-26.890235)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 1, SEFLG_SWIEPH)
Moon	retflag = 2 10
array(6) {
  [0]=>
  float(178.794517)
  [1]=>
  float(0.000111)
  [2]=>
  float(1.202223)
  [3]=>
  float(0.519086)
  [4]=>
  float(-3.987935)
  [5]=>
  float(0.952789)
}
swe_pheno(2454503.6, 2, SEFLG_SWIEPH)
Mercury	retflag = 2 10
array(6) {
  [0]=>
  float(169.154363)
  [1]=>
  float(0.008931)
  [2]=>
  float(3.694023)
  [3]=>
  float(0.002864)
  [4]=>
  float(5.25881)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 3, SEFLG_SWIEPH)
Venus	retflag = 2 10
array(6) {
  [0]=>
  float(44.050208)
  [1]=>
  float(0.859365)
  [2]=>
  float(30.741319)
  [3]=>
  float(0.003387)
  [4]=>
  float(-3.937999)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 4, SEFLG_SWIEPH)
Mars	retflag = 2 10
array(6) {
  [0]=>
  float(29.198518)
  [1]=>
  float(0.936467)
  [2]=>
  float(126.645369)
  [3]=>
  float(0.003139)
  [4]=>
  float(-0.412362)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 5, SEFLG_SWIEPH)
Jupiter	retflag = 2 10
array(6) {
  [0]=>
  float(6.430373)
  [1]=>
  float(0.996854)
  [2]=>
  float(36.485708)
  [3]=>
  float(0.008934)
  [4]=>
  float(-1.88897)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 6, SEFLG_SWIEPH)
Saturn	retflag = 2 10
array(6) {
  [0]=>
  float(1.981945)
  [1]=>
  float(0.999701)
  [2]=>
  float(161.077732)
  [3]=>
  float(0.00535)
  [4]=>
  float(0.321585)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 7, SEFLG_SWIEPH)
Uranus	retflag = 2 10
array(6) {
  [0]=>
  float(1.378549)
  [1]=>
  float(0.999855)
  [2]=>
  float(29.269562)
  [3]=>
  float(0.000927)
  [4]=>
  float(5.970784)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 8, SEFLG_SWIEPH)
Neptune	retflag = 2 10
array(6) {
  [0]=>
  float(0.132519)
  [1]=>
  float(0.999999)
  [2]=>
  float(3.897906)
  [3]=>
  float(0.000608)
  [4]=>
  float(7.847212)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 9, SEFLG_SWIEPH)
Pluto	retflag = 2 10
array(6) {
  [0]=>
  float(1.326519)
  [1]=>
  float(0.999866)
  [2]=>
  float(47.641525)
  [3]=>
  float(2.8E-5)
  [4]=>
  float(14.015978)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 0, SEFLG_SWIEPH)
Sun	retflag = 2 10
array(6) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0.527609)
  [4]=>
  float(-26.837369)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 1, SEFLG_SWIEPH)
Moon	retflag = 2 10
array(6) {
  [0]=>
  float(125.50432)
  [1]=>
  float(0.209618)
  [2]=>
  float(54.371336)
  [3]=>
  float(0.49361)
  [4]=>
  float(-8.359463)
  [5]=>
  float(0.906096)
}
swe_pheno_ut(2453503.6, 2, SEFLG_SWIEPH)
Mercury	retflag = 2 10
array(6) {
  [0]=>
  float(66.367254)
  [1]=>
  float(0.700436)
  [2]=>
  float(21.429813)
  [3]=>
  float(0.001695)
  [4]=>
  float(-0.267628)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 3, SEFLG_SWIEPH)
Venus	retflag = 2 10
array(6) {
  [0]=>
  float(15.751581)
  [1]=>
  float(0.981224)
  [2]=>
  float(11.159051)
  [3]=>
  float(0.002752)
  [4]=>
  float(-3.89924)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 4, SEFLG_SWIEPH)
Mars	retflag = 2 10
array(6) {
  [0]=>
  float(43.451204)
  [1]=>
  float(0.86298)
  [2]=>
  float(73.779834)
  [3]=>
  float(0.001987)
  [4]=>
  float(0.466287)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 5, SEFLG_SWIEPH)
Jupiter	retflag = 2 10
array(6) {
  [0]=>
  float(7.213335)
  [1]=>
  float(0.996043)
  [2]=>
  float(137.273177)
  [3]=>
  float(0.011465)
  [4]=>
  float(-2.334115)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 6, SEFLG_SWIEPH)
Saturn	retflag = 2 10
array(6) {
  [0]=>
  float(5.552012)
  [1]=>
  float(0.997654)
  [2]=>
  float(60.297034)
  [3]=>
  float(0.00468)
  [4]=>
  float(0.214603)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 7, SEFLG_SWIEPH)
Uranus	retflag = 2 10
array(6) {
  [0]=>
  float(2.74648)
  [1]=>
  float(0.999426)
  [2]=>
  float(72.107567)
  [3]=>
  float(0.000955)
  [4]=>
  float(5.914068)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 8, SEFLG_SWIEPH)
Neptune	retflag = 2 10
array(6) {
  [0]=>
  float(1.920724)
  [1]=>
  float(0.999719)
  [2]=>
  float(94.84599)
  [3]=>
  float(0.00063)
  [4]=>
  float(7.772944)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 9, SEFLG_SWIEPH)
Pluto	retflag = 2 10
array(6) {
  [0]=>
  float(1.010404)
  [1]=>
  float(0.999922)
  [2]=>
  float(147.501316)
  [3]=>
  float(3.0E-5)
  [4]=>
  float(13.845449)
  [5]=>
  float(0)
}
