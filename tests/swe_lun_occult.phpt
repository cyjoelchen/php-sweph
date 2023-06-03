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
var_dump(Format::round($rv, 3));

$tjd_ut = $rv['tret'][0];
var_dump(Format::round([$tjd_ut], 3), Format::asUtc($tjd_ut));

echo "swe_lun_occult_where for Venus\n";
var_dump(Format::round(swe_lun_occult_where($tjd_ut, SE_VENUS, "", SEFLG_SWIEPH), 3));

echo "swe_lun_occult_when_loc for Venus\n";
$rv = swe_lun_occult_when_loc(2454466.5, SE_VENUS, "", SEFLG_SWIEPH, 12.1, 49.0, 330, 0);
var_dump(Format::round($rv, 3));
?>
--EXPECT--
swe_lun_occult_when_glob for Venus
array(2) {
  ["retflag"]=>
  int(5)
  ["tret"]=>
  array(10) {
    [0]=>
    float(2454531.296)
    [1]=>
    float(2454531.305)
    [2]=>
    float(2454531.198)
    [3]=>
    float(2454531.395)
    [4]=>
    float(2454531.198)
    [5]=>
    float(2454531.394)
    [6]=>
    float(2454531.22)
    [7]=>
    float(2454531.373)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
array(1) {
  [0]=>
  float(2454531.296)
}
string(20) "2008 3 5  19:7:36 UT"
swe_lun_occult_where for Venus
array(3) {
  ["retflag"]=>
  int(5)
  ["geopos"]=>
  array(2) {
    [0]=>
    float(-132.448)
    [1]=>
    float(-3.223)
  }
  ["attr"]=>
  array(8) {
    [0]=>
    float(86.757)
    [1]=>
    float(172.526)
    [2]=>
    float(29765.456)
    [3]=>
    float(-3461.913)
    [4]=>
    float(336.207)
    [5]=>
    float(76.844)
    [6]=>
    float(76.848)
    [7]=>
    float(0)
  }
}
swe_lun_occult_when_loc for Venus
array(3) {
  ["retflag"]=>
  int(8070)
  ["tret"]=>
  array(8) {
    [0]=>
    float(2454802.2)
    [1]=>
    float(2454802.173)
    [2]=>
    float(2454802.173)
    [3]=>
    float(2454802.226)
    [4]=>
    float(2454802.226)
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
    float(30.827)
    [1]=>
    float(106.805)
    [2]=>
    float(11407.445)
    [3]=>
    float(-3452.982)
    [4]=>
    float(36.788)
    [5]=>
    float(8.705)
    [6]=>
    float(8.801)
    [7]=>
    float(0.106)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
