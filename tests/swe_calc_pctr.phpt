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
var_dump(Format::round(swe_calc_pctr(2452275.5, 1, 2, SEFLG_SWIEPH|SEFLG_SPEED)));
?>
--EXPECT--
array(8) {
  [0]=>
  float(115.594557)
  [1]=>
  float(2.05413)
  [2]=>
  float(1.232681)
  [3]=>
  float(1.572858)
  [4]=>
  float(-0.050397)
  [5]=>
  float(-0.018083)
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
