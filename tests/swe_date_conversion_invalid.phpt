--TEST--
Test return NULL.
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php
var_dump(swe_date_conversion(2002, 13, 1, 0, 'g'));
?>
--EXPECT--
NULL
