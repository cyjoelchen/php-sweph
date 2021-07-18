--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('sweph')) {
    echo 'skip';
}
?>
--FILE--
<?php
swe_set_ephe_path(null);
var_dump(swe_fixstar('Polaris', 2452275.5, SEFLG_MOSEPH));
?>
--EXPECT--
PolarisPolaris SwissEph file 'sefstars.txt' not found in PATH '.:/users/ephe2/:/users/ephe/' -1
array(9) {
  [0]=>
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["star"]=>
  string(7) "Polaris"
  ["serr"]=>
  string(77) "SwissEph file 'sefstars.txt' not found in PATH '.:/users/ephe2/:/users/ephe/'"
  ["rc"]=>
  int(-1)
}
