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
# Taipei, Taiwan: 121E30, 25N03 @ 9 meters.
var_dump(swe_set_topo(121.5, 25.05, 9));
?>
--EXPECT--
NULL
