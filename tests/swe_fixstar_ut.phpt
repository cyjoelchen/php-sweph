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
var_dump(swe_fixstar_ut('Polaris', 2452275.5, SEFLG_SWIEPH|SEFLG_SPEED));
?>
--EXPECT--
array(9) {
  [0]=>
  float(88.604973652753)
  [1]=>
  float(66.10279360237)
  [2]=>
  float(27356067.783758)
  [3]=>
  float(2.6036363444761E-5)
  [4]=>
  float(0.00010662418124057)
  [5]=>
  float(-0.0084652681790551)
  ["star"]=>
  string(13) "Polaris,alUMi"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
