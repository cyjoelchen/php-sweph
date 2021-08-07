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
var_dump(swe_solcross(30, 2455334.0, SEFLG_SWIEPH));
var_dump(swe_solcross_ut(30, 2455334.0, SEFLG_SWIEPH));
?>
--EXPECT--
