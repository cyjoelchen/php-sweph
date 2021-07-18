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
var_dump(swe_get_planet_name(8));
?>
--EXPECT--
string(7) "Neptune"
