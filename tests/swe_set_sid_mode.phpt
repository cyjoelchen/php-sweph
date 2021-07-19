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
var_dump(swe_set_sid_mode(SE_SIDM_FAGAN_BRADLEY, 0, 0));
?>
--EXPECT--
NULL
