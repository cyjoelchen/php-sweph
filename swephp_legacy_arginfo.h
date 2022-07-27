/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: c15625c090d886fe9ba224131e4ea0ea8e868f6f */

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_calc, 0, 0, 3)
	ZEND_ARG_INFO(0, tjd_et)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

#define arginfo_swe_calc_ut arginfo_swe_calc

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_calc_pctr, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_et)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, iplctr)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_solcross, 0, 0, 3)
	ZEND_ARG_INFO(0, x2cross)
	ZEND_ARG_INFO(0, jd_et)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_solcross_ut, 0, 0, 3)
	ZEND_ARG_INFO(0, x2cross)
	ZEND_ARG_INFO(0, jd_ut)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

#define arginfo_swe_mooncross arginfo_swe_solcross

#define arginfo_swe_mooncross_ut arginfo_swe_solcross_ut

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_mooncross_node, 0, 0, 2)
	ZEND_ARG_INFO(0, jd_et)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_mooncross_node_ut, 0, 0, 2)
	ZEND_ARG_INFO(0, jd_ut)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_helio_cross, 0, 0, 5)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, x2cross)
	ZEND_ARG_INFO(0, jd_et)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, dir)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_helio_cross_ut, 0, 0, 5)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, x2cross)
	ZEND_ARG_INFO(0, jd_ut)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, dir)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_fixstar, 0, 0, 3)
	ZEND_ARG_INFO(0, star)
	ZEND_ARG_INFO(0, tjd_et)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

#define arginfo_swe_fixstar2 arginfo_swe_fixstar

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_fixstar_ut, 0, 0, 3)
	ZEND_ARG_INFO(0, star)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

#define arginfo_swe_fixstar2_ut arginfo_swe_fixstar_ut

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_fixstar_mag, 0, 0, 1)
	ZEND_ARG_INFO(0, star)
ZEND_END_ARG_INFO()

#define arginfo_swe_fixstar2_mag arginfo_swe_fixstar_mag

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_close, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_ephe_path, 0, 0, 0)
	ZEND_ARG_INFO(0, path)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_jpl_file, 0, 0, 1)
	ZEND_ARG_INFO(0, fname)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_planet_name, 0, 0, 1)
	ZEND_ARG_INFO(0, ipl)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_topo, 0, 0, 3)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_sid_mode, 0, 0, 3)
	ZEND_ARG_INFO(0, sid_mode)
	ZEND_ARG_INFO(0, t0)
	ZEND_ARG_INFO(0, ayan_t0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_ayanamsa, 0, 0, 1)
	ZEND_ARG_INFO(0, tjd_et)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_ayanamsa_ex, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd_et)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_ayanamsa_ut, 0, 0, 1)
	ZEND_ARG_INFO(0, tjd_ut)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_ayanamsa_ex_ut, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_ayanamsa_name, 0, 0, 1)
	ZEND_ARG_INFO(0, isidmode)
ZEND_END_ARG_INFO()

#define arginfo_swe_version arginfo_swe_close

#define arginfo_swe_get_library_path arginfo_swe_close

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_get_current_file_data, 0, 0, 1)
	ZEND_ARG_INFO(0, ifno)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_date_conversion, 0, 0, 5)
	ZEND_ARG_INFO(0, year)
	ZEND_ARG_INFO(0, month)
	ZEND_ARG_INFO(0, day)
	ZEND_ARG_INFO(0, hour)
	ZEND_ARG_INFO(0, cal_flag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_julday, 0, 0, 4)
	ZEND_ARG_INFO(0, year)
	ZEND_ARG_INFO(0, month)
	ZEND_ARG_INFO(0, day)
	ZEND_ARG_INFO(0, hour)
	ZEND_ARG_INFO(0, gregflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_revjul, 0, 0, 1)
	ZEND_ARG_INFO(0, jd)
	ZEND_ARG_INFO(0, gregflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_jdet_to_utc, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd_et)
	ZEND_ARG_INFO(0, gregflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_jdut1_to_utc, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, gregflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_utc_to_jd, 0, 0, 7)
	ZEND_ARG_INFO(0, year)
	ZEND_ARG_INFO(0, month)
	ZEND_ARG_INFO(0, day)
	ZEND_ARG_INFO(0, hour)
	ZEND_ARG_INFO(0, min)
	ZEND_ARG_INFO(0, dsec)
	ZEND_ARG_INFO(0, gregflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_utc_time_zone, 0, 0, 7)
	ZEND_ARG_INFO(0, year)
	ZEND_ARG_INFO(0, month)
	ZEND_ARG_INFO(0, day)
	ZEND_ARG_INFO(0, hour)
	ZEND_ARG_INFO(0, min)
	ZEND_ARG_INFO(0, dsec)
	ZEND_ARG_INFO(0, d_timezone)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_houses, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, hsys)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_houses_ex, 0, 0, 5)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, hsys)
