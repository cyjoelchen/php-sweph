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
var_dump(Format::round(swe_houses_armc_ex2(121.34, 43.57, 23.4, 'P')));
?>
--EXPECT--
array(6) {
  ["cusps"]=>
  array(13) {
    [0]=>
    float(0)
    [1]=>
    float(204.119848)
    [2]=>
    float(231.643448)
    [3]=>
    float(263.842862)
    [4]=>
    float(299.200017)
    [5]=>
    float(332.765247)
    [6]=>
    float(1.145655)
    [7]=>
    float(24.119848)
    [8]=>
    float(51.643448)
    [9]=>
    float(83.842862)
    [10]=>
    float(119.200017)
    [11]=>
    float(152.765247)
    [12]=>
    float(181.145655)
  }
  ["ascmc"]=>
  array(10) {
    [0]=>
    float(204.119848)
    [1]=>
    float(119.200017)
    [2]=>
    float(121.34)
    [3]=>
    float(54.839335)
    [4]=>
    float(213.565832)
    [5]=>
    float(232.021265)
    [6]=>
    float(203.41011)
    [7]=>
    float(52.021265)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
  ["cusp_speed"]=>
  array(13) {
    [0]=>
    float(0)
    [1]=>
    float(276.413953)
    [2]=>
    float(299.730979)
    [3]=>
    float(326.584645)
    [4]=>
    float(346.062087)
    [5]=>
    float(338.122375)
    [6]=>
    float(308.624737)
    [7]=>
    float(276.413953)
    [8]=>
    float(299.730979)
    [9]=>
    float(326.584645)
    [10]=>
    float(346.062087)
    [11]=>
    float(338.122375)
    [12]=>
    float(308.624737)
  }
  ["ascmc_speed"]=>
  array(10) {
    [0]=>
    float(276.413953)
    [1]=>
    float(346.062087)
    [2]=>
    float(360.985647)
    [3]=>
    float(500.510971)
    [4]=>
    float(374.37069)
    [5]=>
    float(493.376119)
    [6]=>
    float(268.429022)
    [7]=>
    float(493.376119)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
  ["rc"]=>
  int(0)
  ["serr"]=>
  string(0) ""
}
