--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('sweph')) {
    echo 'skip';
}
?>
--FILE--
<?php
var_dump(swe_utc_to_jd(2000, 1, 1, 0, 0, 0, 1));
?>
--EXPECT--
array(3) {
  ["rc"]=>
  int(0)
  [0]=>
  float(2451544.5007429)
  [1]=>
  float(2451544.5000041)
}
