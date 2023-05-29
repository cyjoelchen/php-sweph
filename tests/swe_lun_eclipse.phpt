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

echo "swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0)\n";
$rv = swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
$d = Format::asUtc($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
var_dump(Format::round($rv['tret']));
$geo = array(12.1, 49.0, 330);

echo "swe_lun_eclipse_when_loc($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0)\n";
$rv = swe_lun_eclipse_when_loc($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
$d = Format::asUtc($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
var_dump(Format::round($geo));
var_dump(Format::round($rv['tret']));
var_dump(Format::round($rv['attr']));

echo "swe_lun_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2])\n";
$rv = swe_lun_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2]);
printf("%f %s\n",  $tjd_ut,  $d);
var_dump(Format::round($geo));
var_dump(Format::round($rv['attr']));
?>
--EXPECT--
swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0)
retflag = 4 100
2454517.643069 2008 2 21  3:26:1 UT
array(8) {
  [0]=>
  float(2454517.643069)
  [1]=>
  float(0)
  [2]=>
  float(2454517.571723)
  [3]=>
  float(2454517.714418)
  [4]=>
  float(2454517.625803)
  [5]=>
  float(2454517.66035)
  [6]=>
  float(2454517.525389)
  [7]=>
  float(2454517.760855)
}
swe_lun_eclipse_when_loc(2454517.643069, SEFLG_SWIEPH, 12.1, 49, 330, 0)
retflag = 29584 111001110010000
2454695.382052 2008 8 16  21:10:9 UT
array(3) {
  [0]=>
  float(12.1)
  [1]=>
  float(49)
  [2]=>
  int(330)
}
array(10) {
  [0]=>
  float(2454695.382051)
  [1]=>
  float(0)
  [2]=>
  float(2454695.31671)
  [3]=>
  float(2454695.44739)
  [4]=>
  float(0)
  [5]=>
  float(0)
  [6]=>
  float(2454695.267205)
  [7]=>
  float(2454695.496797)
  [8]=>
  float(0)
  [9]=>
  float(0)
}
array(11) {
  [0]=>
  float(0.807612)
  [1]=>
  float(1.836649)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(326.988586)
  [5]=>
  float(21.36259)
  [6]=>
  float(21.402251)
  [7]=>
  float(0.53016)
  [8]=>
  float(0.807612)
  [9]=>
  float(138)
  [10]=>
  float(28)
}
swe_lun_eclipse_how(2454695.3820517, SEFLG_SWIEPH, 12.1, 49, 330)
2454695.382052 2008 8 16  21:10:9 UT
array(3) {
  [0]=>
  float(12.1)
  [1]=>
  float(49)
  [2]=>
  int(330)
}
array(11) {
  [0]=>
  float(0.807612)
  [1]=>
  float(1.836649)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(326.988586)
  [5]=>
  float(21.36259)
  [6]=>
  float(21.402251)
  [7]=>
  float(0.53016)
  [8]=>
  float(0.807612)
  [9]=>
  float(138)
  [10]=>
  float(28)
}
