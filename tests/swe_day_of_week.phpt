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
var_dump(swe_day_of_week(2452275.5));
?>
--EXPECT--
int(1)
