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
var_dump(round(swe_difrad2n(6.283185, 9.424777), 6));
?>
--EXPECT--
float(-3.141592)
