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
var_dump(Format::round(swe_mooncross_node(2455334.0, SEFLG_SWIEPH)));
var_dump(Format::round(swe_mooncross_node_ut(2455334.0, SEFLG_SWIEPH)));
?>
--EXPECT--
array(5) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2455334.152596)
  ["xlon"]=>
  float(102.733392)
  ["xlat"]=>
  float(0)
}
array(5) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2455334.15183)
  ["xlon"]=>
  float(102.733392)
  ["xlat"]=>
  float(0)
}
