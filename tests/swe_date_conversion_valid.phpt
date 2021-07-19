--TEST--
Test return float/double.
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php
var_dump(swe_date_conversion(2002, 1, 1, 0, 'g'));
?>
--EXPECT--
float(2452275.5)
