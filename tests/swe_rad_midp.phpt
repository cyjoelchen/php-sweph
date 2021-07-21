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
var_dump(swe_rad_midp(0, 3.14159));
var_dump(swe_rad_midp(3.14159, 0));
?>
--EXPECT--
float(1.570795)
float(1.570795)
