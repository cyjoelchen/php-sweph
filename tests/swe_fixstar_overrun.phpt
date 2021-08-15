--TEST--
Test str length.
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

# Long strings will be truncated.
$strOver40 = '12345678901234567890123456789012345678901';

echo "swe_fixstar\n";
var_dump(Format::round(swe_fixstar($strOver40, 2452275.5, SEFLG_SWIEPH)));

echo "swe_fixstar2\n";
var_dump(Format::round(swe_fixstar2($strOver40, 2452275.5, SEFLG_SWIEPH)));

echo "swe_fixstar_ut\n";
var_dump(Format::round(swe_fixstar_ut($strOver40, 2452275.5, SEFLG_SWIEPH | SEFLG_EQUATORIAL)));

echo "swe_fixstar2_ut\n";
var_dump(Format::round(swe_fixstar2_ut($strOver40, 2452275.5, SEFLG_SWIEPH | SEFLG_EQUATORIAL)));

echo "swe_fixstar2_mag\n";
var_dump(Format::round(swe_fixstar2_mag($strOver40)));
?>
--EXPECT--
swe_fixstar
array(9) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(40) "1234567890123456789012345678901234567890"
  ["serr"]=>
  string(55) "star 1234567890123456789012345678901234567890 not found"
  ["rc"]=>
  int(-1)
}
swe_fixstar2
array(9) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(40) "1234567890123456789012345678901234567890"
  ["serr"]=>
  string(87) "error, swe_fixstar(): could not find star name 1234567890123456789012345678901234567890"
  ["rc"]=>
  int(-1)
}
swe_fixstar_ut
array(9) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(40) "1234567890123456789012345678901234567890"
  ["serr"]=>
  string(55) "star 1234567890123456789012345678901234567890 not found"
  ["rc"]=>
  int(-1)
}
swe_fixstar2_ut
array(9) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(40) "1234567890123456789012345678901234567890"
  ["serr"]=>
  string(87) "error, swe_fixstar(): could not find star name 1234567890123456789012345678901234567890"
  ["rc"]=>
  int(-1)
}
swe_fixstar2_mag
array(3) {
  ["star"]=>
  string(40) "1234567890123456789012345678901234567890"
  ["serr"]=>
  string(87) "error, swe_fixstar(): could not find star name 1234567890123456789012345678901234567890"
  ["rc"]=>
  int(-1)
}
