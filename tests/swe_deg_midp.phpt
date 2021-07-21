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
var_dump(swe_deg_midp(0, 180));
var_dump(swe_deg_midp(180, 0));
?>
--EXPECT--
float(90)
float(270)
