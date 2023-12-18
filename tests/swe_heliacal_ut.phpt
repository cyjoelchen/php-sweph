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
var_dump(Format::round(swe_heliacal_ut(2452275.5, 121.34, 43.57, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Venus', SE_HELIACAL_RISING, SEFLG_SWIEPH)));
?>
--EXPECT--
array(4) {
  ["rc"]=>
  int(0)
  [0]=>
  float(2452586.417484)
  [1]=>
  float(2452586.424)
  [2]=>
  float(2452586.43135)
}