ZEND_END_ARG_INFO()

#define arginfo_swe_houses_ex2 arginfo_swe_houses_ex

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_houses_armc, 0, 0, 4)
	ZEND_ARG_INFO(0, armc)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, eps)
	ZEND_ARG_INFO(0, hsys)
ZEND_END_ARG_INFO()

#define arginfo_swe_houses_armc_ex2 arginfo_swe_houses_armc

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_house_pos, 0, 0, 6)
	ZEND_ARG_INFO(0, armc)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, eps)
	ZEND_ARG_INFO(0, hsys)
	ZEND_ARG_INFO(0, xpin0)
	ZEND_ARG_INFO(0, xpin1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_house_name, 0, 0, 1)
	ZEND_ARG_INFO(0, hsys)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_gauquelin_sector, 0, 0, 10)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, starname)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, imeth)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
ZEND_END_ARG_INFO()

#define arginfo_swe_sol_eclipse_where arginfo_swe_get_ayanamsa_ex_ut

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_lun_occult_where, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, star)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_sol_eclipse_how, 0, 0, 5)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, geolng)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_sol_eclipse_when_loc, 0, 0, 6)
	ZEND_ARG_INFO(0, tjd_start)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, geolng)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, backw)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_lun_occult_when_loc, 0, 0, 8)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, star)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, geolng)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, backw)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_sol_eclipse_when_glob, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_start)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, ifltype)
	ZEND_ARG_INFO(0, backw)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_lun_occult_when_glob, 0, 0, 6)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, star)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, ifltype)
	ZEND_ARG_INFO(0, backw)
ZEND_END_ARG_INFO()

#define arginfo_swe_lun_eclipse_how arginfo_swe_sol_eclipse_how

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_lun_eclipse_when, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, ifltype)
	ZEND_ARG_INFO(0, backw)
ZEND_END_ARG_INFO()

#define arginfo_swe_lun_eclipse_when_loc arginfo_swe_sol_eclipse_when_loc

