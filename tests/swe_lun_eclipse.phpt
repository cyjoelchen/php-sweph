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
echo "swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0)\n";
$rv = swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0);
var_dump($rv);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
$d = print_date($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
print_array( $rv['tret'], 8, 'tret');
$geo = array(12.1, 49.0, 330);
echo "swe_lun_eclipse_when_loc($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0)\n";
$rv = swe_lun_eclipse_when_loc($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0);
var_dump($rv);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
printf("%f %s\n",  $tjd_ut,  $d);
print_array( $geo, 3, 'geo');
print_array( $rv['tret'], 10, 'tret');
print_array( $rv['attr'], 11, 'attr');
echo "swe_lun_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2])\n";
$rv = swe_lun_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2]);
var_dump($rv);

function print_date($t)
{
  $r = swe_jdut1_to_utc($t, SE_GREG_CAL);
  $sec = floor($r['sec']);
  $date = $r['year'] . " " .  $r['month'] . " " .  $r['day']  . "  " . $r['hour'] .":".$r['min'] .":".$sec .' UT';
  # $date = $r['year'] . " / ss";
  return $date;
}

function print_array($arr, $n, $name)
{
  for ($i = 0; $i < $n; $i++)
   printf( "%s[%d] = %f\n", $name, $i, $arr[$i]);;
}
?>
--EXPECT--
swe_lun_eclipse_when(2454466.5, SEFLG_SWIEPH, 0, 0)
array(3) {
  ["retflag"]=>
  int(4)
  ["tjd_start"]=>
  float(2454466)
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
retflag = 4 100
2454517.643069 2008 2 21  3:26:1 UT
tret[0] = 2454517.643069
tret[1] = 0.000000
tret[2] = 2454517.571723
tret[3] = 2454517.714419
tret[4] = 2454517.625804
tret[5] = 2454517.660351
tret[6] = 2454517.525389
tret[7] = 2454517.760855
swe_lun_eclipse_when_loc(2454517.643069, SEFLG_SWIEPH, 12.1, 49, 330, 0)
array(4) {
  ["retflag"]=>
  int(16260)
  ["tjd_ut"]=>
  float(2454516)
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
retflag = 16260 11111110000100
2454517.643069 2008 2 21  3:26:1 UT
geo[0] = 12.100000
geo[1] = 49.000000
geo[2] = 330.000000
tret[0] = 2454517.643069
tret[1] = 0.000000
tret[2] = 2454517.571723
tret[3] = 2454517.714419
tret[4] = 2454517.625804
tret[5] = 2454517.660351
tret[6] = 2454517.525389
tret[7] = 0.000000
tret[8] = 0.000000
tret[9] = 2454517.758083
attr[0] = 1.106109
attr[1] = 2.145134
attr[2] = 0.000000
attr[3] = 0.000000
attr[4] = 73.820315
attr[5] = 26.299290
attr[6] = 26.330700
attr[7] = 0.380163
attr[8] = 1.106109
attr[9] = 133.000000
attr[10] = 26.000000
swe_lun_eclipse_how(2454517.643069, SEFLG_SWIEPH, 12.1, 49, 330)
array(3) {
  ["retflag"]=>
  int(0)
  ["tjd_ut"]=>
  float(2454516)
  ["attr"]=>
  array(11) {
    [0]=>
    float(0)
    [1]=>
    float(-35.242111171737)
    [2]=>
    float(0)
    [3]=>
    float(0)
    [4]=>
    float(207.84372971828)
    [5]=>
    float(-18.069000037556)
    [6]=>
    float(-18.069000037556)
    [7]=>
    float(0)
    [8]=>
    float(0)
    [9]=>
    float(133)
    [10]=>
    float(26)
  }
}
