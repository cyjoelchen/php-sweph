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
var_dump(swe_difdeg2n(360.5, 540));
?>
--EXPECT--
float(-179.5)
