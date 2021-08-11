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
var_dump(round(swe_house_pos(0, 0, 0, 'P', 0, 0), 6));
?>
--EXPECT--
float(10)
