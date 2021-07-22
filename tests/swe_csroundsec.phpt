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
var_dump(swe_csroundsec(145));
var_dump(swe_csroundsec(150));
var_dump(swe_csroundsec(595900));
?>
--EXPECT--
int(100)
int(200)
int(595900)
