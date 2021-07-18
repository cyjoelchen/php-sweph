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
swe_set_ephe_path(null);
var_dump(swe_fixstar('Polaris', 2452275.5, SEFLG_MOSEPH));
?>
--EXPECT--
PolarisPolaris,alUMi  4
array(9) {
  [0]=>
  float(88.604980607516)
  [1]=>
  float(66.102793719983)
  [2]=>
  float(27356067.781559)
  [3]=>
  float(2.9371297543913E-5)
  [4]=>
  float(0.00010682482363487)
  [5]=>
  float(-0.0077695918085574)
  ["star"]=>
  string(13) "Polaris,alUMi"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(4)
}
