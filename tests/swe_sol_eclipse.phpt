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

echo "swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0)\n";
$rv = swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
$d = Format::date($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
print_array_t( $rv['tret'], 8, 'tret');

echo "swe_sol_eclipse_where($tjd_ut, SEFLG_SWIEPH)\n";
$rv = swe_sol_eclipse_where($tjd_ut, SEFLG_SWIEPH);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
print_array( $rv['geopos'], 2, 'geopos');
print_array( $rv['attr'], 11, 'attr');
$geo = array(-153.1, -65.0, 0);

echo "swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0)\n";
$rv = swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
print_array( $rv['tret'], 7, 'tret');
print_array_t( $rv['tret'], 5, 'tret');
print_array( $rv['attr'], 11, 'attr');

echo "swe_sol_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2])\n";
$rv = swe_sol_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2]);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
print_array( $rv['attr'], 11, 'attr');

function print_array($arr, $n, $name)
{
  for ($i = 0; $i < $n; $i++)
   printf( "%s[%d] = %f\n", $name, $i, $arr[$i]);;
}
function print_array_t($arr, $n, $name)
{
  for ($i = 0; $i < $n; $i++) {
   printf( "%s[%d] = %f %s\n", $name, $i, $arr[$i], Format::date($arr[$i]));;
  }
}
?>
--EXPECT--
swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0)
retflag = 9 1001
2454503.663212 2008 2 7  3:55:1 UT
tret[0] = 2454503.663212 2008 2 7  3:55:1 UT
tret[1] = 2454503.631145 2008 2 7  3:8:51 UT
tret[2] = 2454503.568627 2008 2 7  1:38:49 UT
tret[3] = 2454503.758221 2008 2 7  6:11:50 UT
tret[4] = 2454503.638833 2008 2 7  3:19:55 UT
tret[5] = 2454503.687824 2008 2 7  4:30:28 UT
tret[6] = 2454503.641705 2008 2 7  3:24:3 UT
tret[7] = 2454503.684978 2008 2 7  4:26:22 UT
swe_sol_eclipse_where(2454503.6632119, SEFLG_SWIEPH)
retflag = 9 1001
geopos[0] = -150.265756
geopos[1] = -67.547263
attr[0] = 0.980885
attr[1] = 0.965768
attr[2] = 0.932707
attr[3] = 123.542311
attr[4] = 88.565979
attr[5] = 16.228758
attr[6] = 16.283962
attr[7] = 0.001081
attr[8] = 0.965768
attr[9] = 121.000000
attr[10] = 60.000000
swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, -153.1, -65, 0, 0)
retflag = 8072 1111110001000
tret[0] = 2454503.666762
tret[1] = 2454503.622761
tret[2] = 2454503.666048
tret[3] = 2454503.667476
tret[4] = 2454503.708686
tret[5] = -67.547263
tret[6] = 0.000000
tret[0] = 2454503.666762 2008 2 7  4:0:8 UT
tret[1] = 2454503.622761 2008 2 7  2:56:46 UT
tret[2] = 2454503.666048 2008 2 7  3:59:6 UT
tret[3] = 2454503.667476 2008 2 7  4:1:10 UT
tret[4] = 2454503.708686 2008 2 7  5:0:30 UT
attr[0] = 0.976954
attr[1] = 0.965959
attr[2] = 0.933078
attr[3] = 123.624143
attr[4] = 89.232618
attr[5] = 16.805076
attr[6] = 16.858404
attr[7] = 0.003258
attr[8] = 0.965959
attr[9] = 121.000000
attr[10] = 60.000000
swe_sol_eclipse_how(2454503.6632119, SEFLG_SWIEPH, -153.1, -65, 0)
retflag = 145 10010001
attr[0] = 0.901653
attr[1] = 0.966069
attr[2] = 0.862672
attr[3] = 123.542311
attr[4] = 90.389784
attr[5] = 17.346140
attr[6] = 17.397817
attr[7] = 0.043996
attr[8] = 0.901653
attr[9] = 121.000000
attr[10] = 60.000000