#define arginfo_swe_pheno arginfo_swe_calc

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_pheno_ut, 0, 0, 3)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, iflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_refrac, 0, 0, 4)
	ZEND_ARG_INFO(0, inalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
	ZEND_ARG_INFO(0, calc_flag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_refrac_extended, 0, 0, 6)
	ZEND_ARG_INFO(0, inalt)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
	ZEND_ARG_INFO(0, lapse_rate)
	ZEND_ARG_INFO(0, calc_flag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_heliacal_ut, 0, 0, 17)
	ZEND_ARG_INFO(0, tjdstart)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
	ZEND_ARG_INFO(0, athum)
	ZEND_ARG_INFO(0, atuom)
	ZEND_ARG_INFO(0, oage)
	ZEND_ARG_INFO(0, oeyes)
	ZEND_ARG_INFO(0, omono)
	ZEND_ARG_INFO(0, ozoom)
	ZEND_ARG_INFO(0, odia)
	ZEND_ARG_INFO(0, otrans)
	ZEND_ARG_INFO(0, objectname)
	ZEND_ARG_INFO(0, event_type)
	ZEND_ARG_INFO(0, helflag)
ZEND_END_ARG_INFO()

#define arginfo_swe_heliacal_pheno_ut arginfo_swe_heliacal_ut

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_vis_limit_mag, 0, 0, 16)
	ZEND_ARG_INFO(0, tjdstart)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
	ZEND_ARG_INFO(0, athum)
	ZEND_ARG_INFO(0, atuom)
	ZEND_ARG_INFO(0, oage)
	ZEND_ARG_INFO(0, oeyes)
	ZEND_ARG_INFO(0, omono)
	ZEND_ARG_INFO(0, ozoom)
	ZEND_ARG_INFO(0, odia)
	ZEND_ARG_INFO(0, otrans)
	ZEND_ARG_INFO(0, objectname)
	ZEND_ARG_INFO(0, helflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_azalt, 0, 0, 9)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, calc_flag)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
	ZEND_ARG_INFO(0, xin0)
	ZEND_ARG_INFO(0, xin1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_azalt_rev, 0, 0, 7)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, calc_flag)
	ZEND_ARG_INFO(0, lng)
	ZEND_ARG_INFO(0, lat)
	ZEND_ARG_INFO(0, alt)
	ZEND_ARG_INFO(0, xin0)
	ZEND_ARG_INFO(0, xin1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_rise_trans, 0, 0, 10)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, starname)
	ZEND_ARG_INFO(0, epheflag)
	ZEND_ARG_INFO(0, rsmi)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_rise_trans_true_hor, 0, 0, 11)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, starname)
	ZEND_ARG_INFO(0, epheflag)
	ZEND_ARG_INFO(0, rsmi)
	ZEND_ARG_INFO(0, geolon)
	ZEND_ARG_INFO(0, geolat)
	ZEND_ARG_INFO(0, geoalt)
	ZEND_ARG_INFO(0, atpress)
	ZEND_ARG_INFO(0, attemp)
	ZEND_ARG_INFO(0, horhgt)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_nod_aps, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_et)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, method)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_nod_aps_ut, 0, 0, 4)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, ipl)
	ZEND_ARG_INFO(0, iflag)
	ZEND_ARG_INFO(0, method)
ZEND_END_ARG_INFO()

#define arginfo_swe_get_orbital_elements arginfo_swe_calc

#define arginfo_swe_orbit_max_min_true_distance arginfo_swe_calc

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_deltat, 0, 0, 1)
	ZEND_ARG_INFO(0, tjd)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_deltat_ex, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd)
	ZEND_ARG_INFO(0, ephe_flat)
ZEND_END_ARG_INFO()

#define arginfo_swe_time_equ arginfo_swe_get_ayanamsa

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_lmt_to_lat, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd_lmt)
	ZEND_ARG_INFO(0, geolon)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_lat_to_lmt, 0, 0, 2)
	ZEND_ARG_INFO(0, tjd_lat)
	ZEND_ARG_INFO(0, geolon)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_sidtime0, 0, 0, 3)
	ZEND_ARG_INFO(0, tjd_ut)
	ZEND_ARG_INFO(0, eps)
	ZEND_ARG_INFO(0, nut)
ZEND_END_ARG_INFO()

#define arginfo_swe_sidtime arginfo_swe_get_ayanamsa_ut

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_cotrans, 0, 0, 4)
	ZEND_ARG_INFO(0, lng)
	ZEND_ARG_INFO(0, lat)
	ZEND_ARG_INFO(0, dist)
	ZEND_ARG_INFO(0, eps)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_cotrans_sp, 0, 0, 7)
	ZEND_ARG_INFO(0, lng)
	ZEND_ARG_INFO(0, lat)
	ZEND_ARG_INFO(0, dist)
	ZEND_ARG_INFO(0, lngs)
	ZEND_ARG_INFO(0, lats)
	ZEND_ARG_INFO(0, dists)
	ZEND_ARG_INFO(0, eps)
ZEND_END_ARG_INFO()

#define arginfo_swe_get_tid_acc arginfo_swe_close

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_tid_acc, 0, 0, 1)
	ZEND_ARG_INFO(0, t_acc)
ZEND_END_ARG_INFO()

#define arginfo_swe_set_delta_t_userdef arginfo_swe_set_tid_acc

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_degnorm, 0, 0, 1)
	ZEND_ARG_INFO(0, deg)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_radnorm, 0, 0, 1)
	ZEND_ARG_INFO(0, rad)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_rad_midp, 0, 0, 2)
	ZEND_ARG_INFO(0, x1)
	ZEND_ARG_INFO(0, x2)
