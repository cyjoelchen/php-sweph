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

include 'utility/Format.php';
swe_set_ephe_path('./sweph/ephe');

# Test set 1.
echo "swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0)\n";
$result = swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0);
var_dump(is_int($result['retflag']));
var_dump(!isset($result['serr']));
var_dump(is_array($result['tret']));
var_dump(count($result['tret']));
var_dump(array_map('is_float', $result['tret']));

echo "swe_sol_eclipse_when_glob(-1000000, SEFLG_SWIEPH, 0, 0) - with error\n";
$result = swe_sol_eclipse_when_glob(-1000000, SEFLG_SWIEPH, 0, 0);
var_dump(is_int($result['retflag']));
var_dump(is_string($result['serr']));

# Test set 2.
echo "swe_sol_eclipse_where(2454466.5, SEFLG_SWIEPH)\n";
$result = swe_sol_eclipse_where(2454466.5, SEFLG_SWIEPH);
var_dump(is_int($result['retflag']));
var_dump(!isset($result['serr']));
var_dump(is_array($result['geopos']));
var_dump(count($result['geopos']));
var_dump(array_map('is_float', $result['geopos']));
var_dump(is_array($result['attr']));
var_dump(count($result['attr']));
var_dump(array_map('is_float', $result['attr']));

# Test set 3.
$geo = array(-153.1, -65.0, 0);
echo "swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0)\n";
$result = swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0);
var_dump(is_int($result['retflag']));
var_dump(!isset($result['serr']));
var_dump(is_array($result['tret']));
var_dump(count($result['tret']));
var_dump(array_map('is_float', $result['tret']));
var_dump(is_array($result['attr']));
var_dump(count($result['attr']));
var_dump(array_map('is_float', $result['attr']));

# Test set 4.
echo "swe_sol_eclipse_how(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2])\n";
$return = swe_sol_eclipse_how(2454466.5, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2]);
var_dump(is_int($result['retflag']));
var_dump(!isset($result['serr']));
var_dump(is_array($result['attr']));
var_dump(count($result['attr']));
var_dump(array_map('is_float', $result['attr']));

?>
--EXPECT--
swe_sol_eclipse_when_glob(2454466.5, SEFLG_SWIEPH, 0, 0)
bool(true)
bool(true)
bool(true)
int(10)
array(10) {
  [0]=>
  bool(true)
  [1]=>
  bool(true)
  [2]=>
  bool(true)
  [3]=>
  bool(true)
  [4]=>
  bool(true)
  [5]=>
  bool(true)
  [6]=>
  bool(true)
  [7]=>
  bool(true)
  [8]=>
  bool(true)
  [9]=>
  bool(true)
}
swe_sol_eclipse_when_glob(-1000000, SEFLG_SWIEPH, 0, 0) - with error
bool(true)
bool(true)
swe_sol_eclipse_where(2454466.5, SEFLG_SWIEPH)
bool(true)
bool(true)
bool(true)
int(2)
array(2) {
  [0]=>
  bool(true)
  [1]=>
  bool(true)
}
bool(true)
int(20)
array(20) {
  [0]=>
  bool(true)
  [1]=>
  bool(true)
  [2]=>
  bool(true)
  [3]=>
  bool(true)
  [4]=>
  bool(true)
  [5]=>
  bool(true)
  [6]=>
  bool(true)
  [7]=>
  bool(true)
  [8]=>
  bool(true)
  [9]=>
  bool(true)
  [10]=>
  bool(true)
  [11]=>
  bool(true)
  [12]=>
  bool(true)
  [13]=>
  bool(true)
  [14]=>
  bool(true)
  [15]=>
  bool(true)
  [16]=>
  bool(true)
  [17]=>
  bool(true)
  [18]=>
  bool(true)
  [19]=>
  bool(true)
}
swe_sol_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, -153.1, -65, 0, 0)
bool(true)
bool(true)
bool(true)
int(7)
array(7) {
  [0]=>
  bool(true)
  [1]=>
  bool(true)
  [2]=>
  bool(true)
  [3]=>
  bool(true)
  [4]=>
  bool(true)
  [5]=>
  bool(true)
  [6]=>
  bool(true)
}
bool(true)
int(11)
array(11) {
  [0]=>
  bool(true)
  [1]=>
  bool(true)
  [2]=>
  bool(true)
  [3]=>
  bool(true)
  [4]=>
  bool(true)
  [5]=>
  bool(true)
  [6]=>
  bool(true)
  [7]=>
  bool(true)
  [8]=>
  bool(true)
  [9]=>
  bool(true)
  [10]=>
  bool(true)
}
swe_sol_eclipse_how(2454466.5, SEFLG_SWIEPH, -153.1, -65, 0)
bool(true)
bool(true)
bool(true)
int(11)
array(11) {
  [0]=>
  bool(true)
  [1]=>
  bool(true)
  [2]=>
  bool(true)
  [3]=>
  bool(true)
  [4]=>
  bool(true)
  [5]=>
  bool(true)
  [6]=>
  bool(true)
  [7]=>
  bool(true)
  [8]=>
  bool(true)
  [9]=>
  bool(true)
  [10]=>
  bool(true)
}
