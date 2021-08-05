--TEST--
Tidal acceleration I/O.
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php

$values = [
    SE_TIDAL_DE200,
    SE_TIDAL_DE403,
    SE_TIDAL_DE404,
    SE_TIDAL_DE405,
    SE_TIDAL_DE406,
    SE_TIDAL_DE421,
    SE_TIDAL_DE422,
    SE_TIDAL_DE430,
    SE_TIDAL_DE431,
    SE_TIDAL_DE441,
    SE_TIDAL_26,
    SE_TIDAL_STEPHENSON_2016,
    SE_TIDAL_DEFAULT,
    SE_TIDAL_MOSEPH,
    SE_TIDAL_SWIEPH,
    SE_TIDAL_JPLEPH
];

swe_set_ephe_path('./sweph/ephe');

foreach ($values as $value) {
    swe_set_tid_acc($value);
    var_dump(swe_get_tid_acc());
}

?>
--EXPECT--
float(-23.8946)
float(-25.58)
float(-25.58)
float(-25.826)
float(-25.826)
float(-25.85)
float(-25.85)
float(-25.82)
float(-25.8)
float(-25.936)
float(-26)
float(-25.85)
float(-25.8)
float(-25.58)
float(-25.8)
float(-25.8)
