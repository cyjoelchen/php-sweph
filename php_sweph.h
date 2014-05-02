/*
  +----------------------------------------------------------------------+
  | PHP Version 4 Swiss Ephemeris extension                              |
  +----------------------------------------------------------------------+
  | Copyright (c) 2007-2014                                              |
  +----------------------------------------------------------------------+
  | Author: Joel Chen                                                    |
  +----------------------------------------------------------------------+

  $Id: php_sweph.h 10 2007-01-26 16:37:31Z joel $
  
*/

#ifndef PHP_SWEPH_H
#define PHP_SWEPH_H

extern zend_module_entry sweph_module_entry;
#define phpext_sweph_ptr &sweph_module_entry

#ifdef PHP_WIN32
#define PHP_SWEPH_API __declspec(dllexport)
#else
#define PHP_SWEPH_API
#endif

#ifdef ZTS
#include "TSRM.h"
#endif

PHP_MINIT_FUNCTION(sweph);
PHP_MSHUTDOWN_FUNCTION(sweph);
PHP_RINIT_FUNCTION(sweph);
PHP_RSHUTDOWN_FUNCTION(sweph);
PHP_MINFO_FUNCTION(sweph);

/* Joel - sweph functions */

/**************************** 
 * exports from sweph.c 
 ****************************/
PHP_FUNCTION(swe_calc);
PHP_FUNCTION(swe_calc_ut);
PHP_FUNCTION(swe_fixstar);
PHP_FUNCTION(swe_fixstar_ut);
PHP_FUNCTION(swe_close);
PHP_FUNCTION(swe_set_ephe_path);
PHP_FUNCTION(swe_set_jpl_file);
PHP_FUNCTION(swe_get_planet_name);
PHP_FUNCTION(swe_set_topo);
PHP_FUNCTION(swe_set_sid_mode);
PHP_FUNCTION(swe_get_ayanamsa);
PHP_FUNCTION(swe_get_ayanamsa_ut);
PHP_FUNCTION(swe_get_ayanamsa_name);
PHP_FUNCTION(swe_version);

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
PHP_FUNCTION(swe_houses_armc);
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
PHP_FUNCTION(swe_set_lapse_rate);
PHP_FUNCTION(swe_azalt);
PHP_FUNCTION(swe_azalt_rev);
PHP_FUNCTION(swe_rise_trans);
PHP_FUNCTION(swe_rise_trans_true_hor);
PHP_FUNCTION(swe_nod_aps);
PHP_FUNCTION(swe_nod_aps_ut);

/**************************** 
 * exports from swephlib.c 
 ****************************/
PHP_FUNCTION(swe_deltat);
PHP_FUNCTION(swe_time_equ);
PHP_FUNCTION(swe_lmt_to_lat);
PHP_FUNCTION(swe_lat_to_lmt);
PHP_FUNCTION(swe_sidtime0);
PHP_FUNCTION(swe_sidtime);
PHP_FUNCTION(swe_cotrans);
PHP_FUNCTION(swe_cotrans_sp);
PHP_FUNCTION(swe_get_tid_acc);
PHP_FUNCTION(swe_set_tid_acc);
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

ZEND_BEGIN_MODULE_GLOBALS(sweph)
	long  global_value;
	char *global_string;
ZEND_END_MODULE_GLOBALS(sweph)
*/

/* In every utility function you add that needs to use variables 
   in php_sweph_globals, call TSRMLS_FETCH(); after declaring other 
   variables used by that function, or better yet, pass in TSRMLS_CC
   after the last function argument and declare your utility function
   with TSRMLS_DC after the last declared argument.  Always refer to
   the globals in your function as SWEPH_G(variable).  You are 
   encouraged to rename these macros something shorter, see
   examples in any other php module directory.
*/

#ifdef ZTS
#define SWEPH_G(v) TSRMG(sweph_globals_id, zend_sweph_globals *, v)
#else
#define SWEPH_G(v) (sweph_globals.v)
#endif

#endif	/* PHP_SWEPH_H */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * indent-tabs-mode: t
 * End:
 */
