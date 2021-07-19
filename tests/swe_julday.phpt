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
var_dump(swe_julday(2002, 1, 1, 0, 1));
?>
--EXPECT--
float(2452275.5)
