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
include 'utility/Format.php';
var_dump(Format::round(swe_utc_to_jd(2000, 1, 1, 0, 0, 0, 1)));
?>
--EXPECT--
array(3) {
  ["rc"]=>
  int(0)
  [0]=>
  float(2451544.500742)
  [1]=>
  float(2451544.500004)
}
