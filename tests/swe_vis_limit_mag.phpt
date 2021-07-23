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
  float(5.416664)
  [2]=>
  float(130.262292)
  [3]=>
  float(3.9435)
  [4]=>
  float(127.365385)
  [5]=>
  float(9.190665)
  [6]=>
  float(291.859517)
  [7]=>
  float(-3.912729)
}
