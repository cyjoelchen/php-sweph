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
var_dump(round(swe_sidtime0(2452275.5, 23.4, 121.34), 6));
?>
--EXPECT--
float(14.122425)
