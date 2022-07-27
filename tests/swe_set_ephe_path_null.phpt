--TEST--
Null test
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php
var_dump(swe_set_ephe_path(null));
?>
--EXPECT--
NULL
