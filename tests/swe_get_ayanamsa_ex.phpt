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
var_dump(Format::round(swe_get_ayanamsa_ex(2452275.5, SEFLG_SWIEPH|SEFLG_SPEED)));
?>
--EXPECT--
array(2) {
  ["daya"]=>
  float(24.763655)
  ["rc"]=>
  int(66)
}
