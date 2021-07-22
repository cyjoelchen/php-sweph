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
var_dump(swe_cs2degstr(98923700));
?>
--EXPECT--
string(9) " 4°47'17"
