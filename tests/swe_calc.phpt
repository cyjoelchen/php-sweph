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
swe_set_ephe_path(null);
var_dump(swe_calc(2452275.5, 0, SEFLG_MOSEPH));
?>
--EXPECT--
array(8) {
  [0]=>
  float(280.38297419443)
  [1]=>
  float(0.00014237841132295)
  [2]=>
  float(0.98329774008341)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(4)
}
