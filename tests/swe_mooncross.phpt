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
var_dump(Format::round(swe_mooncross(30, 2455334.0, SEFLG_SWIEPH)));
var_dump(Format::round(swe_mooncross_ut(30, 2455334.0, SEFLG_SWIEPH)));
?>
--EXPECT--
array(3) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2455356.154088)
}
array(3) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2455356.153322)
}
