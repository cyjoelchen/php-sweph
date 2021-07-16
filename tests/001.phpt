--TEST--
swe_version() Basic test
--SKIPIF--
<?php
if (!extension_loaded(‘sweph’)) {
echo ‘skip’;
}
?>
--FILE--
<?php
var_dump(swe_version());
?>
--EXPECT--
string(8) "2.10.01a"
