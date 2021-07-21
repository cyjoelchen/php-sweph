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
echo "swe_lun_eclipse_when\n";
$rv = swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0);
var_dump($rv);
$tjd_ut = $rv['tret'][0];
var_dump($tjd_ut, print_date($tjd_ut));
echo "swe_lun_eclipse_when_loc\n";
$rv = swe_lun_eclipse_when_loc(2454466.5, SEFLG_SWIEPH, 12.1, 49.0, 330, 0);
var_dump($rv);

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
swe_lun_eclipse_when
array(2) {
  ["retflag"]=>
  int(4)
  ["tret"]=>
  array(8) {
    [0]=>
    float(2454517.643069)
    [1]=>
    float(0)
    [2]=>
    float(2454517.5717233)
    [3]=>
    float(2454517.7144189)
    [4]=>
    float(2454517.6258038)
    [5]=>
    float(2454517.6603509)
    [6]=>
    float(2454517.5253891)
    [7]=>
    float(2454517.7608555)
  }
}
float(2454517.643069)
string(20) "2008 2 21  3:26:1 UT"
swe_lun_eclipse_when_loc
array(3) {
  ["retflag"]=>
  int(16260)
  ["tret"]=>
  array(10) {
    [0]=>
    float(2454517.643069)
    [1]=>
    float(0)
    [2]=>
    float(2454517.5717233)
    [3]=>
    float(2454517.7144189)
    [4]=>
    float(2454517.6258038)
    [5]=>
    float(2454517.6603509)
    [6]=>
    float(2454517.5253891)
    [7]=>
    float(0)
    [8]=>
    float(0)
    [9]=>
    float(2454517.7580826)
  }
  ["attr"]=>
  array(11) {
    [0]=>
    float(1.1061093373639)
    [1]=>
    float(2.1451343097697)
    [2]=>
    float(0)
    [3]=>
    float(0)
    [4]=>
    float(73.820314556875)
    [5]=>
    float(26.299290272561)
    [6]=>
    float(26.330700027277)
    [7]=>
    float(0.38016255898401)
    [8]=>
    float(1.1061093373639)
    [9]=>
    float(133)
    [10]=>
    float(26)
  }
}
