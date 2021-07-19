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
swe_set_ephe_path(null);
var_dump(strrev(substr(strrev(swe_get_library_path()), 0, 18)));
?>
--EXPECT--
string(18) "/modules/swephp.so"
