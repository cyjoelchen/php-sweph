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

# Expect warning.
$deltaT = swe_deltat_ex(2452275.5, SEFLG_SWIEPH);
$deltaT['tjd_et'] = round($deltaT['tjd_et'], 6);
var_dump($deltaT);

# Expect no errors.
swe_set_ephe_path('./sweph/ephe');
$deltaT = swe_deltat_ex(2452275.5, SEFLG_SWIEPH);
$deltaT['tjd_et'] = round($deltaT['tjd_et'], 6);
var_dump($deltaT);

?>
--EXPECT--
array(2) {
  ["tjd_et"]=>
  float(0.000744)
  ["serr"]=>
  string(83) "Please call swe_set_ephe_path() or swe_set_jplfile() before calling swe_deltat_ex()"
}
array(2) {
  ["tjd_et"]=>
  float(0.000744)
  ["serr"]=>
  string(0) ""
}
