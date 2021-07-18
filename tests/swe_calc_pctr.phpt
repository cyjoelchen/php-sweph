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
  float(0)
  [1]=>
  float(0)
  [2]=>
  float(NAN)
  [3]=>
  float(-4.0717984910775E+37)
  [4]=>
  float(4.6379044294073E-310)
  [5]=>
  float(4.9406564584125E-324)
  ["serr"]=>
  string(48) "barycentric Moshier positions are not supported."
  ["rc"]=>
  int(-1)
}
