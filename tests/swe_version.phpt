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
var_dump(swe_version());
?>
--EXPECT--
string(7) "2.10.03"
