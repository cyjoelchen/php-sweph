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
var_dump(Format::round(swe_houses(2452275.499255786, 0, 0, 'P')));
?>
--EXPECT--
array(3) {
  ["cusps"]=>
  array(13) {
    [0]=>
    float(0)
    [1]=>
    float(191.098936)
    [2]=>
    float(222.650399)
    [3]=>
    float(251.723822)
    [4]=>
    float(279.376846)
    [5]=>
    float(307.790747)
    [6]=>
    float(338.578256)
    [7]=>
    float(11.098936)
    [8]=>
    float(42.650399)
    [9]=>
    float(71.723822)
    [10]=>
    float(99.376846)
    [11]=>
    float(127.790747)
    [12]=>
    float(158.578256)
  }
  ["ascmc"]=>
  array(10) {
    [0]=>
    float(191.098936)
    [1]=>
    float(99.376846)
    [2]=>
    float(100.203168)
    [3]=>
    float(0)
    [4]=>
    float(191.098936)
    [5]=>
    float(191.098936)
    [6]=>
    float(180)
    [7]=>
    float(11.098936)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
  ["rc"]=>
  int(0)
}
