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
$dt = swe_deltat(2452275.5) * 86400;
var_dump(round($dt, 6));
?>
--EXPECT--
float(64.300074)
