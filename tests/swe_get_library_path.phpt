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
var_dump(strrev(substr(strrev(swe_get_library_path()), 0, 17)));
?>
--EXPECT--
string(17) "/modules/sweph.so"
