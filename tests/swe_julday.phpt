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
var_dump(swe_julday(2002, 1, 1, 0, 1));
var_dump(swe_julday(2002, 1, 1, 0));
?>
--EXPECT--
float(2452275.5)
float(2452275.5)
