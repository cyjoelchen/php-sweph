<?php
/**
 * Stub for arginfo in PHP 8.
 *
 * @generate-function-entries
 * @generate-legacy-arginfo
 */

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_calc(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_calc_ut(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iplctr
 * @param int $iflag
 * @return array
 */
function swe_calc_pctr(double $tjd_et, int $ipl, int $iplctr, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_et
 * @param int $iflag
 * @return array
 */
function swe_solcross(double $x2cross, double $jd_et, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_ut
 * @param int $iflag
 * @return array
 */
function swe_solcross_ut(double $x2cross, double $jd_ut, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_et
 * @param int $iflag
 * @return array
 */
function swe_mooncross(double $x2cross, double $jd_et, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_ut
 * @param int $iflag
 * @return array
 */
function swe_mooncross_ut(double $x2cross, double $jd_ut, int $iflag): array {}

/**
 * @param double $jd_et
 * @param int $iflag
 * @return array
 */
function swe_mooncross_node(double $jd_et, int $iflag): array {}

/**
 * @param double $jd_ut
 * @param int $iflag
 * @return array
 */
function swe_mooncross_node_ut(double $jd_ut, int $iflag): array {}

/**
 * @param int $ipl
 * @param double $x2cross
 * @param double $jd_et
 * @param int $iflag
 * @param int $dir
 * @return array
 */
function swe_helio_cross(int $ipl, double $x2cross, double $jd_et, int $iflag, int $dir): array {}

/**
 * @param int $ipl
 * @param double $x2cross
 * @param double $jd_ut
 * @param int $iflag
 * @param int $dir
 * @return array
 */
function swe_helio_cross_ut(int $ipl, double $x2cross, double $jd_ut, int $iflag, int $dir): array {}

/**
 * @param string $star
 * @param double $tjd_et
 * @param int $iflag
 * @return array
 */
function swe_fixstar(string $star, double $tjd_et, int $iflag): array {}

/**
 * @param string $star
 * @param double $tjd_et
 * @param int $iflag
 * @return array
 */
function swe_fixstar2(string $star, double $tjd_et, int $iflag): array {}

/**
 * @param string $star
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_fixstar_ut(string $star, double $tjd_ut, int $iflag): array {}

/**
 * @param string $star
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_fixstar2_ut(string $star, double $tjd_ut, int $iflag): array {}

/**
 * @param string $star
 * @return array
 */
function swe_fixstar_mag(string $star): array {}

/**
 * @param string $star
 * @return array
 */
function swe_fixstar2_mag(string $star): array {}

/**
 * @return null
 */
function swe_close() {}

/**
 * @param string|null $path
 * @return null
 */
function swe_set_ephe_path(?string $path = null) {}

/**
 * @param string $fname
 * @return null
 */
function swe_set_jpl_file(string $fname) {}

/**
 * @param int $ipl
 * @return string
 */
function swe_get_planet_name(int $ipl): string {}

/**
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @return null
 */
function swe_set_topo(double $geolon, double $geolat, double $geoalt) {}

/**
 * @param int $sid_mode
 * @param double $t0
 * @param double $ayan_t0
 * @return null
 */
function swe_set_sid_mode(int $sid_mode, double $t0, double $ayan_t0) {}

/**
 * @param double $tjd_et
 * @return double
 */
function swe_get_ayanamsa(double $tjd_et): double {}

/**
 * @param double $tjd_et
 * @param int $iflag
 * @return array
 */
function swe_get_ayanamsa_ex(double $tjd_et, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @return double
 */
function swe_get_ayanamsa_ut(double $tjd_ut): double {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_get_ayanamsa_ex_ut(double $tjd_ut, int $iflag): array {}

/**
 * @param int $isidmode
 * @return string
 */
function swe_get_ayanamsa_name(int $isidmode): string {}

/**
 * @return string
 */
function swe_version(): string {}

/**
 * @return string
 */
function swe_get_library_path(): string {}

/**
 * @param int $ifno
 * @return string|null
 */
function swe_get_current_file_data(int $ifno): ?string {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param double $hour
 * @param int $cal_flag
 * @return double|null
 */
function swe_date_conversion(int $year, int $month, int $day, double $hour, int $cal_flag): ?double {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param double $hour
 * @param int|null $gregflag
 * @return double
 */
function swe_julday(int $year, int $month, int $day, double $hour, ?int $gregflag = null): double {}

/**
 * @param double $jd
 * @param int|null $gregflag
 * @return array
 */
function swe_revjul(double $jd, ?int $gregflag = null): array {}

/**
 * @param double $tjd_et
 * @param int $gregflag
 * @return array
 */
function swe_jdet_to_utc(double $tjd_et, int $gregflag): array {}

/**
 * @param double $tjd_ut
 * @param int $gregflag
 * @return array
 */
function swe_jdut1_to_utc(double $tjd_ut, int $gregflag): array {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param int $hour
 * @param int $min
 * @param double $dsec
 * @param int $gregflag
 * @return array
 */
function swe_utc_to_jd(int $year, int $month, int $day, int $hour, int $min, double $dsec, int $gregflag): array {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param int $hour
 * @param int $min
 * @param double $dsec
 * @param double $d_timezone
 * @return array
 */
function swe_utc_time_zone(
    int $year,
    int $month,
    int $day,
    int $hour,
    int $min,
    double $dsec,
    double $d_timezone
): array {}

/**
 * @param double $tjd_ut
 * @param double $geolat
 * @param double $geolon
 * @param string $hsys
 * @return array
 */
function swe_houses(double $tjd_ut, double $geolat, double $geolon, string $hsys): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolat
 * @param double $geolon
 * @param string $hsys
 * @return array
 */
function swe_houses_ex(double $tjd_ut, int $iflag, double $geolat, double $geolon, string $hsys): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolat
 * @param double $geolon
 * @param string $hsys
 * @return array
 */
function swe_houses_ex2(double $tjd_ut, int $iflag, double $geolat, double $geolon, string $hsys): array {}

/**
 * @param double $armc
 * @param double $geolat
 * @param double $eps
 * @param string $hsys
 * @return array
 */
function swe_houses_armc(double $armc, double $geolat, double $eps, string $hsys): array {}

/**
 * @param double $armc
 * @param double $geolat
 * @param double $eps
 * @param string $hsys
 * @return array
 */
function swe_houses_armc_ex2(double $armc, double $geolat, double $eps, string $hsys): array {}

/**
 * @param double $armc
 * @param double $geolat
 * @param double $eps
 * @param string $hsys
 * @param double $xpin0
 * @param double $xpin1
 * @return double|string
 */
function swe_house_pos(
    double $armc,
    double $geolat,
    double $eps,
    string $hsys,
    double $xpin0,
    double $xpin1
): double|string {}

/**
 * @param string $hsys
 * @return string
 */
function swe_house_name(string $hsys): string {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $starname
 * @param int $iflag
 * @param int $imeth
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @return array
 */
function swe_gauquelin_sector(
    double $tjd_ut,
    int $ipl,
    string $starname,
    int $iflag,
    int $imeth,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp
): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_sol_eclipse_where(double $tjd_ut, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $star
 * @param int $iflag
 * @return array
 */
function swe_lun_occult_where(double $tjd_ut, int $ipl, string $star, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @return array
 */
function swe_sol_eclipse_how(double $tjd_ut, int $iflag, double $geolng, double $geolat, double $geoalt): array {}

/**
 * @param double $tjd_start
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @param int $backw
 * @return array
 */
function swe_sol_eclipse_when_loc(
    double $tjd_start,
    int $iflag,
    double $geolng,
    double $geolat,
    double $geoalt,
    int $backw
): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $star
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @param int $backw
 * @return array
 */
function swe_lun_occult_when_loc(
    double $tjd_ut,
    int $ipl,
    string $star,
    int $iflag,
    double $geolng,
    double $geolat,
    double $geoalt,
    int $backw
): array {}

/**
 * @param double $tjd_start
 * @param int $iflag
 * @param int $ifltype
 * @param int $backw
 * @return array
 */
function swe_sol_eclipse_when_glob(double $tjd_start, int $iflag, int $ifltype, int $backw): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $star
 * @param int $iflag
 * @param int $ifltype
 * @param int $backw
 * @return array
 */
function swe_lun_occult_when_glob(
    double $tjd_ut,
    int $ipl,
    string $star,
    int $iflag,
    int $ifltype,
    int $backw)
: array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @return array
 */
function swe_lun_eclipse_how(double $tjd_ut, int $iflag, double $geolng, double $geolat, double $geoalt): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param int $ifltype
 * @param int $backw
 * @return array
 */
function swe_lun_eclipse_when(double $tjd_ut, int $iflag, int $ifltype, int $backw): array {}

/**
 * @param double $tjd_start
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @param int $backw
 * @return array
 */
function swe_lun_eclipse_when_loc(
    double $tjd_start,
    int $iflag,
    double $geolng,
    double $geolat,
    double $geoalt,
    int $backw
): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_pheno(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_pheno_ut(double $tjd_ut, int $ipl, int $iflag): array {}

/**
 * @param double $inalt
 * @param double $atpress
 * @param double $attemp
 * @param int $calc_flag
 * @return double
 */
function swe_refrac(double $inalt, double $atpress, double $attemp, int $calc_flag): double {}

/**
 * @param double $inalt
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $lapse_rate
 * @param int $calc_flag
 * @return array
 */
function swe_refrac_extended(
    double $inalt,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $lapse_rate,
    int $calc_flag
): array {}

/**
 * @param double $tjdstart
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $athum
 * @param double $atuom
 * @param double $oage
 * @param double $oeyes
 * @param double $omono
 * @param double $ozoom
 * @param double $odia
 * @param double $otrans
 * @param string $objectname
 * @param int $event_type
 * @param int $helflag
 * @return array
 */
function swe_heliacal_ut(
    double $tjdstart,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $athum,
    double $atuom,
    double $oage,
    double $oeyes,
    double $omono,
    double $ozoom,
    double $odia,
    double $otrans,
    string $objectname,
    int $event_type,
    int $helflag
): array {}

/**
 * @param double $tjdstart
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $athum
 * @param double $atuom
 * @param double $oage
 * @param double $oeyes
 * @param double $omono
 * @param double $ozoom
 * @param double $odia
 * @param double $otrans
 * @param string $objectname
 * @param int $event_type
 * @param int $helflag
 * @return array
 */
function swe_heliacal_pheno_ut(
    double $tjdstart,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $athum,
    double $atuom,
    double $oage,
    double $oeyes,
    double $omono,
    double $ozoom,
    double $odia,
    double $otrans,
    string $objectname,
    int $event_type,
    int $helflag
): array {}

/**
 * @param double $tjdstart
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $athum
 * @param double $atuom
 * @param double $oage
 * @param double $oeyes
 * @param double $omono
 * @param double $ozoom
 * @param double $odia
 * @param double $otrans
 * @param string $objectname
 * @param int $helflag
 * @return array
 */
function swe_vis_limit_mag(
    double $tjdstart,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $athum,
    double $atuom,
    double $oage,
    double $oeyes,
    double $omono,
    double $ozoom,
    double $odia,
    double $otrans,
    string $objectname,
    int $helflag
): array {}

/**
 * @param double $tjd_ut
 * @param int $calc_flag
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $xin0
 * @param double $xin1
 * @return array
 */
function swe_azalt(
    double $tjd_ut,
    int $calc_flag,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $xin0,
    double $xin1
): array {}

/**
 * @param double $tjd_ut
 * @param int $calc_flag
 * @param double $lng
 * @param double $lat
 * @param double $alt
 * @param double $xin0
 * @param double $xin1
 * @return array
 */
function swe_azalt_rev(
    double $tjd_ut,
    int $calc_flag,
    double $lng,
    double $lat,
    double $alt,
    double $xin0,
    double $xin1
): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string|null $starname
 * @param int $epheflag
 * @param int $rsmi
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @return array
 */
function swe_rise_trans(
    double $tjd_ut,
    int $ipl,
    ?string $starname = null,
    int $epheflag,
    int $rsmi,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp
): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string|null $starname
 * @param int $epheflag
 * @param int $rsmi
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $horhgt
 * @return array
 */
function swe_rise_trans_true_hor(
    double $tjd_ut,
    int $ipl,
    ?string $starname = null,
    int $epheflag,
    int $rsmi,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $horhgt
): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @param int $method
 * @return array
 */
function swe_nod_aps(double $tjd_et, int $ipl, int $iflag, int $method): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param int $iflag
 * @param int $method
 * @return array
 */
function swe_nod_aps_ut(double $tjd_ut, int $ipl, int $iflag, int $method): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_get_orbital_elements(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_orbit_max_min_true_distance(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param float $tjd
 * @return float
 */
function swe_deltat(double $tjd): double {}

/**
 * @param float $tjd
 * @param int $ephe_flat
 * @return array
 */
function swe_deltat_ex(double $tjd, int $ephe_flat): array {}

/**
 * @param float $tjd_et
 * @return array
 */
function swe_time_equ(double $tjd_et): array {}

/**
 * @param float $tjd_lmt
 * @param float $geolon
 * @return array
 */
function swe_lmt_to_lat(double $tjd_lmt, double $geolon): array {}

/**
 * @param float $tjd_lat
 * @param float $geolon
 * @return array
 */
function swe_lat_to_lmt(double $tjd_lat, double $geolon): array {}

/**
 * @param float $tjd_ut
 * @param float $eps
 * @param float $nut
 * @return float
 */
function swe_sidtime0(double $tjd_ut, double $eps, double $nut): double {}

/**
 * @param float $tjd_ut
 * @return float
 */
function swe_sidtime(double $tjd_ut): double {}

/**
 * @param float $lng
 * @param float $lat
 * @param float $dist
 * @param float $eps
 * @return array
 */
function swe_cotrans(double $lng, double $lat, double $dist, double $eps): array {}

/**
 * @param float $lng
 * @param float $lat
 * @param float $dist
 * @param float $lngs
 * @param float $lats
 * @param float $dists
 * @param float $eps
 * @return array
 */
function swe_cotrans_sp(
    double $lng,
    double $lat,
    double $dist,
    double $lngs,
    double $lats,
    double $dists,
    double $eps
): array {}

/**
 * @return float
 */
function swe_get_tid_acc(): double {}

/**
 * @param float $t_acc
 * @return null
 */
function swe_set_tid_acc(double $t_acc) {}

/**
 * @param float $t_acc
 * @return null
 */
function swe_set_delta_t_userdef(double $t_acc) {}

/**
 * @param float $deg
 * @return float
 */
function swe_degnorm(double $deg): double {}

/**
 * @param float $rad
 * @return float
 */
function swe_radnorm(double $rad): double {}

/**
 * @param float $x1
 * @param float $x2
 * @return float
 */
function swe_rad_midp(double $x1, double $x2): double {}

/**
 * @param float $x1
 * @param float $x2
 * @return float
 */
function swe_deg_midp(double $x1, double $x2): double {}

/**
 * @param float $ddeg
 * @param int $roundflag
 * @return array
 */
function swe_split_deg(double $ddeg, int $roundflag): array {}

/**
 * @param int $p
 * @return int
 */
function swe_csnorm(int $p): int {}

/**
 * @param int $p1
 * @param int $p2
 * @return int
 */
function swe_difcsn(int $p1, int $p2): int {}

/**
 * @param float $p1
 * @param float $p2
 * @return float
 */
function swe_difdegn(double $p1, double $p2): double {}

/**
 * @param int $p1
 * @param int $p2
 * @return int
 */
function swe_difcs2n(int $p1, int $p2): int {}

/**
 * @param float $p1
 * @param float $p2
 * @return float
 */
function swe_difdeg2n(double $p1, double $p2): double {}

/**
 * @param float $p1
 * @param float $p2
 * @return float
 */
function swe_difrad2n(double $p1, double $p2): double {}

/**
 * @param int $x
 * @return int
 */
function swe_csroundsec(int $x): int {}

/**
 * @param float $x
 * @return float
 */
function swe_d2l(double $x): double {}

/**
 * @param float $jd
 * @return int
 */
function swe_day_of_week(double $jd): int {}

/**
 * @param int $t
 * @param int $sep
 * @param int $suppressZero
 * @return string
 */
function swe_cs2timestr(int $t, int $sep, int $suppressZero): string {}

/**
 * @param int $t
 * @param string $pchar
 * @param string $mchar
 * @return string
 */
function swe_cs2lonlatstr(int $t, string $pchar, string $mchar): string {}

/**
 * @param int $t
 * @return string
 */
function swe_cs2degstr(int $t): string {}
