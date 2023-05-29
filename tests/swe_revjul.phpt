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
var_dump(Format::round(swe_revjul(2452275.5, 1)));

# Gregorian calendar is the default.
var_dump(Format::round(swe_revjul(2452275.3)));

# Rounding is used to prevent unlikely times such as 59.9999 seconds.
$jdt = swe_julday(2001, 1, 1, 7.00);
var_dump(Format::round(swe_revjul($jdt)));
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
  float(5.0E-5)
}
array(8) {
  ["year"]=>
  int(2001)
  ["month"]=>
  int(12)
  ["day"]=>
  int(31)
  ["hour"]=>
  float(19.199999)
  ["ihour"]=>
  int(19)
  ["imin"]=>
  int(12)
  ["isec"]=>
  int(0)
  ["dsec"]=>
  float(3.3E-5)
}
array(8) {
  ["year"]=>
  int(2001)
  ["month"]=>
  int(1)
  ["day"]=>
  int(1)
  ["hour"]=>
  float(6.999999)
  ["ihour"]=>
  int(7)
  ["imin"]=>
  int(0)
  ["isec"]=>
  int(0)
  ["dsec"]=>
  float(3.6E-5)
}
