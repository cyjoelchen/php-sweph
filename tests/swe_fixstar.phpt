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
echo "swe_fixstar\n";
var_dump(swe_fixstar('Sirius', 2452275.5, SEFLG_SWIEPH|SEFLG_SPEED));
echo "swe_fixstar2\n";
var_dump(swe_fixstar2('Sirius', 2452275.5, SEFLG_SWIEPH|SEFLG_SPEED));
echo "swe_fixstar_ut\n";
var_dump(swe_fixstar_ut('Polaris', 2452275.5, SEFLG_SWIEPH|SEFLG_SPEED));
echo "swe_fixstar2_ut\n";
var_dump(swe_fixstar2_ut('Polaris', 2452275.5, SEFLG_SWIEPH|SEFLG_SPEED));
echo "swe_fixstar2_mag\n";
var_dump(swe_fixstar2_mag('Sirius'));
?>
--EXPECT--
swe_fixstar
array(9) {
  [0]=>
  float(104.11214970774)
  [1]=>
  float(-39.605526331605)
  [2]=>
  float(543929.85718298)
  [3]=>
  float(7.9880489045954E-5)
  [4]=>
  float(-4.9099417570858E-5)
  [5]=>
  float(-0.004141746210127)
  ["star"]=>
  string(12) "Sirius,alCMa"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
swe_fixstar2
array(9) {
  [0]=>
  float(104.11214970774)
  [1]=>
  float(-39.605526331605)
  [2]=>
  float(543929.85718298)
  [3]=>
  float(7.9880489045954E-5)
  [4]=>
  float(-4.9099417570858E-5)
  [5]=>
  float(-0.004141746210127)
  ["star"]=>
  string(12) "Sirius,alCMa"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
swe_fixstar_ut
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
swe_fixstar2_ut
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
swe_fixstar2_mag
array(4) {
  ["mag"]=>
  float(-1.46)
  ["star"]=>
  string(12) "Sirius,alCMa"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(0)
}
