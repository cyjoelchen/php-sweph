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
swe_set_ephe_path('./sweph/ephe');
for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
  $pnam = swe_get_planet_name($p);
  echo "swe_pheno(2454503.6, $p, SEFLG_SWIEPH)\n";
  $rv = swe_pheno(2454503.6, $p, SEFLG_SWIEPH);\
  printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
  print_array( $rv['attr'], 6, 'attr');
}
for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
  $pnam = swe_get_planet_name($p);
  echo "swe_pheno_ut(2453503.6, $p, SEFLG_SWIEPH)\n";
  $rv = swe_pheno_ut(2453503.6, $p, SEFLG_SWIEPH);\
  printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
  print_array( $rv['attr'], 6, 'attr');
}

function print_date($t)
{
  $r = swe_jdut1_to_utc($t, SE_GREG_CAL);
  $sec = floor($r['sec']);
  $date = $r['year'] . " " .  $r['month'] . " " .  $r['day']  . "  " . $r['hour'] .":".$r['min'] .":".$sec .' UT';
  # $date = $r['year'] . " / ss";
  return $date;
}

function print_array($arr, $n, $name)
{
  for ($i = 0; $i < $n; $i++)
   printf( "%s[%d] = %f\n", $name, $i, $arr[$i]);;
}
function print_array_t($arr, $n, $name)
{
  for ($i = 0; $i < $n; $i++) {
   printf( "%s[%d] = %f %s\n", $name, $i, $arr[$i], print_date($arr[$i]));;
  }
}
?>
--EXPECT--
swe_pheno(2454503.6, 0, SEFLG_SWIEPH)
Sun	retflag = 2 10
attr[0] = 0.000000
attr[1] = 0.000000
attr[2] = 0.000000
attr[3] = 0.540611
attr[4] = -26.890235
attr[5] = 0.000000
swe_pheno(2454503.6, 1, SEFLG_SWIEPH)
Moon	retflag = 2 10
attr[0] = 178.794517
attr[1] = 0.000111
attr[2] = 1.202223
attr[3] = 0.519086
attr[4] = -3.987935
attr[5] = 0.952789
swe_pheno(2454503.6, 2, SEFLG_SWIEPH)
Mercury	retflag = 2 10
attr[0] = 169.154363
attr[1] = 0.008931
attr[2] = 3.694023
attr[3] = 0.002864
attr[4] = 5.258810
attr[5] = 0.000000
swe_pheno(2454503.6, 3, SEFLG_SWIEPH)
Venus	retflag = 2 10
attr[0] = 44.050208
attr[1] = 0.859365
attr[2] = 30.741319
attr[3] = 0.003387
attr[4] = -3.937999
attr[5] = 0.000000
swe_pheno(2454503.6, 4, SEFLG_SWIEPH)
Mars	retflag = 2 10
attr[0] = 29.198518
attr[1] = 0.936467
attr[2] = 126.645369
attr[3] = 0.003139
attr[4] = -0.412362
attr[5] = 0.000000
swe_pheno(2454503.6, 5, SEFLG_SWIEPH)
Jupiter	retflag = 2 10
attr[0] = 6.430373
attr[1] = 0.996854
attr[2] = 36.485708
attr[3] = 0.008934
attr[4] = -1.888970
attr[5] = 0.000000
swe_pheno(2454503.6, 6, SEFLG_SWIEPH)
Saturn	retflag = 2 10
attr[0] = 1.981945
attr[1] = 0.999701
attr[2] = 161.077732
attr[3] = 0.005350
attr[4] = 0.321585
attr[5] = 0.000000
swe_pheno(2454503.6, 7, SEFLG_SWIEPH)
Uranus	retflag = 2 10
attr[0] = 1.378549
attr[1] = 0.999855
attr[2] = 29.269562
attr[3] = 0.000927
attr[4] = 5.970784
attr[5] = 0.000000
swe_pheno(2454503.6, 8, SEFLG_SWIEPH)
Neptune	retflag = 2 10
attr[0] = 0.132519
attr[1] = 0.999999
attr[2] = 3.897906
attr[3] = 0.000608
attr[4] = 7.847212
attr[5] = 0.000000
swe_pheno(2454503.6, 9, SEFLG_SWIEPH)
Pluto	retflag = 2 10
attr[0] = 1.326519
attr[1] = 0.999866
attr[2] = 47.641525
attr[3] = 0.000028
attr[4] = 14.015978
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 0, SEFLG_SWIEPH)
Sun	retflag = 2 10
attr[0] = 0.000000
attr[1] = 0.000000
attr[2] = 0.000000
attr[3] = 0.527609
attr[4] = -26.837369
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 1, SEFLG_SWIEPH)
Moon	retflag = 2 10
attr[0] = 125.504320
attr[1] = 0.209618
attr[2] = 54.371336
attr[3] = 0.493610
attr[4] = -8.359463
attr[5] = 0.906096
swe_pheno_ut(2453503.6, 2, SEFLG_SWIEPH)
Mercury	retflag = 2 10
attr[0] = 66.367254
attr[1] = 0.700436
attr[2] = 21.429813
attr[3] = 0.001695
attr[4] = -0.267628
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 3, SEFLG_SWIEPH)
Venus	retflag = 2 10
attr[0] = 15.751581
attr[1] = 0.981224
attr[2] = 11.159051
attr[3] = 0.002752
attr[4] = -3.899240
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 4, SEFLG_SWIEPH)
Mars	retflag = 2 10
attr[0] = 43.451204
attr[1] = 0.862980
attr[2] = 73.779834
attr[3] = 0.001987
attr[4] = 0.466287
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 5, SEFLG_SWIEPH)
Jupiter	retflag = 2 10
attr[0] = 7.213335
attr[1] = 0.996043
attr[2] = 137.273177
attr[3] = 0.011465
attr[4] = -2.334115
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 6, SEFLG_SWIEPH)
Saturn	retflag = 2 10
attr[0] = 5.552012
attr[1] = 0.997654
attr[2] = 60.297034
attr[3] = 0.004680
attr[4] = 0.214603
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 7, SEFLG_SWIEPH)
Uranus	retflag = 2 10
attr[0] = 2.746480
attr[1] = 0.999426
attr[2] = 72.107567
attr[3] = 0.000955
attr[4] = 5.914068
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 8, SEFLG_SWIEPH)
Neptune	retflag = 2 10
attr[0] = 1.920724
attr[1] = 0.999719
attr[2] = 94.845990
attr[3] = 0.000630
attr[4] = 7.772944
attr[5] = 0.000000
swe_pheno_ut(2453503.6, 9, SEFLG_SWIEPH)
Pluto	retflag = 2 10
attr[0] = 1.010404
attr[1] = 0.999922
attr[2] = 147.501316
attr[3] = 0.000030
attr[4] = 13.845449
attr[5] = 0.000000
