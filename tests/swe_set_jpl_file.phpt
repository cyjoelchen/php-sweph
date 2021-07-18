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
var_dump(swe_set_jpl_file('example-file.eph'));
?>
--EXPECT--
NULL
