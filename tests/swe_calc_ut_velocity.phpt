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
var_dump(swe_calc_ut(2459733.8335248, 2, SEFLG_SWIEPH|SEFLG_SPEED));
?>
--EXPECT--
array(8) {
  [0]=>
  float(56.08729107768657)
  [1]=>
  float(-3.8167077700756082)
  [2]=>
  float(0.6177984452608606)
  [3]=>
  float(-0.0000593)
  [4]=>
  float(-0.09150879849284663)
  [5]=>
  float(0.011204895360037971)
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
