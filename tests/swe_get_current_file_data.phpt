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
swe_calc(2452275.5, 0, SEFLG_SWIEPH);
var_dump(swe_get_current_file_data(1));
?>
--EXPECT--
array(4) {
  ["path"]=>
  string(11) "semo_18.se1"
  ["tfstart"]=>
  float(2378487.5553707)
  ["tfend"]=>
  float(2597656.4574525)
  ["denum"]=>
  int(431)
}