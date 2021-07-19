--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded(‘swephp’)) {
echo ‘skip’;
}
?>
--FILE--
<?php
var_dump(swe_version());
?>
--EXPECT--
string(8) "2.10.01a"
