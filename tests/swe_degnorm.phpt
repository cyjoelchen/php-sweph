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
var_dump(swe_degnorm(0));
var_dump(swe_degnorm(360));
var_dump(swe_degnorm(-1));
?>
--EXPECT--
float(0)
float(0)
float(359)
