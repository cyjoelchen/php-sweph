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
var_dump(swe_lat_to_lmt(2452275.4978254, 121.34));
?>
--EXPECT--
array(3) {
  ["rc"]=>
  int(0)
  ["tjd_lmt"]=>
  float(2452275.4956515)
  ["serr"]=>
  string(0) ""
}
