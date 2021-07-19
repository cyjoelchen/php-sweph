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
var_dump(swe_fixstar('Polaris', 2452275.5, SEFLG_SWIEPH|SEFLG_SPEED));
?>
--EXPECT--
array(9) {
  [0]=>
  float(88.604973632658)
  [1]=>
  float(66.102793535015)
  [2]=>
  float(27356067.783764)
  [3]=>
  float(2.6049962702619E-5)
  [4]=>
  float(0.00010662031593586)
  [5]=>
  float(-0.015554577207556)
  ["star"]=>
  string(13) "Polaris,alUMi"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
