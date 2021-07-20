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
var_dump(swe_radnorm(0));
var_dump(swe_radnorm(6.2831853071796));
var_dump(round(swe_radnorm(-0.017453292519943), 6));
?>
--EXPECT--
float(0)
float(0)
float(6.265732)
