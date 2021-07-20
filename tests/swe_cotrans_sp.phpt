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
swe_set_ephe_path('./sweph/ephe');
$converted = swe_cotrans_sp(121.34, 43.57, 1.0, 1.1, 5.5, 1.0, 23.4);

$converted = array_map(function ($value) {
    return round($value, 6);
}, $converted);

var_dump($converted);
?>
--EXPECT--
array(6) {
  [0]=>
  float(114.119848)
  [1]=>
  float(22.754921)
  [2]=>
  float(1)
  [3]=>
  float(-0.493672)
  [4]=>
  float(5.538767)
  [5]=>
  float(1)
}
