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
swe_set_ephe_path('./sweph/ephe');
var_dump(Format::round(swe_cotrans(121.34, 43.57, 1.0, 23.4)));
?>
--EXPECT--
array(3) {
  [0]=>
  float(114.119848)
  [1]=>
  float(22.754921)
  [2]=>
  float(1)
}
