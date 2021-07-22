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
var_dump(swe_d2l(90.4));
var_dump(swe_d2l(90.5));
?>
--EXPECT--
int(90)
int(91)
