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
var_dump(swe_cs2timestr(8496000, 58, 0));
var_dump(swe_cs2timestr(8496000, 58, 1));
?>
--EXPECT--
string(8) "23:36:00"
string(5) "23:36"
