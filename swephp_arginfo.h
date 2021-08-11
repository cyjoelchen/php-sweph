/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 5023e53ce38d952a6297e3335e6c5caf871f11c2 */

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_calc, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, ipl, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_swe_calc_ut arginfo_swe_calc

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_calc_pctr, 0, 4, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, ipl, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, iplctr, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_solcross, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, x2cross, double, 0)
	ZEND_ARG_OBJ_INFO(0, jd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_solcross_ut, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, x2cross, double, 0)
	ZEND_ARG_OBJ_INFO(0, jd_ut, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_swe_mooncross arginfo_swe_solcross

#define arginfo_swe_mooncross_ut arginfo_swe_solcross_ut

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_mooncross_node, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, jd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_mooncross_node_ut, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, jd_ut, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_helio_cross, 0, 5, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, ipl, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, x2cross, double, 0)
	ZEND_ARG_OBJ_INFO(0, jd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, dir, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_helio_cross_ut, 0, 5, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, ipl, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, x2cross, double, 0)
	ZEND_ARG_OBJ_INFO(0, jd_ut, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, dir, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_fixstar, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, star, IS_STRING, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_swe_fixstar2 arginfo_swe_fixstar

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_fixstar_ut, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, star, IS_STRING, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_ut, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_swe_fixstar2_ut arginfo_swe_fixstar_ut

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_fixstar_mag, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, star, IS_STRING, 0)
ZEND_END_ARG_INFO()

#define arginfo_swe_fixstar2_mag arginfo_swe_fixstar_mag

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_close, 0, 0, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_ephe_path, 0, 0, 1)
	ZEND_ARG_TYPE_INFO(0, path, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_jpl_file, 0, 0, 1)
	ZEND_ARG_TYPE_INFO(0, fname, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_get_planet_name, 0, 1, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, ipl, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_topo, 0, 0, 3)
	ZEND_ARG_OBJ_INFO(0, geolon, double, 0)
	ZEND_ARG_OBJ_INFO(0, geolat, double, 0)
	ZEND_ARG_OBJ_INFO(0, geoalt, double, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_sid_mode, 0, 0, 3)
	ZEND_ARG_TYPE_INFO(0, sid_mode, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, t0, double, 0)
	ZEND_ARG_OBJ_INFO(0, ayan_t0, double, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_swe_get_ayanamsa, 0, 1, double, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_et, double, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_get_ayanamsa_ex, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_swe_get_ayanamsa_ut, 0, 1, double, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_ut, double, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_get_ayanamsa_ex_ut, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_ut, double, 0)
	ZEND_ARG_TYPE_INFO(0, iflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_get_ayanamsa_name, 0, 1, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, isidmode, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_version, 0, 0, IS_STRING, 0)
ZEND_END_ARG_INFO()

#define arginfo_swe_get_library_path arginfo_swe_version

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_get_current_file_data, 0, 1, IS_STRING, 1)
	ZEND_ARG_TYPE_INFO(0, ifno, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_swe_date_conversion, 0, 5, double, 1)
	ZEND_ARG_TYPE_INFO(0, year, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, month, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, day, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, hour, double, 0)
	ZEND_ARG_TYPE_INFO(0, cal_flag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_swe_julday, 0, 5, double, 0)
	ZEND_ARG_TYPE_INFO(0, year, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, month, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, day, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, hour, double, 0)
	ZEND_ARG_TYPE_INFO(0, gregflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_revjul, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, jd, double, 0)
	ZEND_ARG_TYPE_INFO(0, gregflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_jdet_to_utc, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_et, double, 0)
	ZEND_ARG_TYPE_INFO(0, gregflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_jdut1_to_utc, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_OBJ_INFO(0, tjd_ut, double, 0)
	ZEND_ARG_TYPE_INFO(0, gregflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_utc_to_jd, 0, 7, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, year, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, month, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, day, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, hour, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, min, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, dsec, double, 0)
	ZEND_ARG_TYPE_INFO(0, gregflag, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_swe_utc_time_zone, 0, 7, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, year, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, month, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, day, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, hour, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, min, IS_LONG, 0)
	ZEND_ARG_OBJ_INFO(0, dsec, double, 0)
	ZEND_ARG_OBJ_INFO(0, d_timezone, double, 0)
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
	ZEND_FE_END
};
