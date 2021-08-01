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
# implements some of the test cases from SwissEph.t Perl 
swe_set_ephe_path('./sweph/ephe');
# perl test line 21
echo "swe_cotrans(80, 5, 0, -23) like perl line 21\n";
$rv = swe_cotrans(80, 5, 0, -23);
$rv = array_map(function ($value) {
    return round($value, 4);
    }, $rv);
var_dump($rv);
# perl test line 25
echo "swe_cotrans_sp(80, 5, 0, 1, 0, 0, -23) like perl line 25\n";
$rv = swe_cotrans_sp(80, 5, 0, 1, 0, 0, -23);
$rv = array_map(function ($value) {
    return round($value, 4);
    }, $rv);
var_dump($rv);
# perl test line 34
echo "swe_deltat(2451545) like perl line 34\n";
$rv = swe_deltat(2451545);
$dt = round($rv * 86400, 4);
var_dump($dt);
# perl test line 36
echo "swe_deltat_ex(2451545, SEFLG_MOSEPH) like perl line 36\n";
$rv = swe_deltat_ex(2451545, SEFLG_MOSEPH);
$dt =  round($rv['dt'] * 86400, 5);
var_dump($dt);

# perl test line 246
$p = SE_VENUS;
$pnam = swe_get_planet_name($p);
echo "swe_pheno(2415020.5, $p, SEFLG_MOSEPH), like perl line 246\n";
$rv = swe_pheno(2415020.5, $p, SEFLG_MOSEPH);\
printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
print_array( $rv['attr'], 6, 'attr');

# reprodude perl_sweph test line 370
echo "swe_lun_occult_where for Venus, like perl line 370\n";
$tjd_ut = 2454531.296945;
var_dump($tjd_ut, print_date($tjd_ut));
var_dump(swe_lun_occult_where($tjd_ut, SE_VENUS, "", SEFLG_MOSEPH));

# reprodude perl_sweph test line 437
echo "swe_lun_occult_when_loc for Venus, like perl line 437\n";
$rv = swe_lun_occult_when_loc(2454466.5, SE_VENUS, "", SEFLG_MOSEPH, 8.55, 47.35, 400, 0);
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
function print_array_t($arr, $n, $name)
{
  for ($i = 0; $i < $n; $i++) {
   printf( "%s[%d] = %f %s\n", $name, $i, $arr[$i], print_date($arr[$i]));;
  }
}

?>
--EXPECT--
swe_cotrans(80, 5, 0, -23) like perl line 21
array(3) {
  [0]=>
  float(78.7418)
  [1]=>
  float(27.6169)
  [2]=>
  float(0)
}
swe_cotrans_sp(80, 5, 0, 1, 0, 0, -23) like perl line 25
array(6) {
  [0]=>
  float(78.7418)
  [1]=>
  float(27.6169)
  [2]=>
  float(0)
  [3]=>
  float(1.121)
  [4]=>
  float(0.0763)
  [5]=>
  float(0)
}
swe_deltat(2451545) like perl line 34
float(63.8289)
swe_deltat_ex(2451545, SEFLG_MOSEPH) like perl line 36
float(63.82891)
swe_pheno(2415020.5, 3, SEFLG_MOSEPH), like perl line 246
Venus	retflag = 4 100
attr[0] = 36.744873
attr[1] = 0.900654
attr[2] = 26.271244
attr[3] = 0.003165
attr[4] = -3.910301
attr[5] = 0.000000
swe_lun_occult_where for Venus, like perl line 370
float(2454531.296945)
string(20) "2008 3 5  19:7:36 UT"
array(3) {
  ["retflag"]=>
  int(5)
  ["geopos"]=>
  array(2) {
    [0]=>
    float(-132.44822699691)
    [1]=>
    float(-3.2240771105082)
  }
  ["attr"]=>
  array(8) {
    [0]=>
    float(86.75744657541)
    [1]=>
    float(172.52668357044)
    [2]=>
    float(29765.456543813)
    [3]=>
    float(-3461.9137941512)
    [4]=>
    float(336.2056916312)
    [5]=>
    float(76.84479704508)
    [6]=>
    float(76.8485876422)
    [7]=>
    float(1.8171544675186E-5)
  }
}
swe_lun_occult_when_loc for Venus, like perl line 437
array(3) {
  ["retflag"]=>
  int(8070)
  ["tret"]=>
  array(8) {
    [0]=>
    float(2454802.1986012)
    [1]=>
    float(2454802.1697765)
    [2]=>
    float(2454802.170458)
    [3]=>
    float(2454802.2252978)
    [4]=>
    float(2454802.2259104)
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
    float(32.39933534693)
    [1]=>
    float(106.89267273416)
    [2]=>
    float(11426.043484253)
    [3]=>
    float(-3452.9824495693)
    [4]=>
    float(33.358309093352)
    [5]=>
    float(11.690325670312)
    [6]=>
    float(11.762575846784)
    [7]=>
    float(0.099495078675472)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