ZEND_END_ARG_INFO()

#define arginfo_swe_deg_midp arginfo_swe_rad_midp

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_split_deg, 0, 0, 2)
	ZEND_ARG_INFO(0, ddeg)
	ZEND_ARG_INFO(0, roundflag)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_csnorm, 0, 0, 1)
	ZEND_ARG_INFO(0, p)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_difcsn, 0, 0, 2)
	ZEND_ARG_INFO(0, p1)
	ZEND_ARG_INFO(0, p2)
ZEND_END_ARG_INFO()

#define arginfo_swe_difdegn arginfo_swe_difcsn

#define arginfo_swe_difcs2n arginfo_swe_difcsn

#define arginfo_swe_difdeg2n arginfo_swe_difcsn

#define arginfo_swe_difrad2n arginfo_swe_difcsn

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_csroundsec, 0, 0, 1)
	ZEND_ARG_INFO(0, x)
ZEND_END_ARG_INFO()

#define arginfo_swe_d2l arginfo_swe_csroundsec

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_day_of_week, 0, 0, 1)
	ZEND_ARG_INFO(0, jd)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_cs2timestr, 0, 0, 3)
	ZEND_ARG_INFO(0, t)
	ZEND_ARG_INFO(0, sep)
	ZEND_ARG_INFO(0, suppressZero)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_cs2lonlatstr, 0, 0, 3)
	ZEND_ARG_INFO(0, t)
	ZEND_ARG_INFO(0, pchar)
	ZEND_ARG_INFO(0, mchar)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_cs2degstr, 0, 0, 1)
	ZEND_ARG_INFO(0, t)
ZEND_END_ARG_INFO()


