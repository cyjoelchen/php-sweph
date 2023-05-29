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
var_dump(Format::round(swe_jdet_to_utc(2452275.5, 1)));
?>
--EXPECT--
array(6) {
  ["year"]=>
  int(2001)
  ["month"]=>
  int(12)
  ["day"]=>
  int(31)
  ["hour"]=>
  int(23)
  ["min"]=>
  int(58)
  ["sec"]=>
  float(55.815998)
}
