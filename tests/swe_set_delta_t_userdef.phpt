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
var_dump(swe_set_delta_t_userdef(0.0008));

# SE computed (and rounded) value: 0.000744
var_dump(round(swe_deltat(2452275.5), 6));
?>
--EXPECT--
NULL
float(0.0008)
