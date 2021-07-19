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
var_dump(swe_get_ayanamsa_ex_ut(2452275.499255786, SEFLG_MOSEPH));
?>
--EXPECT--
array(2) {
  ["daya"]=>
  float(24.763655434161)
  ["rc"]=>
  int(68)
}
