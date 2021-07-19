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
var_dump(swe_calc_pctr(2452275.5, 1, 2, SEFLG_SWIEPH|SEFLG_SPEED));
?>
--EXPECT--
array(8) {
  [0]=>
  float(115.59455769599)
  [1]=>
  float(2.0541309173647)
  [2]=>
  float(1.2326810399357)
  [3]=>
  float(1.5728585729521)
  [4]=>
  float(-0.050397195648784)
  [5]=>
  float(-0.018083677833651)
  ["serr"]=>
  string(0) ""
  ["rc"]=>
  int(258)
}
