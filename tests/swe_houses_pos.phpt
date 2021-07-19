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
var_dump(swe_house_pos(0, 0, 0, 'P', 0, 0));
?>
--EXPECT--
float(10.000000009259)
