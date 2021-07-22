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
var_dump(swe_csnorm(360 * 360000));
var_dump(swe_csnorm(540 * 360000));
var_dump(swe_csnorm(-720 * 360000));
?>
--EXPECT--
int(0)
int(64800000)
int(0)
