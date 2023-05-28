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
  $rv = swe_pheno(2454503.6, $p, SEFLG_SWIEPH);
  printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
  var_dump(Format::round($rv['attr']));
}

for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
  $pnam = swe_get_planet_name($p);
  echo "swe_pheno_ut(2453503.6, $p, SEFLG_SWIEPH)\n";
  $rv = swe_pheno_ut(2453503.6, $p, SEFLG_SWIEPH);
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
  float(-26.890234)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 1, SEFLG_SWIEPH)
Moon	retflag = 2 10
array(6) {
  [0]=>
  float(178.794516)
  [1]=>
  float(0.00011)
  [2]=>
  float(1.202222)
  [3]=>
  float(0.519086)
  [4]=>
  float(3.706731)
  [5]=>
  float(0.952789)
}
swe_pheno(2454503.6, 2, SEFLG_SWIEPH)
Mercury	retflag = 2 10
array(6) {
  [0]=>
  float(169.154362)
  [1]=>
  float(0.008931)
  [2]=>
  float(3.694023)
  [3]=>
  float(0.002863)
  [4]=>
  float(5.25881)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 3, SEFLG_SWIEPH)
Venus	retflag = 2 10
array(6) {
  [0]=>
  float(44.050207)
  [1]=>
  float(0.859365)
  [2]=>
  float(30.741318)
  [3]=>
  float(0.003386)
  [4]=>
  float(-3.937999)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 4, SEFLG_SWIEPH)
Mars	retflag = 2 10
array(6) {
  [0]=>
  float(29.198517)
  [1]=>
  float(0.936467)
  [2]=>
  float(126.645368)
  [3]=>
  float(0.003139)
  [4]=>
  float(-0.412361)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 5, SEFLG_SWIEPH)
Jupiter	retflag = 2 10
array(6) {
  [0]=>
  float(6.430372)
  [1]=>
  float(0.996854)
  [2]=>
  float(36.485707)
  [3]=>
  float(0.008933)
  [4]=>
  float(-1.888969)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 6, SEFLG_SWIEPH)
Saturn	retflag = 2 10
array(6) {
  [0]=>
  float(1.981944)
  [1]=>
  float(0.9997)
  [2]=>
  float(161.077731)
  [3]=>
  float(0.00535)
  [4]=>
  float(0.321584)
  [5]=>
  float(0)
}
swe_pheno(2454503.6, 7, SEFLG_SWIEPH)
Uranus	retflag = 2 10
array(6) {
  [0]=>
  float(1.378548)
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
  float(0.132518)
  [1]=>
  float(0.999998)
  [2]=>
  float(3.897905)
  [3]=>
  float(0.000607)
  [4]=>
  float(7.847211)
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
  float(14.015977)
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
  float(0.527608)
  [4]=>
  float(-26.837369)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 1, SEFLG_SWIEPH)
Moon	retflag = 2 10
array(6) {
  [0]=>
  float(125.504319)
  [1]=>
  float(0.209617)
  [2]=>
  float(54.371336)
  [3]=>
  float(0.493609)
  [4]=>
  float(-8.340213)
  [5]=>
  float(0.906096)
}
swe_pheno_ut(2453503.6, 2, SEFLG_SWIEPH)
Mercury	retflag = 2 10
array(6) {
  [0]=>
  float(66.367253)
  [1]=>
  float(0.700436)
  [2]=>
  float(21.429813)
  [3]=>
  float(0.001695)
  [4]=>
  float(-0.267627)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 3, SEFLG_SWIEPH)
Venus	retflag = 2 10
array(6) {
  [0]=>
  float(15.751581)
  [1]=>
  float(0.981223)
  [2]=>
  float(11.15905)
  [3]=>
  float(0.002751)
  [4]=>
  float(-3.899239)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 4, SEFLG_SWIEPH)
Mars	retflag = 2 10
array(6) {
  [0]=>
  float(43.451203)
  [1]=>
  float(0.86298)
  [2]=>
  float(73.779833)
  [3]=>
  float(0.001987)
  [4]=>
  float(0.466286)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 5, SEFLG_SWIEPH)
Jupiter	retflag = 2 10
array(6) {
  [0]=>
  float(7.213334)
  [1]=>
  float(0.996042)
  [2]=>
  float(137.273177)
  [3]=>
  float(0.011464)
  [4]=>
  float(-2.334114)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 6, SEFLG_SWIEPH)
Saturn	retflag = 2 10
array(6) {
  [0]=>
  float(5.552011)
  [1]=>
  float(0.997654)
  [2]=>
  float(60.297034)
  [3]=>
  float(0.004679)
  [4]=>
  float(0.214602)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 7, SEFLG_SWIEPH)
Uranus	retflag = 2 10
array(6) {
  [0]=>
  float(2.74648)
  [1]=>
  float(0.999425)
  [2]=>
  float(72.107567)
  [3]=>
  float(0.000954)
  [4]=>
  float(5.914068)
  [5]=>
  float(0)
}
swe_pheno_ut(2453503.6, 8, SEFLG_SWIEPH)
Neptune	retflag = 2 10
array(6) {
  [0]=>
  float(1.920723)
  [1]=>
  float(0.999719)
  [2]=>
  float(94.84599)
  [3]=>
  float(0.000629)
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
  float(147.501315)
  [3]=>
  float(3.0E-5)
  [4]=>
  float(13.845448)
  [5]=>
  float(0)
}