ZEND_FUNCTION(swe_calc);
ZEND_FUNCTION(swe_calc_ut);
ZEND_FUNCTION(swe_calc_pctr);
ZEND_FUNCTION(swe_solcross);
ZEND_FUNCTION(swe_solcross_ut);
ZEND_FUNCTION(swe_mooncross);
ZEND_FUNCTION(swe_mooncross_ut);
ZEND_FUNCTION(swe_mooncross_node);
ZEND_FUNCTION(swe_mooncross_node_ut);
ZEND_FUNCTION(swe_helio_cross);
ZEND_FUNCTION(swe_helio_cross_ut);
ZEND_FUNCTION(swe_fixstar);
ZEND_FUNCTION(swe_fixstar2);
ZEND_FUNCTION(swe_fixstar_ut);
ZEND_FUNCTION(swe_fixstar2_ut);
ZEND_FUNCTION(swe_fixstar_mag);
ZEND_FUNCTION(swe_fixstar2_mag);
ZEND_FUNCTION(swe_close);
ZEND_FUNCTION(swe_set_ephe_path);
ZEND_FUNCTION(swe_set_jpl_file);
ZEND_FUNCTION(swe_get_planet_name);
ZEND_FUNCTION(swe_set_topo);
ZEND_FUNCTION(swe_set_sid_mode);
ZEND_FUNCTION(swe_get_ayanamsa);
ZEND_FUNCTION(swe_get_ayanamsa_ex);
ZEND_FUNCTION(swe_get_ayanamsa_ut);
ZEND_FUNCTION(swe_get_ayanamsa_ex_ut);
ZEND_FUNCTION(swe_get_ayanamsa_name);
ZEND_FUNCTION(swe_version);
ZEND_FUNCTION(swe_get_library_path);
ZEND_FUNCTION(swe_get_current_file_data);
ZEND_FUNCTION(swe_date_conversion);
ZEND_FUNCTION(swe_julday);
ZEND_FUNCTION(swe_revjul);
ZEND_FUNCTION(swe_jdet_to_utc);
ZEND_FUNCTION(swe_jdut1_to_utc);
ZEND_FUNCTION(swe_utc_to_jd);
ZEND_FUNCTION(swe_utc_time_zone);
ZEND_FUNCTION(swe_houses);
ZEND_FUNCTION(swe_houses_ex);
ZEND_FUNCTION(swe_houses_ex2);
ZEND_FUNCTION(swe_houses_armc);
ZEND_FUNCTION(swe_houses_armc_ex2);
ZEND_FUNCTION(swe_house_pos);
ZEND_FUNCTION(swe_house_name);
ZEND_FUNCTION(swe_gauquelin_sector);
ZEND_FUNCTION(swe_sol_eclipse_where);
ZEND_FUNCTION(swe_lun_occult_where);
ZEND_FUNCTION(swe_sol_eclipse_how);
ZEND_FUNCTION(swe_sol_eclipse_when_loc);
ZEND_FUNCTION(swe_lun_occult_when_loc);
ZEND_FUNCTION(swe_sol_eclipse_when_glob);
ZEND_FUNCTION(swe_lun_occult_when_glob);
ZEND_FUNCTION(swe_lun_eclipse_how);
ZEND_FUNCTION(swe_lun_eclipse_when);
ZEND_FUNCTION(swe_lun_eclipse_when_loc);
ZEND_FUNCTION(swe_pheno);
ZEND_FUNCTION(swe_pheno_ut);
ZEND_FUNCTION(swe_refrac);
ZEND_FUNCTION(swe_refrac_extended);
ZEND_FUNCTION(swe_heliacal_ut);
ZEND_FUNCTION(swe_heliacal_pheno_ut);
ZEND_FUNCTION(swe_vis_limit_mag);
ZEND_FUNCTION(swe_azalt);
ZEND_FUNCTION(swe_azalt_rev);
ZEND_FUNCTION(swe_rise_trans);
ZEND_FUNCTION(swe_rise_trans_true_hor);
ZEND_FUNCTION(swe_nod_aps);
ZEND_FUNCTION(swe_nod_aps_ut);
ZEND_FUNCTION(swe_get_orbital_elements);
ZEND_FUNCTION(swe_orbit_max_min_true_distance);
ZEND_FUNCTION(swe_deltat);
ZEND_FUNCTION(swe_deltat_ex);
ZEND_FUNCTION(swe_time_equ);
ZEND_FUNCTION(swe_lmt_to_lat);
ZEND_FUNCTION(swe_lat_to_lmt);
ZEND_FUNCTION(swe_sidtime0);
ZEND_FUNCTION(swe_sidtime);
ZEND_FUNCTION(swe_cotrans);
ZEND_FUNCTION(swe_cotrans_sp);
ZEND_FUNCTION(swe_get_tid_acc);
ZEND_FUNCTION(swe_set_tid_acc);
ZEND_FUNCTION(swe_set_delta_t_userdef);
ZEND_FUNCTION(swe_degnorm);
ZEND_FUNCTION(swe_radnorm);
ZEND_FUNCTION(swe_rad_midp);
ZEND_FUNCTION(swe_deg_midp);
ZEND_FUNCTION(swe_split_deg);
ZEND_FUNCTION(swe_csnorm);
ZEND_FUNCTION(swe_difcsn);
ZEND_FUNCTION(swe_difdegn);
ZEND_FUNCTION(swe_difcs2n);
ZEND_FUNCTION(swe_difdeg2n);
ZEND_FUNCTION(swe_difrad2n);
ZEND_FUNCTION(swe_csroundsec);
ZEND_FUNCTION(swe_d2l);
ZEND_FUNCTION(swe_day_of_week);
ZEND_FUNCTION(swe_cs2timestr);
ZEND_FUNCTION(swe_cs2lonlatstr);
ZEND_FUNCTION(swe_cs2degstr);


