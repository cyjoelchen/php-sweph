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
var_dump(swe_house_name('P'));
?>
--EXPECT--
string(8) "Placidus"
