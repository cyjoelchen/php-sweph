--TEST--
Basic test
--SKIPIF--
<?php
# @todo Determine why results are different in PHP CLI vs. tests.
echo 'skip';
?>
--FILE--
<?php
swe_set_ephe_path(null);
var_dump(swe_calc_pctr(2452275.5, 1, 2, SEFLG_MOSEPH));
?>
--EXPECT--
array(8) {
  [0]=>
  float(6.9529142502109E-310)
  [1]=>
  float(6.9529142502133E-310)
  [2]=>
  float(0)
  [3]=>
  float(0)
  [4]=>
  float(0)
  [5]=>
  float(0)
  ["serr"]=>
  string(48) "barycentric Moshier positions are not supported."
  ["rc"]=>
  int(-1)
}
