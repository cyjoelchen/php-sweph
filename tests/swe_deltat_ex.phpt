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

# Expect no errors.
swe_set_ephe_path('./sweph/ephe');
$rv = swe_deltat_ex(2452275.5, SEFLG_SWIEPH);
$deltaT = round($rv['dt'] * 86400, 6);
var_dump($deltaT);

?>
--EXPECT--
float(64.300074)
