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
var_dump(Format::round(swe_houses_armc(0, 0, 23.4, 'P')));
?>
--EXPECT--
array(3) {
  ["cusps"]=>
  array(13) {
    [0]=>
    float(0)
    [1]=>
    float(90)
    [2]=>
    float(117.91759)
    [3]=>
    float(147.826411)
    [4]=>
    float(180)
    [5]=>
    float(212.173588)
    [6]=>
    float(242.082409)
    [7]=>
    float(270)
    [8]=>
    float(297.91759)
    [9]=>
    float(327.826411)
    [10]=>
    float(0)
    [11]=>
    float(32.173588)
    [12]=>
    float(62.082409)
  }
  ["ascmc"]=>
  array(10) {
    [0]=>
    float(90)
    [1]=>
    float(0)
    [2]=>
    float(0)
    [3]=>
    float(180)
    [4]=>
    float(90)
    [5]=>
    float(90)
    [6]=>
    float(180)
    [7]=>
    float(270)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
  ["rc"]=>
  int(0)
}
