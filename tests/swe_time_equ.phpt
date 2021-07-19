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
$delta = swe_time_equ(2452275.5);
$delta['te'] = round($delta['te'], 6);
var_dump($delta);
?>
--EXPECT--
array(3) {
  ["rc"]=>
  int(0)
  ["te"]=>
  float(-0.002285)
  ["serr"]=>
  string(0) ""
}
