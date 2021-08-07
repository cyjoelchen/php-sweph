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
swe_set_ephe_path('./sweph/ephe');
var_dump(swe_mooncross_node(2455334.0, SEFLG_SWIEPH));
var_dump(swe_mooncross_node_ut(2455334.0, SEFLG_SWIEPH));
?>
--EXPECT--
array(5) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2455334.1525965)
  ["xlon"]=>
  float(102.73339203829)
  ["xlat"]=>
  float(1.9682940639408E-10)
}
array(5) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2455334.1518307)
  ["xlon"]=>
  float(102.73339203829)
  ["xlat"]=>
  float(1.9682940639408E-10)
}
