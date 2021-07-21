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
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
$d = print_date($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
print_array( $rv['tret'], 8, 'tret');
$geo = array(12.1, 49.0, 330);
echo "swe_lun_eclipse_when_loc($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0)\n";
$rv = swe_lun_eclipse_when_loc($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2], 0);
printf( "retflag = %d %b\n", $rv['retflag'], $rv['retflag']);
$tjd_ut = $rv['tret'][0];
$d = print_date($tjd_ut);
printf("%f %s\n",  $tjd_ut,  $d);
print_array( $geo, 3, 'geo');
print_array( $rv['tret'], 10, 'tret');
print_array( $rv['attr'], 11, 'attr');
echo "swe_lun_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2])\n";
$rv = swe_lun_eclipse_how($tjd_ut, SEFLG_SWIEPH, $geo[0], $geo[1], $geo[2]);
printf("%f %s\n",  $tjd_ut,  $d);
print_array( $geo, 3, 'geo');
print_array( $rv['attr'], 11, 'attr');

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
retflag = 29584 111001110010000
2454695.382052 2008 8 16  21:10:9 UT
geo[0] = 12.100000
geo[1] = 49.000000
geo[2] = 330.000000
tret[0] = 2454695.382052
tret[1] = 0.000000
tret[2] = 2454695.316710
tret[3] = 2454695.447390
tret[4] = 0.000000
tret[5] = 0.000000
tret[6] = 2454695.267206
tret[7] = 2454695.496798
tret[8] = 0.000000
tret[9] = 0.000000
attr[0] = 0.807613
attr[1] = 1.836650
attr[2] = 0.000000
attr[3] = 0.000000
attr[4] = 326.988587
attr[5] = 21.362590
attr[6] = 21.402251
attr[7] = 0.530161
attr[8] = 0.807613
attr[9] = 138.000000
attr[10] = 28.000000
swe_lun_eclipse_how(2454695.3820517, SEFLG_SWIEPH, 12.1, 49, 330)
2454695.382052 2008 8 16  21:10:9 UT
geo[0] = 12.100000
geo[1] = 49.000000
geo[2] = 330.000000
attr[0] = 0.807613
attr[1] = 1.836650
attr[2] = 0.000000
attr[3] = 0.000000
attr[4] = 326.988587
attr[5] = 21.362590
attr[6] = 21.402251
attr[7] = 0.530161
attr[8] = 0.807613
attr[9] = 138.000000
attr[10] = 28.000000
