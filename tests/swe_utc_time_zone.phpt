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
var_dump(swe_utc_time_zone(2000, 1, 1, 0, 0, 0, 7));
?>
--EXPECT--
array(6) {
  ["year"]=>
  int(1999)
  ["month"]=>
  int(12)
  ["day"]=>
  int(31)
  ["hour"]=>
  int(17)
  ["min"]=>
  int(0)
  ["sec"]=>
  float(0)
}
