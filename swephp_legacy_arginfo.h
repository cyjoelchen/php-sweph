/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: ea7a15504bfb6ab8fd7e544e3cc9396806c51f44 */

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

ZEND_BEGIN_ARG_INFO_EX(arginfo_swe_set_ephe_path, 0, 0, 1)
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
	ZEND_FE_END
};
