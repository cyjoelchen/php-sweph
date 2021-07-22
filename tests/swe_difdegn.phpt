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
var_dump(swe_difdegn(360.5, 540));
?>
--EXPECT--
float(180.5)
