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
var_dump(swe_houses_armc(0, 0, 23.4, 'P'));
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
    float(117.91759008551)
    [3]=>
    float(147.82641197635)
    [4]=>
    float(180)
    [5]=>
    float(212.17358802365)
    [6]=>
    float(242.08240991449)
    [7]=>
    float(270)
    [8]=>
    float(297.91759008551)
    [9]=>
    float(327.82641197635)
    [10]=>
    float(0)
    [11]=>
    float(32.173588023652)
    [12]=>
    float(62.082409914485)
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
