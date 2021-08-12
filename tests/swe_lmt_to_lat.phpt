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
var_dump(Format::round(swe_lmt_to_lat(2452275.5, 121.34)));
?>
--EXPECT--
array(3) {
  ["rc"]=>
  int(0)
  ["tjd_lat"]=>
  float(2452275.497825)
  ["serr"]=>
  string(0) ""
}
