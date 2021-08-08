/*
  +----------------------------------------------------------------------+
  | PHP Version 7 Swiss Ephemeris extension                              |
  +----------------------------------------------------------------------+
  | Copyright (c) 2007-2021                                              |
  +----------------------------------------------------------------------+
  | Author: Joel Chen                                                    |
  | Contributor: Alois Treindl
  +----------------------------------------------------------------------+
*/

#ifndef PHP_SWEPH_H
#define PHP_SWEPH_H

extern zend_module_entry swephp_module_entry;
#define phpext_swephp_ptr &swephp_module_entry

#ifdef PHP_WIN32
#define PHP_SWEPH_API __declspec(dllexport)
#else
#define PHP_SWEPH_API
#endif

#ifdef ZTS
#include "TSRM.h"
#endif

PHP_MINIT_FUNCTION(swephp);
PHP_MSHUTDOWN_FUNCTION(swephp);
PHP_RINIT_FUNCTION(swephp);
PHP_RSHUTDOWN_FUNCTION(swephp);
PHP_MINFO_FUNCTION(swephp);

/* Joel - sweph functions */

/**************************** 
 * exports from sweph.c 
 ****************************/
PHP_FUNCTION(swe_calc);
PHP_FUNCTION(swe_calc_ut);
PHP_FUNCTION(swe_calc_pctr);
PHP_FUNCTION(swe_solcross);
PHP_FUNCTION(swe_solcross_ut);
PHP_FUNCTION(swe_mooncross);
PHP_FUNCTION(swe_mooncross_ut);
PHP_FUNCTION(swe_mooncross_node);
PHP_FUNCTION(swe_mooncross_node_ut);
PHP_FUNCTION(swe_helio_cross);
PHP_FUNCTION(swe_helio_cross_ut);
PHP_FUNCTION(swe_fixstar);
PHP_FUNCTION(swe_fixstar_ut);
PHP_FUNCTION(swe_fixstar_mag);
PHP_FUNCTION(swe_fixstar2);
PHP_FUNCTION(swe_fixstar2_ut);
PHP_FUNCTION(swe_fixstar2_mag);
PHP_FUNCTION(swe_close);
PHP_FUNCTION(swe_set_ephe_path);
PHP_FUNCTION(swe_set_jpl_file);
PHP_FUNCTION(swe_get_planet_name);
PHP_FUNCTION(swe_set_topo);
PHP_FUNCTION(swe_set_sid_mode);
PHP_FUNCTION(swe_get_ayanamsa);
PHP_FUNCTION(swe_get_ayanamsa_ut);
PHP_FUNCTION(swe_get_ayanamsa_ex);
PHP_FUNCTION(swe_get_ayanamsa_ex_ut);
PHP_FUNCTION(swe_get_ayanamsa_name);
PHP_FUNCTION(swe_version);
PHP_FUNCTION(swe_get_library_path);
PHP_FUNCTION(swe_get_current_file_data);

/**************************** 
 * exports from swedate.c 
 ****************************/
PHP_FUNCTION(swe_date_conversion);
PHP_FUNCTION(swe_julday);
PHP_FUNCTION(swe_revjul);
PHP_FUNCTION(swe_jdet_to_utc);
PHP_FUNCTION(swe_jdut1_to_utc);
PHP_FUNCTION(swe_utc_to_jd);
PHP_FUNCTION(swe_utc_time_zone);


/**************************** 
 * exports from swehouse.c 
 ****************************/
PHP_FUNCTION(swe_houses);
PHP_FUNCTION(swe_houses_ex);
PHP_FUNCTION(swe_houses_ex2);
PHP_FUNCTION(swe_houses_armc);
PHP_FUNCTION(swe_houses_armc_ex2);
PHP_FUNCTION(swe_house_pos);
PHP_FUNCTION(swe_gauquelin_sector);
PHP_FUNCTION(swe_house_name);

/**************************** 
 * exports from swecl.c 
 ****************************/

