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

# implements some of the test cases from SwissEph.t Perl 
swe_set_ephe_path('./sweph/ephe');
# perl test line 21
echo "swe_cotrans(80, 5, 0, -23) like perl line 21\n";
$rv = swe_cotrans(80, 5, 0, -23);
var_dump(Format::round($rv, 4));

# perl test line 25
echo "swe_cotrans_sp(80, 5, 0, 1, 0, 0, -23) like perl line 25\n";
$rv = swe_cotrans_sp(80, 5, 0, 1, 0, 0, -23);
var_dump(Format::round($rv, 4));

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
$rv = swe_pheno(2415020.5, $p, SEFLG_MOSEPH);
printf( "%s\tretflag = %d %b\n", $pnam, $rv['retflag'], $rv['retflag']);
var_dump(Format::round($rv));

# reprodude perl_sweph test line 370
echo "swe_lun_occult_where for Venus, like perl line 370\n";
$tjd_ut = 2454531.296945;
var_dump($tjd_ut, Format::asUtc($tjd_ut));
var_dump(Format::round(swe_lun_occult_where($tjd_ut, SE_VENUS, "", SEFLG_MOSEPH)));

# reprodude perl_sweph test line 437
echo "swe_lun_occult_when_loc for Venus, like perl line 437\n";
$rv = swe_lun_occult_when_loc(2454466.5, SE_VENUS, "", SEFLG_MOSEPH, 8.55, 47.35, 400, 0);
var_dump(Format::round($rv));

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
array(2) {
  ["retflag"]=>
  int(4)
  ["attr"]=>
  array(6) {
    [0]=>
    float(36.744873)
    [1]=>
    float(0.900654)
    [2]=>
    float(26.271244)
    [3]=>
    float(0.003165)
    [4]=>
    float(-3.910301)
    [5]=>
    float(0)
  }
}
swe_lun_occult_where for Venus, like perl line 370
float(2454531.296945)
string(20) "2008 3 5  19:7:36 UT"
array(3) {
  ["retflag"]=>
  int(5)
  ["geopos"]=>
  array(2) {
    [0]=>
    float(-132.448227)
    [1]=>
    float(-3.224077)
  }
  ["attr"]=>
  array(8) {
    [0]=>
    float(86.757447)
    [1]=>
    float(172.526684)
    [2]=>
    float(29765.456544)
    [3]=>
    float(-3461.913794)
    [4]=>
    float(336.205692)
    [5]=>
    float(76.844797)
    [6]=>
    float(76.848588)
    [7]=>
    float(1.8E-5)
  }
}
swe_lun_occult_when_loc for Venus, like perl line 437
array(3) {
  ["retflag"]=>
  int(8070)
  ["tret"]=>
  array(8) {
    [0]=>
    float(2454802.198601)
    [1]=>
    float(2454802.169776)
    [2]=>
    float(2454802.170458)
    [3]=>
    float(2454802.225298)
    [4]=>
    float(2454802.22591)
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
    float(32.399335)
    [1]=>
    float(106.892673)
    [2]=>
    float(11426.043484)
    [3]=>
    float(-3452.98245)
    [4]=>
    float(33.358309)
    [5]=>
    float(11.690326)
    [6]=>
    float(11.762576)
    [7]=>
    float(0.099495)
    [8]=>
    float(0)
    [9]=>
    float(0)
  }
}
