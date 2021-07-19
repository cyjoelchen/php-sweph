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
var_dump(swe_revjul(2452275.5, 1));
?>
--EXPECT--
array(4) {
  ["year"]=>
  int(2002)
  ["month"]=>
  int(1)
  ["day"]=>
  int(1)
  ["hour"]=>
  float(0)
}
