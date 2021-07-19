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
var_dump(swe_fixstar_ut('Polaris', 2452275.5, SEFLG_MOSEPH));
?>
--EXPECT--
array(9) {
  [0]=>
  float(88.604980627585)
  [1]=>
  float(66.102793787338)
  [2]=>
  float(27356067.781553)
  [3]=>
  float(2.2268071927819E-5)
  [4]=>
  float(0.00010643443692047)
  [5]=>
  float(-0.008042007494204)
  ["star"]=>
  string(13) "Polaris,alUMi"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(4)
}
