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
swe_deltat(2452275.5);;
var_dump(swe_get_tid_acc());
?>
--EXPECT--
float(-25.8)
