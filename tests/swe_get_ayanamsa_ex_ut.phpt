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
var_dump(Format::round(swe_get_ayanamsa_ex_ut(2452275.499255786, SEFLG_SWIEPH)));
var_dump(Format::round(swe_get_ayanamsa_ex_ut(2452275.499255786, SEFLG_SWIEPH|SEFLG_NONUT)));
?>
--EXPECT--
array(2) {
  ["daya"]=>
  float(24.763655)
  ["rc"]=>
  int(2)
}
array(2) {
  ["daya"]=>
  float(24.768237)
  ["rc"]=>
  int(66)
}
