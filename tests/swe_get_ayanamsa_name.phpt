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
var_dump(swe_get_ayanamsa_name(SE_SIDM_FAGAN_BRADLEY));
?>
--EXPECT--
string(13) "Fagan/Bradley"
