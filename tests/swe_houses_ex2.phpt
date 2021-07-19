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
var_dump(swe_houses_ex2(2452275.499255786, 0, 43.23, 12.77, 'P'));
?>
--EXPECT--
array(6) {
  ["cusps"]=>
  array(13) {
    [0]=>
    float(0)
    [1]=>
    float(197.75893895861)
    [2]=>
    float(224.81302787268)
    [3]=>
    float(256.40765913011)
    [4]=>
    float(291.25313867245)
    [5]=>
    float(324.9380050471)
    [6]=>
    float(353.97936025175)
    [7]=>
    float(17.758938958612)
    [8]=>
    float(44.813027872675)
    [9]=>
    float(76.407659130113)
    [10]=>
    float(111.25313867245)
    [11]=>
    float(144.9380050471)
    [12]=>
    float(173.97936025175)
  }
  ["ascmc"]=>
  array(10) {
    [0]=>
    float(197.75893895861)
    [1]=>
    float(111.25313867245)
    [2]=>
    float(112.97316806333)
    [3]=>
    float(42.793948398018)
    [4]=>
    float(204.79923835131)
    [5]=>
    float(219.65981076068)
    [6]=>
    float(197.11057619699)
    [7]=>
    float(39.659810760679)
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
    float(278.16563239266)
    [2]=>
    float(300.65922861468)
    [3]=>
    float(323.0701701989)
    [4]=>
    float(339.37847047214)
    [5]=>
    float(334.33238124602)
    [6]=>
    float(309.12605791609)
    [7]=>
    float(278.16563239266)
    [8]=>
    float(300.65922861468)
    [9]=>
    float(323.0701701989)
    [10]=>
    float(339.37847047214)
    [11]=>
    float(334.33238124602)
    [12]=>
    float(309.12605791609)
  }
  ["ascmc_speed"]=>
  array(10) {
    [0]=>
    float(278.16563239266)
    [1]=>
    float(339.37847047214)
    [2]=>
    float(360.98564733499)
    [3]=>
    float(577.36670345538)
    [4]=>
    float(382.49956811151)
    [5]=>
    float(553.30154567637)
    [6]=>
    float(268.11719901785)
    [7]=>
    float(553.30154567637)
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
