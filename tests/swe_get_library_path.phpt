--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('sweph')) {
    echo 'skip';
}
?>
--FILE--
<?php
swe_set_ephe_path(null);
var_dump(swe_get_library_path());
?>
--EXPECT--
string(32) "/root/php-sweph/modules/sweph.so"