static const zend_function_entry ext_functions[] = {
	ZEND_FE(swe_calc, arginfo_swe_calc)
	ZEND_FE(swe_calc_ut, arginfo_swe_calc_ut)
	ZEND_FE(swe_calc_pctr, arginfo_swe_calc_pctr)
	ZEND_FE(swe_solcross, arginfo_swe_solcross)
	ZEND_FE(swe_solcross_ut, arginfo_swe_solcross_ut)
	ZEND_FE(swe_mooncross, arginfo_swe_mooncross)
	ZEND_FE(swe_mooncross_ut, arginfo_swe_mooncross_ut)
	ZEND_FE(swe_mooncross_node, arginfo_swe_mooncross_node)
	ZEND_FE(swe_mooncross_node_ut, arginfo_swe_mooncross_node_ut)
	ZEND_FE(swe_helio_cross, arginfo_swe_helio_cross)
	ZEND_FE(swe_helio_cross_ut, arginfo_swe_helio_cross_ut)
	ZEND_FE(swe_fixstar, arginfo_swe_fixstar)
	ZEND_FE(swe_fixstar2, arginfo_swe_fixstar2)
	ZEND_FE(swe_fixstar_ut, arginfo_swe_fixstar_ut)
	ZEND_FE(swe_fixstar2_ut, arginfo_swe_fixstar2_ut)
	ZEND_FE(swe_fixstar_mag, arginfo_swe_fixstar_mag)
	ZEND_FE(swe_fixstar2_mag, arginfo_swe_fixstar2_mag)
	ZEND_FE(swe_close, arginfo_swe_close)
	ZEND_FE(swe_set_ephe_path, arginfo_swe_set_ephe_path)
	ZEND_FE(swe_set_jpl_file, arginfo_swe_set_jpl_file)
	ZEND_FE(swe_get_planet_name, arginfo_swe_get_planet_name)
	ZEND_FE(swe_set_topo, arginfo_swe_set_topo)
	ZEND_FE(swe_set_sid_mode, arginfo_swe_set_sid_mode)
	ZEND_FE(swe_get_ayanamsa, arginfo_swe_get_ayanamsa)
	ZEND_FE(swe_get_ayanamsa_ex, arginfo_swe_get_ayanamsa_ex)
	ZEND_FE(swe_get_ayanamsa_ut, arginfo_swe_get_ayanamsa_ut)
	ZEND_FE(swe_get_ayanamsa_ex_ut, arginfo_swe_get_ayanamsa_ex_ut)
	ZEND_FE(swe_get_ayanamsa_name, arginfo_swe_get_ayanamsa_name)
	ZEND_FE(swe_version, arginfo_swe_version)
	ZEND_FE(swe_get_library_path, arginfo_swe_get_library_path)
	ZEND_FE(swe_get_current_file_data, arginfo_swe_get_current_file_data)
	ZEND_FE(swe_date_conversion, arginfo_swe_date_conversion)
	ZEND_FE(swe_julday, arginfo_swe_julday)
	ZEND_FE(swe_revjul, arginfo_swe_revjul)
	ZEND_FE(swe_jdet_to_utc, arginfo_swe_jdet_to_utc)
	ZEND_FE(swe_jdut1_to_utc, arginfo_swe_jdut1_to_utc)
	ZEND_FE(swe_utc_to_jd, arginfo_swe_utc_to_jd)
	ZEND_FE(swe_utc_time_zone, arginfo_swe_utc_time_zone)
	ZEND_FE(swe_houses, arginfo_swe_houses)
	ZEND_FE(swe_houses_ex, arginfo_swe_houses_ex)
	ZEND_FE(swe_houses_ex2, arginfo_swe_houses_ex2)
	ZEND_FE(swe_houses_armc, arginfo_swe_houses_armc)
	ZEND_FE(swe_houses_armc_ex2, arginfo_swe_houses_armc_ex2)
	ZEND_FE(swe_house_pos, arginfo_swe_house_pos)
	ZEND_FE(swe_house_name, arginfo_swe_house_name)
	ZEND_FE(swe_gauquelin_sector, arginfo_swe_gauquelin_sector)
	ZEND_FE(swe_sol_eclipse_where, arginfo_swe_sol_eclipse_where)
	ZEND_FE(swe_lun_occult_where, arginfo_swe_lun_occult_where)
	ZEND_FE(swe_sol_eclipse_how, arginfo_swe_sol_eclipse_how)
	ZEND_FE(swe_sol_eclipse_when_loc, arginfo_swe_sol_eclipse_when_loc)
	ZEND_FE(swe_lun_occult_when_loc, arginfo_swe_lun_occult_when_loc)
	ZEND_FE(swe_sol_eclipse_when_glob, arginfo_swe_sol_eclipse_when_glob)
	ZEND_FE(swe_lun_occult_when_glob, arginfo_swe_lun_occult_when_glob)
	ZEND_FE(swe_lun_eclipse_how, arginfo_swe_lun_eclipse_how)
	ZEND_FE(swe_lun_eclipse_when, arginfo_swe_lun_eclipse_when)
	ZEND_FE(swe_lun_eclipse_when_loc, arginfo_swe_lun_eclipse_when_loc)
	ZEND_FE(swe_pheno, arginfo_swe_pheno)
	ZEND_FE(swe_pheno_ut, arginfo_swe_pheno_ut)
	ZEND_FE(swe_refrac, arginfo_swe_refrac)
	ZEND_FE(swe_refrac_extended, arginfo_swe_refrac_extended)
	ZEND_FE(swe_heliacal_ut, arginfo_swe_heliacal_ut)
	ZEND_FE(swe_heliacal_pheno_ut, arginfo_swe_heliacal_pheno_ut)
	ZEND_FE(swe_vis_limit_mag, arginfo_swe_vis_limit_mag)
	ZEND_FE(swe_azalt, arginfo_swe_azalt)
	ZEND_FE(swe_azalt_rev, arginfo_swe_azalt_rev)
	ZEND_FE(swe_rise_trans, arginfo_swe_rise_trans)
	ZEND_FE(swe_rise_trans_true_hor, arginfo_swe_rise_trans_true_hor)
	ZEND_FE(swe_nod_aps, arginfo_swe_nod_aps)
	ZEND_FE(swe_nod_aps_ut, arginfo_swe_nod_aps_ut)
	ZEND_FE(swe_get_orbital_elements, arginfo_swe_get_orbital_elements)
	ZEND_FE(swe_orbit_max_min_true_distance, arginfo_swe_orbit_max_min_true_distance)
	ZEND_FE(swe_deltat, arginfo_swe_deltat)
	ZEND_FE(swe_deltat_ex, arginfo_swe_deltat_ex)
	ZEND_FE(swe_time_equ, arginfo_swe_time_equ)
	ZEND_FE(swe_lmt_to_lat, arginfo_swe_lmt_to_lat)
	ZEND_FE(swe_lat_to_lmt, arginfo_swe_lat_to_lmt)
	ZEND_FE(swe_sidtime0, arginfo_swe_sidtime0)
	ZEND_FE(swe_sidtime, arginfo_swe_sidtime)
	ZEND_FE(swe_cotrans, arginfo_swe_cotrans)
	ZEND_FE(swe_cotrans_sp, arginfo_swe_cotrans_sp)
	ZEND_FE(swe_get_tid_acc, arginfo_swe_get_tid_acc)
	ZEND_FE(swe_set_tid_acc, arginfo_swe_set_tid_acc)
	ZEND_FE(swe_set_delta_t_userdef, arginfo_swe_set_delta_t_userdef)
	ZEND_FE(swe_degnorm, arginfo_swe_degnorm)
	ZEND_FE(swe_radnorm, arginfo_swe_radnorm)
	ZEND_FE(swe_rad_midp, arginfo_swe_rad_midp)
	ZEND_FE(swe_deg_midp, arginfo_swe_deg_midp)
	ZEND_FE(swe_split_deg, arginfo_swe_split_deg)
	ZEND_FE(swe_csnorm, arginfo_swe_csnorm)
	ZEND_FE(swe_difcsn, arginfo_swe_difcsn)
	ZEND_FE(swe_difdegn, arginfo_swe_difdegn)
	ZEND_FE(swe_difcs2n, arginfo_swe_difcs2n)
	ZEND_FE(swe_difdeg2n, arginfo_swe_difdeg2n)
	ZEND_FE(swe_difrad2n, arginfo_swe_difrad2n)
	ZEND_FE(swe_csroundsec, arginfo_swe_csroundsec)
	ZEND_FE(swe_d2l, arginfo_swe_d2l)
	ZEND_FE(swe_day_of_week, arginfo_swe_day_of_week)
	ZEND_FE(swe_cs2timestr, arginfo_swe_cs2timestr)
	ZEND_FE(swe_cs2lonlatstr, arginfo_swe_cs2lonlatstr)
	ZEND_FE(swe_cs2degstr, arginfo_swe_cs2degstr)
	ZEND_FE_END
};
