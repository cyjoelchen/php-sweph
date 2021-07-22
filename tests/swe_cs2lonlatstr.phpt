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
# Moon @ 274º 47' 17".
var_dump(swe_cs2lonlatstr(98923700, ' ', '.'));
var_dump(swe_cs2lonlatstr(-98923700, ' ', '.'));
?>
--EXPECT--
string(9) "274 47'17"
string(9) "274.47'17"
