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
var_dump(swe_revjul(2452275.5, 1));
var_dump(swe_revjul(2452275.3, 1));
?>
--EXPECT--
array(8) {
  ["year"]=>
  int(2002)
  ["month"]=>
  int(1)
  ["day"]=>
  int(1)
  ["hour"]=>
  float(0)
  ["ihour"]=>
  int(0)
  ["imin"]=>
  int(0)
  ["isec"]=>
  int(0)
  ["dsec"]=>
  float(0)
}
array(8) {
  ["year"]=>
  int(2001)
  ["month"]=>
  int(12)
  ["day"]=>
  int(31)
  ["hour"]=>
  float(19.19999999552965)
  ["ihour"]=>
  int(19)
  ["imin"]=>
  int(11)
  ["isec"]=>
  int(59)
  ["dsec"]=>
  float(59.99998390674591)
}
