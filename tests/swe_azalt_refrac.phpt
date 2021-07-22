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
$geo = array(12.1, 49.0, 330);
$tjd_ut = 2454503.06;
$atpress = 0;
$atemp = 30;
for ($p = SE_SUN; $p <= SE_PLUTO; $p++) {
  $pnam = swe_get_planet_name($p);
  $rv = swe_calc_ut($tjd_ut, $p, SEFLG_SWIEPH);
  $xin0 = $rv[0];
  $xin1 = $rv[1];
  echo "swe_azalt($tjd_ut, SE_ECL2HOR, $geo[0], $geo[1], $geo[2], $atpress, $atemp, $xin0, $xin1)\n";
  $rv = swe_azalt($tjd_ut, SE_ECL2HOR, $geo[0], $geo[1], $geo[2], $atpress, $atemp, $xin0, $xin1);
  printf("planet %s\tlon=%f\tlat=%f\nhorizon coordinates\n", $pnam, $xin0, $xin1);
  $azi = $rv[0];
  $talt = $rv[1];
  print_array( $rv, 3, 'xaz');
  echo "swe_azalt_rev($tjd_ut, SE_HOR2ECL, $geo[0], $geo[1], $geo[2], $azi, $talt)\n";
  $rv = swe_azalt_rev($tjd_ut, SE_HOR2ECL, $geo[0], $geo[1], $geo[2], $azi, $talt);
  printf("converted back\tlon=%f\tlat=%f\n", $rv[0], $rv[1]);
  echo "swe_refrac($talt, $atpress, $atemp, SE_TRUE_TO_APP)\n";
  $appalt = swe_refrac($talt, $atpress, $atemp, SE_TRUE_TO_APP);
  printf("app. alt = %f\n", $appalt);
  echo "swe_refrac_extended($talt, $geo[2], $atpress, 10.0, $atemp, SE_TRUE_TO_APP)\n";
  $rv  = swe_refrac_extended($talt, $geo[2], $atpress, 10.0, $atemp, SE_TRUE_TO_APP);
  print_array( $rv, 4, 'rv');
}

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
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.13145055883, -8.1708335644352E-5)
planet Sun	lon=317.131451	lat=-0.000082
horizon coordinates
xaz[0] = 31.000508
xaz[1] = 19.979725
xaz[2] = 20.019722
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 31.000507789831, 19.97972538002)
converted back	lon=317.131451	lat=-0.000082
swe_refrac(19.97972538002, 0, 30, SE_TRUE_TO_APP)
app. alt = 19.979725
swe_refrac_extended(19.97972538002, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 19.979725
rv[1] = 19.975900
rv[2] = -0.003826

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 309.8883982075, -1.6164161204145)
planet Moon	lon=309.888398	lat=-1.616416
horizon coordinates
xaz[0] = 35.830421
xaz[1] = 14.168707
xaz[2] = 14.225327
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 35.830421428922, 14.168707435917)
converted back	lon=309.888398	lat=-1.616416
swe_refrac(14.168707435917, 0, 30, SE_TRUE_TO_APP)
app. alt = 14.168707
swe_refrac_extended(14.168707435917, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 14.168707
rv[1] = 14.163272
rv[2] = -0.005436

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 317.58169019832, 3.5727768041555)
planet Mercury	lon=317.581690	lat=3.572777
horizon coordinates
xaz[0] = 33.015528
xaz[1] = 23.054619
xaz[2] = 23.088824
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 33.015528055456, 23.054619397828)
converted back	lon=317.581690	lat=3.572777
swe_refrac(23.054619397828, 0, 30, SE_TRUE_TO_APP)
app. alt = 23.054619
swe_refrac_extended(23.054619397828, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 23.054619
rv[1] = 23.051351
rv[2] = -0.003268

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 286.27461775725, 0.45824983922003)
planet Venus	lon=286.274618	lat=0.458250
horizon coordinates
xaz[0] = 55.087223
xaz[1] = 0.074100
xaz[2] = 0.490626
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 55.087222851488, 0.074099595114085)
converted back	lon=286.274618	lat=0.458250
swe_refrac(0.074099595114085, 0, 30, SE_TRUE_TO_APP)
app. alt = 0.074100
swe_refrac_extended(0.074099595114085, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 0.074100
rv[1] = 0.025166
rv[2] = -0.048933

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 84.347673788076, 3.269827510972)
planet Mars	lon=84.347674	lat=3.269828
horizon coordinates
xaz[0] = 249.152267
xaz[1] = 17.317286
xaz[2] = 17.363768
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 249.15226738768, 17.317286330931)
converted back	lon=84.347674	lat=3.269828
swe_refrac(17.317286330931, 0, 30, SE_TRUE_TO_APP)
app. alt = 17.317286
swe_refrac_extended(17.317286330931, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 17.317286
rv[1] = 17.312835
rv[2] = -0.004452

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 281.08104864944, 0.11611585917234)
planet Jupiter	lon=281.081049	lat=0.116116
horizon coordinates
xaz[0] = 58.699497
xaz[1] = -3.675366
xaz[2] = -3.675366
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 58.699496773198, -3.6753655043035)
converted back	lon=281.081049	lat=0.116116
swe_refrac(-3.6753655043035, 0, 30, SE_TRUE_TO_APP)
app. alt = -3.675366
swe_refrac_extended(-3.6753655043035, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = -3.675366
rv[1] = -3.675366
rv[2] = 0.000000

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 156.55664098162, 1.807919057902)
planet Saturn	lon=156.556641	lat=1.807919
horizon coordinates
xaz[0] = 192.185196
xaz[1] = -29.463314
xaz[2] = -29.463314
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 192.18519630456, -29.463314277349)
converted back	lon=156.556641	lat=1.807919
swe_refrac(-29.463314277349, 0, 30, SE_TRUE_TO_APP)
app. alt = -29.463314
swe_refrac_extended(-29.463314277349, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = -29.463314
rv[1] = -29.463314
rv[2] = 0.000000

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 346.91144266408, -0.73880594411775)
planet Uranus	lon=346.911443	lat=-0.738806
horizon coordinates
xaz[0] = 1.848702
xaz[1] = 35.134978
xaz[2] = 35.155710
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 1.8487020305536, 35.134977545971)
converted back	lon=346.911443	lat=-0.738806
swe_refrac(35.134977545971, 0, 30, SE_TRUE_TO_APP)
app. alt = 35.134978
swe_refrac_extended(35.134977545971, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 35.134978
rv[1] = 35.133001
rv[2] = -0.001976

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 321.54464479387, -0.29238086027684)
planet Neptune	lon=321.544645	lat=-0.292381
horizon coordinates
xaz[0] = 27.052450
xaz[1] = 22.432809
xaz[2] = 22.468064
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 27.052449976595, 22.432808718829)
converted back	lon=321.544645	lat=-0.292381
swe_refrac(22.432808718829, 0, 30, SE_TRUE_TO_APP)
app. alt = 22.432809
swe_refrac_extended(22.432808718829, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = 22.432809
rv[1] = 22.429440
rv[2] = -0.003369

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
swe_azalt(2454503.06, SE_ECL2HOR, 12.1, 49, 330, 0, 30, 270.33845556252, 6.2835633668811)
planet Pluto	lon=270.338456	lat=6.283563
horizon coordinates
xaz[0] = 70.859347
xaz[1] = -6.169858
xaz[2] = -6.169858
swe_azalt_rev(2454503.06, SE_HOR2ECL, 12.1, 49, 330, 70.8593465128, -6.1698581235873)
converted back	lon=270.338456	lat=6.283563
swe_refrac(-6.1698581235873, 0, 30, SE_TRUE_TO_APP)
app. alt = -6.169858
swe_refrac_extended(-6.1698581235873, 330, 0, 10.0, 30, SE_TRUE_TO_APP)
rv[0] = -6.169858
rv[1] = -6.169858
rv[2] = 0.000000

Notice: Undefined offset: 3 in /home/alois/php-sweph/tests/swe_azalt_refrac.php on line 41
rv[3] = 0.000000