PHP_FUNCTION(swe_sol_eclipse_where);
PHP_FUNCTION(swe_lun_occult_where);
PHP_FUNCTION(swe_sol_eclipse_how);
PHP_FUNCTION(swe_sol_eclipse_when_loc);
PHP_FUNCTION(swe_lun_occult_when_loc);
PHP_FUNCTION(swe_sol_eclipse_when_glob);
PHP_FUNCTION(swe_lun_occult_when_glob);
PHP_FUNCTION(swe_lun_eclipse_how);
PHP_FUNCTION(swe_lun_eclipse_when);
PHP_FUNCTION(swe_lun_eclipse_when_loc);

/* planetary phenomena */
PHP_FUNCTION(swe_pheno);
PHP_FUNCTION(swe_pheno_ut);
PHP_FUNCTION(swe_refrac);
PHP_FUNCTION(swe_refrac_extended);
PHP_FUNCTION(swe_azalt);
PHP_FUNCTION(swe_azalt_rev);
PHP_FUNCTION(swe_rise_trans);
PHP_FUNCTION(swe_rise_trans_true_hor);
PHP_FUNCTION(swe_nod_aps);
PHP_FUNCTION(swe_nod_aps_ut);
PHP_FUNCTION(swe_get_orbital_elements);
PHP_FUNCTION(swe_orbit_max_min_true_distance);
PHP_FUNCTION(swe_heliacal_ut);
PHP_FUNCTION(swe_heliacal_pheno_ut);
PHP_FUNCTION(swe_vis_limit_mag);

/**************************** 
 * exports from swephlib.c 
 ****************************/
PHP_FUNCTION(swe_deltat);
PHP_FUNCTION(swe_deltat_ex);
PHP_FUNCTION(swe_time_equ);
PHP_FUNCTION(swe_lmt_to_lat);
PHP_FUNCTION(swe_lat_to_lmt);
PHP_FUNCTION(swe_sidtime0);
PHP_FUNCTION(swe_sidtime);
PHP_FUNCTION(swe_cotrans);
PHP_FUNCTION(swe_cotrans_sp);
PHP_FUNCTION(swe_get_tid_acc);
PHP_FUNCTION(swe_set_tid_acc);
PHP_FUNCTION(swe_set_delta_t_userdef);
PHP_FUNCTION(swe_degnorm);
PHP_FUNCTION(swe_radnorm);
PHP_FUNCTION(swe_rad_midp);
PHP_FUNCTION(swe_deg_midp);
PHP_FUNCTION(swe_split_deg);

/******************************************************* 
 * other functions from swephlib.c;
 * they are not needed for Swiss Ephemeris,
 * but may be useful to former Placalc users.
 ********************************************************/
PHP_FUNCTION(swe_csnorm);
PHP_FUNCTION(swe_difcsn);
PHP_FUNCTION(swe_difdegn);
PHP_FUNCTION(swe_difcs2n);
PHP_FUNCTION(swe_difdeg2n);
PHP_FUNCTION(swe_difrad2n);
PHP_FUNCTION(swe_csroundsec);
PHP_FUNCTION(swe_d2l);
PHP_FUNCTION(swe_day_of_week);
PHP_FUNCTION(swe_cs2timestr);
PHP_FUNCTION(swe_cs2lonlatstr);
PHP_FUNCTION(swe_cs2degstr);


PHP_FUNCTION(confirm_sweph_compiled);	/* For testing, remove later. */

/* 
  	Declare any global variables you may need between the BEGIN
	and END macros here:     

ZEND_BEGIN_MODULE_GLOBALS(swephp)
	long  global_value;
	char *global_string;
ZEND_END_MODULE_GLOBALS(swephp)
*/

/* In every utility function you add that needs to use variables 
   in php_swephp_globals, call TSRMLS_FETCH(); after declaring other 
   variables used by that function, or better yet, pass in TSRMLS_CC
   after the last function argument and declare your utility function
   with TSRMLS_DC after the last declared argument.  Always refer to
   the globals in your function as SWEPH_G(variable).  You are 
   encouraged to rename these macros something shorter, see
   examples in any other php module directory.
*/

#ifdef ZTS
#define SWEPH_G(v) TSRMG(swephp_globals_id, zend_swephp_globals *, v)
#else
#define SWEPH_G(v) (swephp_globals.v)
#endif

#endif	/* PHP_SWEPH_H */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * indent-tabs-mode: t
 * End:
 */
