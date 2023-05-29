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
var_dump(Format::round(swe_vis_limit_mag(2452275.5, 121.34, 43.57, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Venus', SEFLG_SWIEPH | SE_HELFLAG_OPTICAL_PARAMS)));
?>
--EXPECT--
array(9) {
  ["rc"]=>
  int(0)
  [0]=>
  float(-8.216269)
  [1]=>
  float(5.416663)
  [2]=>
  float(130.262291)
  [3]=>
  float(3.943499)
  [4]=>
  float(127.365385)
  [5]=>
  float(9.190664)
  [6]=>
  float(291.859517)
  [7]=>
  float(-3.912729)
}
