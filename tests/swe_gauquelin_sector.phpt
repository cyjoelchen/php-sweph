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
var_dump(Format::round(swe_gauquelin_sector(2452275.5, 2, '', SEFLG_SWIEPH|SEFLG_SPEED, 0, 121.34, 43.57, 100, 0, 0)));
?>
--EXPECT--
array(2) {
  ["rc"]=>
  int(0)
  ["gsect"]=>
  float(36.207748)
}
