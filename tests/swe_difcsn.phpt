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
var_dump(swe_difcsn(360 * 360000, 540 * 360000));
?>
--EXPECT--
int(64800000)
