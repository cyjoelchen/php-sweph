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
echo "swe_lun_occult_where for Venus\n";
var_dump(swe_lun_occult_where($tjd_ut, SE_VENUS, "", SEFLG_SWIEPH));
echo "swe_lun_occult_when_loc for Venus\n";
$rv = swe_lun_occult_when_loc(2454466.5, SE_VENUS, "", SEFLG_SWIEPH, 12.1, 49.0, 330, 0);
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
swe_lun_occult_when_glob for Venus
array(2) {
  ["retflag"]=>
  int(5)
  ["tret"]=>
  array(10) {
    [0]=>
    float(2454531.2969455)
    [1]=>
    float(2454531.3051414)
    [2]=>
    float(2454531.1986292)
    [3]=>
    float(2454531.3950791)
    [4]=>
    float(2454531.1988858)
    [5]=>
    float(2454531.3948235)
    [6]=>
    float(2454531.2206054)
    [7]=>
    float(2454531.3731207)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
float(2454531.2969455)
string(20) "2008 3 5  19:7:36 UT"
swe_lun_occult_where for Venus
array(3) {
  ["retflag"]=>
  int(5)
  ["geopos"]=>
  array(2) {
    [0]=>
    float(-132.44808390759)
    [1]=>
    float(-3.2239402137703)
  }
  ["attr"]=>
  array(8) {
    [0]=>
    float(86.757453740294)
    [1]=>
    float(172.52668487932)
    [2]=>
    float(29765.456995448)
    [3]=>
    float(-3461.9137942606)
    [4]=>
    float(336.2071185015)
    [5]=>
    float(76.844796445661)
    [6]=>
    float(76.84858704296)
    [7]=>
    float(1.8151476701449E-5)
  }
}
swe_lun_occult_when_loc for Venus
array(3) {
  ["retflag"]=>
  int(8070)
  ["tret"]=>
  array(8) {
    [0]=>
    float(2454802.2005974)
    [1]=>
    float(2454802.1730961)
    [2]=>
    float(2454802.1737654)
    [3]=>
    float(2454802.2261107)
    [4]=>
    float(2454802.2267153)
    [5]=>
    float(0)
    [6]=>
    float(0)
    [7]=>
    float(0)
  }
  ["attr"]=>
  array(10) {
    [0]=>
    float(30.8278899834)
    [1]=>
    float(106.80564129198)
    [2]=>
    float(11407.445011791)
    [3]=>
    float(-3452.9823246968)
    [4]=>
    float(36.788614918225)
    [5]=>
    float(8.7055707380266)
    [6]=>
    float(8.8017950776801)
    [7]=>
    float(0.10655162304033)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
