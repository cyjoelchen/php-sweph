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
var_dump(Format::round(swe_calc_ut(2452275.499255786, 0, SEFLG_SWIEPH|SEFLG_SPEED)));
?>
--EXPECT--
array(8) {
  [0]=>
  float(280.382968)
  [1]=>
  float(0.000149)
  [2]=>
  float(0.983297)
  [3]=>
  float(1.018877)
  [4]=>
  float(1.7E-5)
  [5]=>
  float(-1.0E-5)
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
