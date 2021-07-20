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
echo "swe_lun_occult_when_glob for Venus\n";
$rv = swe_lun_occult_when_glob(2454466.5, SE_VENUS, "", SEFLG_SWIEPH, 0, 0);
var_dump($rv);
$tjd_ut = $rv['tret'][0];
var_dump($tjd_ut, print_date($tjd_ut));
# echo "swe_lun_occult_where for Jupiter\n";
# var_dump(swe_lun_occult_where($tjd_ut, SE_JUPITER, "", SEFLG_SWIEPH|SEFLG_SPEED));

function print_date($t)
{
  $r = swe_jdut1_to_utc($t, SE_GREG_CAL);
  $sec = floor($r['sec']);
  $date = $r['year'] . " " .  $r['month'] . " " .  $r['day']  . "  " . $r['hour'] .":".$r['min'] .":".$sec .' UT';
  # $date = $r['year'] . " / ss";
  return $date;
}
?>
--EXPECT--
swe_lun_occult_where for Jupiter
array(4) {
  ["retflag"]=>
  int(0)
  ["geopos"]=>
  array(2) {
    [0]=>
    float(92.617313451457)
    [1]=>
    float(3.5049353988172)
  }
  ["attr"]=>
  array(8) {
    [0]=>
    float(-1519.7318491462)
    [1]=>
    float(42.759960843941)
    [2]=>
    float(1)
    [3]=>
    float(-3401.6255333049)
    [4]=>
    float(113.05838071407)
    [5]=>
    float(0.0020325080606516)
    [6]=>
    float(0.48487149554921)
    [7]=>
    float(19.714322323503)
  }
  ["star"]=>
  string(0) ""
}
