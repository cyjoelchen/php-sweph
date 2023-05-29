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
$d = Format::asUtc($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
var_dump(Format::jdtWithUtc(array_slice($rv['tret'], 0, 8)));

echo "swe_sol_eclipse_where($tjd_ut, SEFLG_SWIEPH)\n";
$rv = swe_sol_eclipse_where($tjd_ut, SEFLG_SWIEPH);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
var_dump(Format::round($rv['geopos']));
var_dump(Format::round(array_slice($rv['attr'], 0, 11)));
$geo = array(-153.1, -65.0, 0);

echo "swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0)\n";
$rv = swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
var_dump(Format::round($rv['tret']));
var_dump(Format::jdtWithUtc(array_slice($rv['tret'], 0, 5)));
var_dump(Format::round(array_slice($rv['attr'], 0, 11)));

echo "swe_sol_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2])\n";
$rv = swe_sol_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2]);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
var_dump(Format::round(array_slice($rv['attr'], 0, 11)));

?>
--EXPECT--
swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0)
retflag = 9 1001
2454503.663212 2008 2 7  3:55:1 UT
array(8) {
  [0]=>
  string(34) "2454503.663211 2008 2 7  3:55:1 UT"
  [1]=>
  string(34) "2454503.631145 2008 2 7  3:8:51 UT"
  [2]=>
  string(35) "2454503.568626 2008 2 7  1:38:49 UT"
  [3]=>
  string(35) "2454503.758220 2008 2 7  6:11:50 UT"
  [4]=>
  string(35) "2454503.638833 2008 2 7  3:19:55 UT"
  [5]=>
  string(35) "2454503.687823 2008 2 7  4:30:28 UT"
  [6]=>
  string(34) "2454503.641705 2008 2 7  3:24:3 UT"
  [7]=>
  string(35) "2454503.684977 2008 2 7  4:26:22 UT"
}
swe_sol_eclipse_where(2454503.6632119, SEFLG_SWIEPH)
retflag = 9 1001
array(2) {
  [0]=>
  float(-150.265756)
  [1]=>
  float(-67.547263)
}
array(11) {
  [0]=>
  float(0.980884)
  [1]=>
  float(0.965767)
  [2]=>
  float(0.932707)
  [3]=>
  float(123.542311)
  [4]=>
  float(88.565979)
  [5]=>
  float(16.228758)
  [6]=>
  float(16.283962)
  [7]=>
  float(0.00108)
  [8]=>
  float(0.965767)
  [9]=>
  float(121)
  [10]=>
  float(60)
}
swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, -153.1, -65, 0, 0)
retflag = 8072 1111110001000
array(7) {
  [0]=>
  float(2454503.666761)
  [1]=>
  float(2454503.62276)
  [2]=>
  float(2454503.666048)
  [3]=>
  float(2454503.667475)
  [4]=>
  float(2454503.708686)
  [5]=>
  float(0)
  [6]=>
  float(0)
}
array(5) {
  [0]=>
  string(33) "2454503.666761 2008 2 7  4:0:8 UT"
  [1]=>
  string(35) "2454503.622760 2008 2 7  2:56:46 UT"
  [2]=>
  string(34) "2454503.666048 2008 2 7  3:59:6 UT"
  [3]=>
  string(34) "2454503.667475 2008 2 7  4:1:10 UT"
  [4]=>
  string(34) "2454503.708686 2008 2 7  5:0:30 UT"
}
array(11) {
  [0]=>
  float(0.976953)
  [1]=>
  float(0.965959)
  [2]=>
  float(0.933077)
  [3]=>
  float(123.624142)
  [4]=>
  float(89.232618)
  [5]=>
  float(16.805075)
  [6]=>
  float(16.858403)
  [7]=>
  float(0.003257)
  [8]=>
  float(0.965959)
  [9]=>
  float(121)
  [10]=>
  float(60)
}
swe_sol_eclipse_how(2454503.6632119, SEFLG_SWIEPH, -153.1, -65, 0)
retflag = 145 10010001
array(11) {
  [0]=>
  float(0.901653)
  [1]=>
  float(0.966069)
  [2]=>
  float(0.862672)
  [3]=>
  float(123.542311)
  [4]=>
  float(90.389783)
  [5]=>
  float(17.34614)
  [6]=>
  float(17.397816)
  [7]=>
  float(0.043995)
  [8]=>
  float(0.901653)
  [9]=>
  float(121)
  [10]=>
  float(60)
}
