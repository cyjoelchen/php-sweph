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
var_dump(swe_get_ayanamsa_ut(2452275.499255786));
?>
--EXPECT--
float(24.768237848066)
