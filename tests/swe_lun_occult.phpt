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

echo "swe_lun_occult_when_glob for Venus\n";
$rv = swe_lun_occult_when_glob(2454466.5, SE_VENUS, "", SEFLG_SWIEPH, 0, 0);
var_dump(Format::round($rv));

$tjd_ut = $rv['tret'][0];
var_dump(round($tjd_ut, 6), Format::asUtc($tjd_ut));

echo "swe_lun_occult_where for Venus\n";
var_dump(Format::round(swe_lun_occult_where($tjd_ut, SE_VENUS, "", SEFLG_SWIEPH)));

echo "swe_lun_occult_when_loc for Venus\n";
$rv = swe_lun_occult_when_loc(2454466.5, SE_VENUS, "", SEFLG_SWIEPH, 12.1, 49.0, 330, 0);
var_dump(Format::round($rv));
?>
--EXPECT--
swe_lun_occult_when_glob for Venus
array(2) {
  ["retflag"]=>
  int(5)
  ["tret"]=>
  array(10) {
    [0]=>
    float(2454531.296945)
    [1]=>
    float(2454531.305141)
    [2]=>
    float(2454531.198629)
    [3]=>
    float(2454531.395079)
    [4]=>
    float(2454531.198886)
    [5]=>
    float(2454531.394824)
    [6]=>
    float(2454531.220605)
    [7]=>
    float(2454531.373121)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
float(2454531.296945)
string(20) "2008 3 5  19:7:36 UT"
swe_lun_occult_where for Venus
array(3) {
  ["retflag"]=>
  int(5)
  ["geopos"]=>
  array(2) {
    [0]=>
    float(-132.448084)
    [1]=>
    float(-3.22394)
  }
  ["attr"]=>
  array(8) {
    [0]=>
    float(86.757454)
    [1]=>
    float(172.526685)
    [2]=>
    float(29765.456995)
    [3]=>
    float(-3461.913794)
    [4]=>
    float(336.207119)
    [5]=>
    float(76.844796)
    [6]=>
    float(76.848587)
    [7]=>
    float(1.8E-5)
  }
}
swe_lun_occult_when_loc for Venus
array(3) {
  ["retflag"]=>
  int(8070)
  ["tret"]=>
  array(8) {
    [0]=>
    float(2454802.200597)
    [1]=>
    float(2454802.173096)
    [2]=>
    float(2454802.173765)
    [3]=>
    float(2454802.226111)
    [4]=>
    float(2454802.226715)
    [5]=>
    float(0)
    [6]=>
    float(0)
    [7]=>
    float(0)
  }
  ["attr"]=>
  array(10) {
    [0]=>
    float(30.82789)
    [1]=>
    float(106.805641)
    [2]=>
    float(11407.445012)
    [3]=>
    float(-3452.982325)
    [4]=>
    float(36.788615)
    [5]=>
    float(8.705571)
    [6]=>
    float(8.801795)
    [7]=>
    float(0.106552)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
