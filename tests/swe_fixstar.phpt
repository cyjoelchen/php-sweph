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
echo "swe_fixstar\n";
var_dump(Format::round(swe_fixstar('Sirius', 2452275.5, SEFLG_SWIEPH)));
echo "swe_fixstar2\n";
var_dump(Format::round(swe_fixstar2('Sirius', 2452275.5, SEFLG_SWIEPH)));
echo "swe_fixstar_ut\n";
var_dump(Format::round(swe_fixstar_ut('Polaris', 2452275.5, SEFLG_SWIEPH | SEFLG_EQUATORIAL)));
echo "swe_fixstar2_ut\n";
var_dump(Format::round(swe_fixstar2_ut('Polaris', 2452275.5, SEFLG_SWIEPH | SEFLG_EQUATORIAL)));
echo "swe_fixstar2_mag\n";
var_dump(Format::round(swe_fixstar2_mag('Sirius')));
?>
--EXPECT--
swe_fixstar
array(9) {
  [0]=>
  float(104.112149)
  [1]=>
  float(-39.605526)
  [2]=>
  float(543929.857182)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(12) "Sirius,alCMa"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(2)
}
swe_fixstar2
array(9) {
  [0]=>
  float(104.112149)
  [1]=>
  float(-39.605526)
  [2]=>
  float(543929.857182)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(12) "Sirius,alCMa"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(2)
}
swe_fixstar_ut
array(9) {
  [0]=>
  float(38.647424)
  [1]=>
  float(89.276469)
  [2]=>
  float(27356067.783757)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(13) "Polaris,alUMi"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(2050)
}
swe_fixstar2_ut
array(9) {
  [0]=>
  float(38.647424)
  [1]=>
  float(89.276469)
  [2]=>
  float(27356067.783757)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(13) "Polaris,alUMi"
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(2050)
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
