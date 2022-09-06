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
var_dump(Format::round(swe_helio_cross(SE_SATURN, 30, 2455334.0, SEFLG_SWIEPH, 1)));
var_dump(Format::round(swe_helio_cross_ut(SE_SATURN, 30, 2455334.0, SEFLG_SWIEPH, 1)));
?>
--EXPECT--
array(3) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2461855.380331)
}
array(3) {
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
  ["jx"]=>
  float(2461855.379534)
}
