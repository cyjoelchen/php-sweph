/*
  +----------------------------------------------------------------------+
  | PHP Version 5 Swiss Ephemeris extension                              |
  +----------------------------------------------------------------------+
  | Copyright (c) 2007-2014                                              |
  +----------------------------------------------------------------------+
  | Author: Joel Chen (cyjoelchen@gmail.com)                             |
  +----------------------------------------------------------------------+

  $Id$
  
*/

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include "php.h"
#include "php_ini.h"
#include "ext/standard/info.h"
#include "php_sweph.h"

#include "swephexp.h"

#define SWEPH_EXTENSION_VERSION "2.0 $Rev$"

/* If you declare any globals in php_sweph.h uncomment this:
ZEND_DECLARE_MODULE_GLOBALS(sweph)
*/

/* True global resources - no need for thread safety here */
static int le_sweph;

/* {{{ sweph_functions[]
 *
 * Every user visible function must have an entry in sweph_functions[].
 */
zend_function_entry sweph_functions[] = {
	/**************************** 
	 * exports from sweph.c 
	 ****************************/
	PHP_FE(swe_calc, NULL)
	PHP_FE(swe_calc_ut, NULL)
	PHP_FE(swe_fixstar, NULL)
	PHP_FE(swe_fixstar_ut, NULL)
	PHP_FE(swe_close, NULL)
	PHP_FE(swe_set_ephe_path, NULL)
	PHP_FE(swe_set_jpl_file, NULL)
	PHP_FE(swe_get_planet_name, NULL)
	PHP_FE(swe_set_topo, NULL)
	PHP_FE(swe_set_sid_mode, NULL)
	PHP_FE(swe_get_ayanamsa, NULL)
	PHP_FE(swe_get_ayanamsa_ut, NULL)
	PHP_FE(swe_get_ayanamsa_name, NULL)
	PHP_FE(swe_version, NULL)

	/**************************** 
	 * exports from swedate.c 
	 ****************************/
	PHP_FE(swe_date_conversion, NULL)
	PHP_FE(swe_julday, NULL)
	PHP_FE(swe_revjul, NULL)
	PHP_FE(swe_jdet_to_utc, NULL)
	PHP_FE(swe_jdut1_to_utc, NULL)
	PHP_FE(swe_utc_to_jd, NULL)
	PHP_FE(swe_utc_time_zone, NULL)
	
	/**************************** 
	 * exports from swehouse.c 
	 ****************************/
	PHP_FE(swe_houses, NULL)
	PHP_FE(swe_houses_ex, NULL)
	PHP_FE(swe_houses_armc, NULL)
	PHP_FE(swe_house_pos, NULL)
	PHP_FE(swe_gauquelin_sector, NULL)
	PHP_FE(swe_house_name, NULL)
	
	/**************************** 
	 * exports from swecl.c 
	 ****************************/
	PHP_FE(swe_sol_eclipse_where, NULL)
	PHP_FE(swe_lun_occult_where, NULL)
	PHP_FE(swe_sol_eclipse_how, NULL)
	PHP_FE(swe_sol_eclipse_when_loc, NULL)
	PHP_FE(swe_lun_occult_when_loc, NULL)
	PHP_FE(swe_sol_eclipse_when_glob, NULL)
	PHP_FE(swe_lun_occult_when_glob, NULL)
	PHP_FE(swe_lun_eclipse_how, NULL)
	PHP_FE(swe_lun_eclipse_when, NULL)	
	PHP_FE(swe_lun_eclipse_when_loc, NULL)
	PHP_FE(swe_pheno, NULL)
	PHP_FE(swe_pheno_ut, NULL)
	PHP_FE(swe_refrac, NULL)
	PHP_FE(swe_refrac_extended, NULL)
	PHP_FE(swe_set_lapse_rate, NULL)
	PHP_FE(swe_azalt, NULL)
	PHP_FE(swe_azalt_rev, NULL)
	PHP_FE(swe_rise_trans, NULL)
	PHP_FE(swe_rise_trans_true_hor, NULL)
	PHP_FE(swe_nod_aps, NULL)
	PHP_FE(swe_nod_aps_ut, NULL)
		
	/**************************** 
	 * exports from swephlib.c 
	 ****************************/
	PHP_FE(swe_deltat, NULL)
	PHP_FE(swe_time_equ, NULL)
	PHP_FE(swe_lmt_to_lat, NULL)
	PHP_FE(swe_lat_to_lmt, NULL)
	PHP_FE(swe_sidtime0, NULL)
	PHP_FE(swe_sidtime, NULL)
	PHP_FE(swe_cotrans, NULL)
	PHP_FE(swe_cotrans_sp, NULL)
	PHP_FE(swe_get_tid_acc, NULL)
	PHP_FE(swe_set_tid_acc, NULL)
	PHP_FE(swe_degnorm, NULL)
	PHP_FE(swe_radnorm, NULL)
	PHP_FE(swe_rad_midp, NULL)
	PHP_FE(swe_deg_midp, NULL)
	PHP_FE(swe_split_deg, NULL)

	/******************************************************* 
	 * other functions from swephlib.c;
	 * they are not needed for Swiss Ephemeris,
	 * but may be useful to former Placalc users.
	 ********************************************************/
	PHP_FE(swe_csnorm, NULL)
	PHP_FE(swe_difcsn, NULL)
	PHP_FE(swe_difdegn, NULL)
	PHP_FE(swe_difcs2n, NULL)
	PHP_FE(swe_difdeg2n, NULL)
	PHP_FE(swe_difrad2n, NULL)
	PHP_FE(swe_csroundsec, NULL)
	PHP_FE(swe_d2l, NULL)
	PHP_FE(swe_day_of_week, NULL)
	PHP_FE(swe_cs2timestr, NULL)
	PHP_FE(swe_cs2lonlatstr, NULL)
	PHP_FE(swe_cs2degstr, NULL)

//	PHP_FE(confirm_sweph_compiled,	NULL)		/* For testing, remove later. */
	{NULL, NULL, NULL}	/* Must be the last line in sweph_functions[] */
};
/* }}} */

/* {{{ sweph_module_entry
 */
zend_module_entry sweph_module_entry = {
#if ZEND_MODULE_API_NO >= 20010901
	STANDARD_MODULE_HEADER,
#endif
	"sweph",
	sweph_functions,
	PHP_MINIT(sweph),
	NULL, //PHP_MSHUTDOWN(sweph),
	NULL, //PHP_RINIT(sweph),		/* Replace with NULL if there's nothing to do at request start */
	NULL, //PHP_RSHUTDOWN(sweph),	/* Replace with NULL if there's nothing to do at request end */
	PHP_MINFO(sweph),
#if ZEND_MODULE_API_NO >= 20010901
	SWEPH_EXTENSION_VERSION, 
#endif
	STANDARD_MODULE_PROPERTIES
};
/* }}} */

#ifdef COMPILE_DL_SWEPH
ZEND_GET_MODULE(sweph)
#endif

/* {{{ PHP_INI
 */
/* Remove comments and fill if you need to have entries in php.ini
PHP_INI_BEGIN()
    STD_PHP_INI_ENTRY("sweph.global_value",      "42", PHP_INI_ALL, OnUpdateInt, global_value, zend_sweph_globals, sweph_globals)
    STD_PHP_INI_ENTRY("sweph.global_string", "foobar", PHP_INI_ALL, OnUpdateString, global_string, zend_sweph_globals, sweph_globals)
PHP_INI_END()
*/
/* }}} */

/* {{{ php_sweph_init_globals
 */
/* Uncomment this function if you have INI entries
static void php_sweph_init_globals(zend_sweph_globals *sweph_globals)
{
	sweph_globals->global_value = 0;
	sweph_globals->global_string = NULL;
}
*/
/* }}} */

/* {{{ PHP_MINIT_FUNCTION
 */
PHP_MINIT_FUNCTION(sweph)
{
	/* If you have INI entries, uncomment these lines 
	ZEND_INIT_MODULE_GLOBALS(sweph, php_sweph_init_globals, NULL);
	REGISTER_INI_ENTRIES();
	*/

	/* values for gregflag in swe_julday() and swe_revjul() */
	
	REGISTER_LONG_CONSTANT("SE_JUL_CAL", SE_JUL_CAL, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_GREG_CAL", SE_GREG_CAL, CONST_CS | CONST_PERSISTENT);
	
	/*
	 * planet numbers for the ipl parameter in swe_calc()
	 */
	REGISTER_LONG_CONSTANT("SE_ECL_NUT", SE_ECL_NUT, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SUN", SE_SUN, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MOON", SE_MOON, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MERCURY", SE_MERCURY  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_VENUS", SE_VENUS    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MARS", SE_MARS     , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_JUPITER", SE_JUPITER  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SATURN", SE_SATURN   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_URANUS", SE_URANUS   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NEPTUNE", SE_NEPTUNE  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_PLUTO", SE_PLUTO    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MEAN_NODE", SE_MEAN_NODE, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_TRUE_NODE", SE_TRUE_NODE, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MEAN_APOG", SE_MEAN_APOG, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_OSCU_APOG", SE_OSCU_APOG, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_EARTH", SE_EARTH    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_CHIRON", SE_CHIRON   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_PHOLUS", SE_PHOLUS   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_CERES", SE_CERES    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_PALLAS", SE_PALLAS   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_JUNO", SE_JUNO     , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_VESTA", SE_VESTA    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_INTP_APOG", SE_INTP_APOG, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_INTP_PERG", SE_INTP_PERG, CONST_CS | CONST_PERSISTENT);
	
	REGISTER_LONG_CONSTANT("SE_NPLANETS", SE_NPLANETS, CONST_CS | CONST_PERSISTENT);
	
	REGISTER_LONG_CONSTANT("SE_AST_OFFSET", SE_AST_OFFSET, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_VARUNA", SE_VARUNA, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_FICT_OFFSET", SE_FICT_OFFSET, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_FICT_OFFSET_1", SE_FICT_OFFSET_1, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_FICT_MAX", SE_FICT_MAX, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NFICT_ELEM", SE_NFICT_ELEM, CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SE_COMET_OFFSET", SE_COMET_OFFSET, CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SE_NALL_NAT_POINTS", SE_NALL_NAT_POINTS, CONST_CS | CONST_PERSISTENT);

	/* Hamburger or Uranian"planets" */
	REGISTER_LONG_CONSTANT("SE_CUPIDO", SE_CUPIDO  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_HADES", SE_HADES   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ZEUS", SE_ZEUS    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_KRONOS", SE_KRONOS  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_APOLLON", SE_APOLLON , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ADMETOS", SE_ADMETOS , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_VULKANUS", SE_VULKANUS, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_POSEIDON", SE_POSEIDON, CONST_CS | CONST_PERSISTENT);

	/* other fictitious bodies */
	REGISTER_LONG_CONSTANT("SE_ISIS", SE_ISIS         	    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NIBIRU", SE_NIBIRU       	    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_HARRINGTON", SE_HARRINGTON        , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NEPTUNE_LEVERRIER", SE_NEPTUNE_LEVERRIER , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NEPTUNE_ADAMS", SE_NEPTUNE_ADAMS     , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_PLUTO_LOWELL", SE_PLUTO_LOWELL      , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_PLUTO_PICKERING", SE_PLUTO_PICKERING   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_VULCAN      		", SE_VULCAN      		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_WHITE_MOON", SE_WHITE_MOON  		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_PROSERPINA", SE_PROSERPINA  		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_WALDEMATH", SE_WALDEMATH  		, CONST_CS | CONST_PERSISTENT);


	REGISTER_LONG_CONSTANT("SE_FIXSTAR", SE_FIXSTAR, CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SE_ASC", SE_ASC		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MC", SE_MC		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ARMC", SE_ARMC		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_VERTEX", SE_VERTEX    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_EQUASC", SE_EQUASC    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_COASC1", SE_COASC1    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_COASC2", SE_COASC2    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_POLASC", SE_POLASC    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NASCMC", SE_NASCMC    , CONST_CS | CONST_PERSISTENT);

	/* flag bits for parameter iflag in function swe_calc() */

	REGISTER_LONG_CONSTANT("SEFLG_JPLEPH", SEFLG_JPLEPH, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_SWIEPH", SEFLG_SWIEPH, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_MOSEPH", SEFLG_MOSEPH, CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SEFLG_HELCTR", SEFLG_HELCTR	    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_TRUEPOS", SEFLG_TRUEPOS	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_J2000", SEFLG_J2000		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_NONUT", SEFLG_NONUT		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_SPEED3", SEFLG_SPEED3	    , CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SEFLG_SPEED", SEFLG_SPEED		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_NOGDEFL", SEFLG_NOGDEFL	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_NOABERR", SEFLG_NOABERR	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_EQUATORIAL", SEFLG_EQUATORIAL , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_XYZ", SEFLG_XYZ		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_RADIANS", SEFLG_RADIANS	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_BARYCTR", SEFLG_BARYCTR	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_TOPOCTR", SEFLG_TOPOCTR	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_SIDEREAL", SEFLG_SIDEREAL	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SEFLG_ICRS", SEFLG_ICRS		, CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SE_SIDBITS", SE_SIDBITS, CONST_CS | CONST_PERSISTENT);
	/* for projection onto ecliptic of t0 */
	REGISTER_LONG_CONSTANT("SE_SIDBIT_ECL_T0", SE_SIDBIT_ECL_T0, CONST_CS | CONST_PERSISTENT);
	/* for projection onto solar system plane */
	REGISTER_LONG_CONSTANT("SE_SIDBIT_SSY_PLANE", SE_SIDBIT_SSY_PLANE, CONST_CS | CONST_PERSISTENT);
	
	/* sidereal modes (ayanamsas) */
	REGISTER_LONG_CONSTANT("SE_SIDM_FAGAN_BRADLEY", SE_SIDM_FAGAN_BRADLEY  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_LAHIRI", SE_SIDM_LAHIRI         , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_DELUCE", SE_SIDM_DELUCE         , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_RAMAN", SE_SIDM_RAMAN          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_USHASHASHI", SE_SIDM_USHASHASHI     , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_KRISHNAMURTI", SE_SIDM_KRISHNAMURTI   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_DJWHAL_KHUL", SE_SIDM_DJWHAL_KHUL    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_YUKTESHWAR", SE_SIDM_YUKTESHWAR     , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_JN_BHASIN", SE_SIDM_JN_BHASIN      , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_BABYL_KUGLER1", SE_SIDM_BABYL_KUGLER1  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_BABYL_KUGLER2", SE_SIDM_BABYL_KUGLER2  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_BABYL_KUGLER3", SE_SIDM_BABYL_KUGLER3  , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_BABYL_HUBER", SE_SIDM_BABYL_HUBER    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_BABYL_ETPSC", SE_SIDM_BABYL_ETPSC    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_ALDEBARAN_15TAU", SE_SIDM_ALDEBARAN_15TAU, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_HIPPARCHOS", SE_SIDM_HIPPARCHOS     , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_SASSANIAN", SE_SIDM_SASSANIAN      , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_GALCENT_0SAG", SE_SIDM_GALCENT_0SAG   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_J2000", SE_SIDM_J2000          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_J1900", SE_SIDM_J1900          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_B1950", SE_SIDM_B1950          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_SURYASIDDHANTA", SE_SIDM_SURYASIDDHANTA          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_SURYASIDDHANTA_MSUN", SE_SIDM_SURYASIDDHANTA_MSUN          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_ARYABHATA", SE_SIDM_ARYABHATA          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_ARYABHATA_MSUN", SE_SIDM_ARYABHATA_MSUN          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_SS_REVATI", SE_SIDM_SS_REVATI          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_SS_CITRA", SE_SIDM_SS_CITRA          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_TRUE_CITRA", SE_SIDM_TRUE_CITRA          , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_SIDM_TRUE_REVATI", SE_SIDM_TRUE_REVATI          , CONST_CS | CONST_PERSISTENT);	
	REGISTER_LONG_CONSTANT("SE_SIDM_USER", SE_SIDM_USER           , CONST_CS | CONST_PERSISTENT);

	REGISTER_LONG_CONSTANT("SE_NSIDM_PREDEF", SE_NSIDM_PREDEF, CONST_CS | CONST_PERSISTENT);

	/* used for swe_nod_aps(): */
	REGISTER_LONG_CONSTANT("SE_NODBIT_MEAN", SE_NODBIT_MEAN		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NODBIT_OSCU", SE_NODBIT_OSCU		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NODBIT_OSCU_BAR", SE_NODBIT_OSCU_BAR	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_NODBIT_FOPOINT", SE_NODBIT_FOPOINT	, CONST_CS | CONST_PERSISTENT);

	/* default ephemeris used when no ephemeris flagbit is set */
	REGISTER_LONG_CONSTANT("SEFLG_DEFAULTEPH", SEFLG_DEFAULTEPH, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_MAX_STNAME", SE_MAX_STNAME, CONST_CS | CONST_PERSISTENT);

	/* defines for eclipse computations */

	REGISTER_LONG_CONSTANT("SE_ECL_CENTRAL", SE_ECL_CENTRAL		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_NONCENTRAL", SE_ECL_NONCENTRAL	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_TOTAL", SE_ECL_TOTAL		    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_ANNULAR", SE_ECL_ANNULAR		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_PARTIAL", SE_ECL_PARTIAL		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_ANNULAR_TOTAL", SE_ECL_ANNULAR_TOTAL , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_PENUMBRAL", SE_ECL_PENUMBRAL	    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_VISIBLE", SE_ECL_VISIBLE		, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_MAX_VISIBLE", SE_ECL_MAX_VISIBLE	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_1ST_VISIBLE", SE_ECL_1ST_VISIBLE	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_2ND_VISIBLE", SE_ECL_2ND_VISIBLE	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_3RD_VISIBLE", SE_ECL_3RD_VISIBLE	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_4TH_VISIBLE", SE_ECL_4TH_VISIBLE	, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_ECL_ONE_TRY", SE_ECL_ONE_TRY       , CONST_CS | CONST_PERSISTENT);

	/* for swe_rise_transit() */
	REGISTER_LONG_CONSTANT("SE_CALC_RISE", SE_CALC_RISE		    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_CALC_SET", SE_CALC_SET			, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_CALC_MTRANSIT", SE_CALC_MTRANSIT	    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_CALC_ITRANSIT", SE_CALC_ITRANSIT	    , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_DISC_CENTER", SE_BIT_DISC_CENTER   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_DISC_BOTTOM", SE_BIT_DISC_BOTTOM   , CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_NO_REFRACTION", SE_BIT_NO_REFRACTION, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_CIVIL_TWILIGHT", SE_BIT_CIVIL_TWILIGHT, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_NAUTIC_TWILIGHT", SE_BIT_NAUTIC_TWILIGHT, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_ASTRO_TWILIGHT", SE_BIT_ASTRO_TWILIGHT, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_BIT_FIXED_DISC_SIZE", SE_BIT_FIXED_DISC_SIZE, CONST_CS | CONST_PERSISTENT);

	/* for swe_azalt() and swe_azalt_rev() */
	REGISTER_LONG_CONSTANT("SE_ECL2HOR", SE_ECL2HOR, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_EQU2HOR", SE_EQU2HOR, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_HOR2ECL", SE_HOR2ECL, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_HOR2EQU", SE_HOR2EQU, CONST_CS | CONST_PERSISTENT);
	
	/* for swe_refrac() */
	REGISTER_LONG_CONSTANT("SE_TRUE_TO_APP", SE_TRUE_TO_APP, CONST_CS | CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("SE_APP_TO_TRUE", SE_APP_TO_TRUE, CONST_CS | CONST_PERSISTENT);

	return SUCCESS;
}
/* }}} */

/* {{{ PHP_MSHUTDOWN_FUNCTION
 */
PHP_MSHUTDOWN_FUNCTION(sweph)
{
	/* uncomment this line if you have INI entries
	UNREGISTER_INI_ENTRIES();
	*/
	return SUCCESS;
}
/* }}} */

/* Remove if there's nothing to do at request start */
/* {{{ PHP_RINIT_FUNCTION
 */
PHP_RINIT_FUNCTION(sweph)
{
	return SUCCESS;
}
/* }}} */

/* Remove if there's nothing to do at request end */
/* {{{ PHP_RSHUTDOWN_FUNCTION
 */
PHP_RSHUTDOWN_FUNCTION(sweph)
{
	return SUCCESS;
}
/* }}} */

/* {{{ PHP_MINFO_FUNCTION
 */
PHP_MINFO_FUNCTION(sweph)
{
	char version[255];

	swe_version(version);
	php_info_print_table_start();
	php_info_print_table_header(2, "sweph support", "enabled");
	php_info_print_table_row(2, "extension version", SWEPH_EXTENSION_VERSION);
	php_info_print_table_row(2, "library (libswe.a) version", version);
	php_info_print_table_row(2, "default ephemeris file path", SE_EPHE_PATH);
	php_info_print_table_end();

	/* Remove comments if you have entries in php.ini
	DISPLAY_INI_ENTRIES();
	*/
}
/* }}} */

/* Joel - Real sweph port goes here */

/**************************** 
 * exports from sweph.c 
 ****************************/
 
/* int swe_calc ( double tjd_et, int ipl, int iflag, double* xx, char* serr); */
PHP_FUNCTION(swe_calc)
{
	char *arg = NULL;
	int rc;
	long ipl, iflag;
	double tjd_et, xx[6];
	char serr[AS_MAXCH]; 
	int i;
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;
		
	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dll",
			&tjd_et, &ipl, &iflag) == FAILURE) {
		return;
	}
	rc = swe_calc(tjd_et, (int)ipl, (int)iflag, xx, serr);

		/* create an array */
	array_init(return_value);
	for(i = 0; i < 6; i++)
		add_index_double(return_value, i, xx[i]);
	add_assoc_string(return_value, "serr", serr, 1);
	add_assoc_long(return_value, "rc", rc);
}

/* int swe_calc_ut ( double tjd_ut, int ipl, int iflag, double* xx, char* serr); */
PHP_FUNCTION(swe_calc_ut)
{
	char *arg = NULL;
	int rc;
	long ipl, iflag;
	double tjd_ut, xx[6];
	char serr[AS_MAXCH]; 
	int i;
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;
		
	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dll",
			&tjd_ut, &ipl, &iflag) == FAILURE) {
		return;
	}
	rc = swe_calc_ut(tjd_ut, (int)ipl, (int)iflag, xx, serr);

	/* create an array */
	array_init(return_value);
	for(i = 0; i < 6; i++)
		add_index_double(return_value, i, xx[i]);
	add_assoc_string(return_value, "serr", serr, 1);
	add_assoc_long(return_value, "rc", rc);
}

#define MAX_FIXSTAR_NAME (2 * SE_MAX_STNAME + 1)
PHP_FUNCTION(swe_fixstar)
{
	char *arg = NULL;
	int rc;
	long iflag;
	double tjd_et, xx[6];
	char *star_ptr = NULL;
	int star_len;
	char star[MAX_FIXSTAR_NAME], serr[AS_MAXCH];
	int i;
	zval *xx_arr;
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;
		
	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "sdl",
			&star_ptr, &star_len, &tjd_et, &iflag) == FAILURE) {
		return;
	}
	memset(star, 0, MAX_FIXSTAR_NAME);
	strncpy(star, star_ptr, star_len);
	php_printf("%s", star);
	rc = swe_fixstar(star, tjd_et, (int)iflag, xx, serr);
	php_printf("%s %s %d\n", star, serr, rc);

	array_init(return_value);
	for(i = 0; i < 6; i++)
		add_index_double(return_value, i, xx[i]);
	add_assoc_string(return_value, "star", star, 1);
	add_assoc_string(return_value, "serr", serr, 1);
	add_assoc_long(return_value, "rc", rc);
}

PHP_FUNCTION(swe_fixstar_ut)
{
	char *arg = NULL;
	int rc;
	long iflag;
	double tjd_ut, xx[6];
	char *star_ptr = NULL;
	int star_len;
	char star[MAX_FIXSTAR_NAME], serr[AS_MAXCH];
	int i;
	zval *xx_arr;
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;
		
	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "sdl",
			&star_ptr, &star_len, &tjd_ut, &iflag) == FAILURE) {
		return;
	}
	memset(star, 0, MAX_FIXSTAR_NAME);
	strncpy(star, star_ptr, star_len);
	rc = swe_fixstar_ut(star, tjd_ut, (int)iflag, xx, serr);

	array_init(return_value);
	for(i = 0; i < 6; i++)
		add_index_double(return_value, i, xx[i]);
	add_assoc_string(return_value, "star", star, 1);
	add_assoc_string(return_value, "serr", serr, 1);
	add_assoc_long(return_value, "rc", rc);
}

PHP_FUNCTION(swe_close)
{
	if(ZEND_NUM_ARGS() != 0) WRONG_PARAM_COUNT;

	swe_close();
	RETURN_NULL();
}

PHP_FUNCTION(swe_set_ephe_path)
{
	char *arg = NULL;
	int arg_len, rc;

	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "s", &arg, &arg_len) == FAILURE) {
		return;
	}

	swe_set_ephe_path(arg);
	RETURN_NULL();
}

PHP_FUNCTION(swe_set_jpl_file)
{
	char *arg = NULL;
	int arg_len, rc;

	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "s", &arg, &arg_len) == FAILURE) {
		return;
	}

	swe_set_jpl_file(arg);
	RETURN_NULL();
}

PHP_FUNCTION(swe_get_planet_name)
{
	long ipl;
	char name[AS_MAXCH];
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "l", &ipl) == FAILURE) {
		return;
	}

	swe_get_planet_name((int)ipl, name);

	RETURN_STRING(name, 1);
}

PHP_FUNCTION(swe_set_topo)
{
	int rc;
	double geo_lon, geo_lat, geo_alt;

	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ddd",
		&geo_lon, &geo_lat, &geo_alt) == FAILURE) {
		return;
	}
	swe_set_topo(geo_lon, geo_lat, geo_alt);
	RETURN_NULL();
}

PHP_FUNCTION(swe_set_sid_mode)
{
	long sid_mode;
	int rc;
	double t0, ayan_t0;
		
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ldd",
		&sid_mode, &t0, &ayan_t0) == FAILURE) {
		return;
	}
	swe_set_sid_mode((int)sid_mode, t0, ayan_t0);
	RETURN_NULL();
}

PHP_FUNCTION(swe_get_ayanamsa)
{
	double tjd_et;
		
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
		&tjd_et) == FAILURE) {
		return;
	}
	
	RETURN_DOUBLE(swe_get_ayanamsa(tjd_et));
}

PHP_FUNCTION(swe_get_ayanamsa_ut)
{
	double tjd_ut;
		
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
		&tjd_ut) == FAILURE) {
		return;
	}
	
	RETURN_DOUBLE(swe_get_ayanamsa_ut(tjd_ut));
}

PHP_FUNCTION(swe_get_ayanamsa_name)
{
	long isidmode;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "l", &isidmode) == FAILURE) {
		return;
	}

	RETURN_STRING(swe_get_ayanamsa_name((int)isidmode), 1);
}

PHP_FUNCTION(swe_version)
{
	char name[AS_MAXCH];
	
	if(ZEND_NUM_ARGS() != 0) WRONG_PARAM_COUNT;

	RETURN_STRING(swe_version(name), 1);
}

/**************************** 
 * exports from swedate.c 
 ****************************/

PHP_FUNCTION(swe_date_conversion)
{
	int arg_len, rc;
	long year, month, day;
	double hour, tjd;
	char *gregflag = NULL;

	if(ZEND_NUM_ARGS() != 5) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "lllds",
			&year, &month, &day, &hour, &gregflag, &arg_len) == FAILURE) {
		return;
	}
	if (arg_len < 1)
		RETURN_NULL();

	rc = swe_date_conversion((int)year, (int)month, (int)day, hour, gregflag[0], &tjd);
	if (rc == OK)
	{
		RETURN_DOUBLE(tjd);
	}
	else
		RETURN_NULL();
}

/* double swe_julday(int year, int month, int day, double hour, int gregflag); */
PHP_FUNCTION(swe_julday)
{
	int rc;
	long year, month, day, gregflag;
	double hour, julday;

	if(ZEND_NUM_ARGS() != 5) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "llldl",
			&year, &month, &day, &hour, &gregflag) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_julday((int)year, (int)month, (int)day, hour, (int)gregflag));
}

PHP_FUNCTION(swe_revjul)
{
	int year, month, day, gregflag;
	double hour, jd;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dl",
			&jd, &gregflag) == FAILURE) {
		return;
	}

	swe_revjul(jd, gregflag, &year, &month, &day, &hour);

	array_init(return_value);

	add_assoc_long(return_value, "year", year);
	add_assoc_long(return_value, "month", month);
	add_assoc_long(return_value, "day", day);
	add_assoc_double(return_value, "hour", hour);
}

/*
New function since 1.76:
ext_def(void) swe_jdet_to_utc(
        double tjd_et, int32 gregflag, 
 int32 *iyear, int32 *imonth, int32 *iday, 
 int32 *ihour, int32 *imin, double *dsec);
*/
PHP_FUNCTION(swe_jdet_to_utc)
{
	double tjd_et;
	long gregflag;
	int32 iyear, imonth, iday;
	int32 ihour, imin;
	double dsec;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dl",
			&tjd_et, &gregflag) == FAILURE) {
		return;
	}
	swe_jdet_to_utc(tjd_et, (int32)gregflag, &iyear, &imonth, &iday, &ihour, &imin, &dsec);
	
	array_init(return_value);
	add_assoc_long(return_value, "year", iyear);
	add_assoc_long(return_value, "month", imonth);
	add_assoc_long(return_value, "day", iday);
	add_assoc_long(return_value, "hour", ihour);
	add_assoc_long(return_value, "min", imin);
	add_assoc_double(return_value, "sec", dsec);
}

/*
New function since 1.76:
ext_def(void) swe_jdut1_to_utc(
        double tjd_ut, int32 gregflag, 
 int32 *iyear, int32 *imonth, int32 *iday, 
 int32 *ihour, int32 *imin, double *dsec);
*/
PHP_FUNCTION(swe_jdut1_to_utc)
{
	double tjd_et;
	long gregflag;
	int32 iyear, imonth, iday;
	int32 ihour, imin;
	double dsec;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dl",
			&tjd_et, &gregflag) == FAILURE) {
		return;
	}
	swe_jdut1_to_utc(tjd_et, (int32)gregflag, &iyear, &imonth, &iday, &ihour, &imin, &dsec);
	
	array_init(return_value);
	add_assoc_long(return_value, "year", iyear);
	add_assoc_long(return_value, "month", imonth);
	add_assoc_long(return_value, "day", iday);
	add_assoc_long(return_value, "hour", ihour);
	add_assoc_long(return_value, "min", imin);
	add_assoc_double(return_value, "sec", dsec);
}

/*
New function since 1.76:
ext_def(int32) swe_utc_to_jd(
        int32 iyear, int32 imonth, int32 iday, 
 int32 ihour, int32 imin, double dsec, 
 int32 gregflag, double *dret, char *serr);
*/
PHP_FUNCTION(swe_utc_to_jd)
{
	long gregflag;
	long iyear, imonth, iday;
	long ihour, imin;
	double dsec, dret[2];
	char serr[AS_MAXCH];
	int32 rc;
	
	if(ZEND_NUM_ARGS() != 7) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "llllldl",
			&iyear, &imonth, &iday, &ihour, &imin, &dsec, &gregflag) == FAILURE) {
		return;
	}
	rc = swe_utc_to_jd((int32)iyear, (int32)imonth, (int32)iday, (int32)ihour, (int32)imin,
			dsec, (int32)gregflag, dret, serr);
			
	array_init(return_value);
	add_index_double(return_value, 0, dret[0]);
	add_index_double(return_value, 1, dret[1]);
	add_assoc_long(return_value, "rc", rc);
	add_assoc_string(return_value, "serr", serr, 1);
}

/*
New function since 1.77:
ext_def(void) swe_utc_time_zone(
        int32 iyear, int32 imonth, int32 iday,
	int32 ihour, int32 imin, double dsec,
	double d_timezone,
	int32 *iyear_out, int32 *imonth_out, int32 *iday_out,
	int32 *ihour_out, int32 *imin_out, double *dsec_out);
*/
PHP_FUNCTION(swe_utc_time_zone)
{
	long iyear, imonth, iday;
	long ihour, imin;
	double dsec, d_timezone;
	int32 iyear_out, imonth_out, iday_out, ihour_out, imin_out;
	double dsec_out;
	
	int32 rc;
	
	if(ZEND_NUM_ARGS() != 7) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "llllldd",
			&iyear, &imonth, &iday, &ihour, &imin, &dsec, &d_timezone) == FAILURE) {
		return;
	}
	swe_utc_time_zone((int32)iyear, (int32)imonth, (int32)iday, (int32)ihour, (int32)imin,
			dsec, d_timezone, &iyear_out, &imonth_out, &iday_out, &ihour_out,
			&imin_out, &dsec_out);
			
			
	array_init(return_value);
	add_assoc_long(return_value, "year", iyear_out);
	add_assoc_long(return_value, "month", imonth_out);
	add_assoc_long(return_value, "day", iday_out);
	add_assoc_long(return_value, "hour", ihour_out);
	add_assoc_long(return_value, "min", imin_out);
	add_assoc_double(return_value, "sec", dsec_out);
}


/**************************** 
 * exports from swehouse.c 
 ****************************/
PHP_FUNCTION(swe_houses)
{
	char *arg = NULL;
	int hsys_len, rc;
	char *hsys = NULL;
	double tjd_ut, geolat, geolon;
	double cusps[37], ascmc[10]; 
	int i, houses;
	zval *cusps_arr, *ascmc_arr;
	
	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ddds",
			&tjd_ut, &geolat, &geolon, &hsys, &hsys_len) == FAILURE) {
		return;
	}
	if (hsys_len < 1)
		return;
		
	rc = swe_houses(tjd_ut, geolat, geolon, hsys[0], cusps, ascmc);

	/* create 2 index array, and 1 assoc array */
	array_init(return_value);
	
	MAKE_STD_ZVAL(cusps_arr);
	array_init(cusps_arr);
	
	if (hsys[0] == 'G')
		houses = 37;
	else
		houses = 13;
		
	for(i = 0; i < houses; i++)
		add_index_double(cusps_arr, i, cusps[i]);

	MAKE_STD_ZVAL(ascmc_arr);
	array_init(ascmc_arr);
	for(i = 0; i < 10; i++)
		add_index_double(ascmc_arr, i, ascmc[i]);
		
	add_assoc_zval(return_value, "cusps", cusps_arr);
	add_assoc_zval(return_value, "ascmc", ascmc_arr);
	add_assoc_long(return_value, "rc", rc);
}

PHP_FUNCTION(swe_houses_ex)
{
	char *arg = NULL;
	int hsys_len, rc;
	char *hsys = NULL;
	double tjd_ut, geolat, geolon;
	double cusps[37], ascmc[10]; 
	int i, houses;
	long iflag;
	zval *cusps_arr, *ascmc_arr;
	
	if(ZEND_NUM_ARGS() != 5) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dldds",
			&tjd_ut, &iflag, &geolat, &geolon, &hsys, &hsys_len) == FAILURE) {
		return;
	}
	if (hsys_len < 1)
		return;

	rc = swe_houses_ex(tjd_ut, (int)iflag, geolat, geolon, hsys[0], cusps, ascmc);

	/* create 2 index array, and 1 assoc array */
	array_init(return_value);
	
	MAKE_STD_ZVAL(cusps_arr);
	array_init(cusps_arr);
	
	if (hsys[0] == 'G')
		houses = 37;
	else
		houses = 13;
		
	for(i = 0; i < houses; i++)
		add_index_double(cusps_arr, i, cusps[i]);

	MAKE_STD_ZVAL(ascmc_arr);
	array_init(ascmc_arr);
	for(i = 0; i < 10; i++)
		add_index_double(ascmc_arr, i, ascmc[i]);
		
	add_assoc_zval(return_value, "cusps", cusps_arr);
	add_assoc_zval(return_value, "ascmc", ascmc_arr);
	add_assoc_long(return_value, "rc", rc);
}

PHP_FUNCTION(swe_houses_armc)
{
	char *arg = NULL;
	int hsys_len, rc;
	char *hsys = NULL;
	double armc, geolat, eps;
	double cusps[37], ascmc[10]; 
	int i, iflag, houses;
	zval *cusps_arr, *ascmc_arr;
	
	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ddds",
			&armc, &geolat, &eps, &hsys, &hsys_len) == FAILURE) {
		return;
	}
	if (hsys_len < 1)
		return;

	rc = swe_houses_armc(armc, geolat, eps, hsys[0], cusps, ascmc);

	/* create 2 index array, and 1 assoc array */
	array_init(return_value);
	
	MAKE_STD_ZVAL(cusps_arr);
	array_init(cusps_arr);
	
	if (hsys[0] == 'G')
		houses = 37;
	else
		houses = 13;
		
	for(i = 0; i < houses; i++)
		add_index_double(cusps_arr, i, cusps[i]);

	MAKE_STD_ZVAL(ascmc_arr);
	array_init(ascmc_arr);
	for(i = 0; i < 10; i++)
		add_index_double(ascmc_arr, i, ascmc[i]);
		
	add_assoc_zval(return_value, "cusps", cusps_arr);
	add_assoc_zval(return_value, "ascmc", ascmc_arr);
	add_assoc_long(return_value, "rc", rc);
}

PHP_FUNCTION(swe_house_pos)
{
	char *arg = NULL;
	int hsys_len;
	char *hsys = NULL;
	double armc, geolat, eps, xpin[2], rc;
	char serr[AS_MAXCH]; 
	int i;
	
	if(ZEND_NUM_ARGS() != 6) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dddsdd",
			&armc, &geolat, &eps, &hsys, &hsys_len, &xpin[0], &xpin[1]) == FAILURE) {
		return;
	}
	if (hsys_len < 1)
		return;

	rc = swe_house_pos(armc, geolat, eps, hsys[0], xpin, serr);

	array_init(return_value);

	if ((rc >= 1.0) && (rc < 13.0))
	{
		RETURN_DOUBLE(rc);
	}
	else
	{
		RETURN_STRING(serr, 1);
	}	
}

/*
New function since 1.80:
ext_def(char *) swe_house_name(int hsys);
*/
PHP_FUNCTION(swe_house_name)
{
	int hsys_len;
	char *hsys = NULL;
	char *name;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "s", &hsys, &hsys_len) == FAILURE) {
		return;
	}

	if (hsys_len < 1)
		return;
	name = swe_house_name(hsys[0]);

	RETURN_STRING(name, 1);
}

/**************************** 
 * exports from sweecl.c 
 ****************************/
PHP_FUNCTION(swe_gauquelin_sector)
{
	char *arg = NULL;
	int arg_len, ipl, iflag, imeth, rc;
	char *starname = NULL;
	double t_ut, geopos[3], atpress, attemp, dgsect;
	char serr[AS_MAXCH]; 
	int i;
	
	if(ZEND_NUM_ARGS() != 10) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlsllddddd",
			&t_ut, &ipl, &starname, &iflag, &imeth, &geopos[0],
			&geopos[1], &geopos[2], &atpress, &attemp, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_gauquelin_sector(t_ut, ipl, starname, iflag, imeth, geopos,
			atpress, attemp, &dgsect, serr);

	if (rc == ERR)
	{
		RETURN_STRING(serr, 1);
	}
	else
	{
		RETURN_DOUBLE(dgsect);
	}	
}

PHP_FUNCTION(swe_sol_eclipse_where)
{
	char *arg = NULL;
	int arg_len, ifl, rc;
	double tjd_ut, geopos[2], attr[20];
	char serr[AS_MAXCH]; 
	int i;
	zval *geopos_arr, *attr_arr;

	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dl",
			&tjd_ut, &ifl, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_sol_eclipse_where(tjd_ut, ifl, geopos,	attr, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(geopos_arr);
		array_init(geopos_arr);
		
		for(i = 0; i < 2; i++)
			add_index_double(geopos_arr, i, geopos[i]);
	
		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
		
		add_assoc_zval(return_value, "geopos", geopos_arr);
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_lun_occult_where)
{
	char *arg = NULL;
	int arg_len, ipl, ifl, rc;
	double tjd_ut, geopos[2], attr[20];
	char serr[AS_MAXCH], *starname = NULL; 
	int i;
	zval *geopos_arr, *attr_arr;

	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlsd",
			&tjd_ut, &ipl, &starname, &ifl, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_lun_occult_where(tjd_ut, ipl, starname, ifl, geopos, attr, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(geopos_arr);
		array_init(geopos_arr);
		
		for(i = 0; i < 2; i++)
			add_index_double(geopos_arr, i, geopos[i]);
	
		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
		
		add_assoc_zval(return_value, "geopos", geopos_arr);
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_sol_eclipse_how)
{
	char *arg = NULL;
	int arg_len, ifl, rc;
	double tjd_ut, geopos[3], attr[20];
	char serr[AS_MAXCH]; 
	int i;
	zval *geopos_arr, *attr_arr;

	if(ZEND_NUM_ARGS() != 5) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlddd",
			&tjd_ut, &ifl, &geopos[0], &geopos[1], &geopos[2], &arg_len) == FAILURE) {
		return;
	}
	rc = swe_sol_eclipse_how(tjd_ut, ifl, geopos, attr, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
		
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_sol_eclipse_when_loc)
{
	char *arg = NULL;
	int arg_len, ifl, rc;
	double tjd_start,  geopos[3], tret[10], attr[20];
	char serr[AS_MAXCH]; 
	int i;
	int backward;
	zval *tret_arr, *attr_arr;

	if(ZEND_NUM_ARGS() != 6) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dldddl",
			&tjd_start, &ifl, &geopos[0], &geopos[1], &geopos[2], &backward, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_sol_eclipse_when_loc(tjd_start, ifl, geopos, tret, attr, backward, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, attr[i]);
		add_assoc_zval(return_value, "tret", tret_arr);

		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
		
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_lun_occult_when_loc)
{
	char *arg = NULL;
	int arg_len, ipl, ifl, rc;
	double tjd_start, geopos[3], tret[10], attr[20];
	char serr[AS_MAXCH], *starname = NULL; 
	int i;
	int backward;
	zval *tret_arr, *attr_arr;

	if(ZEND_NUM_ARGS() != 6) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlsldddl",
			&tjd_start, &ipl, &starname, &ifl, &geopos[0], &geopos[1],
			&geopos[2], &backward, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_lun_occult_when_loc(tjd_start, ipl, starname, ifl, geopos,
			tret, attr, backward, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, attr[i]);
		add_assoc_zval(return_value, "tret", tret_arr);

		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
		
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_sol_eclipse_when_glob)
{
	char *arg = NULL;
	int arg_len, rc, ifl, ifltype;
	double tjd_start, tret[10];
	char serr[AS_MAXCH]; 
	int i, backward;
	zval *tret_arr;

	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlll",
			&tjd_start, &ifl, &ifltype, &backward, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_sol_eclipse_when_glob(tjd_start, ifl, ifltype,	tret, backward, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, tret[i]);
			
		add_assoc_zval(return_value, "tret", tret_arr);
	}
}

PHP_FUNCTION(swe_lun_occult_when_glob)
{
	char *arg = NULL;
	int arg_len, rc, ipl, ifl, ifltype;
	double tjd_start, tret[10];
	char serr[AS_MAXCH], *starname = NULL; 
	int i, backward;
	zval *tret_arr;

	if(ZEND_NUM_ARGS() != 6) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlslll",
			&tjd_start, &ipl, &starname, &ifl, &ifltype, 
			&backward, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_lun_occult_when_glob(tjd_start, ipl, starname, ifl, ifltype,
			tret, backward, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, tret[i]);
			
		add_assoc_zval(return_value, "tret", tret_arr);
	}
}

PHP_FUNCTION(swe_lun_eclipse_how)
{
	char *arg = NULL;
	int arg_len, rc, ifl;
	double tjd_ut, geopos[3], attr[10];
	char serr[AS_MAXCH], *starname = NULL; 
	int i, backward;
	zval *attr_arr;

	if(ZEND_NUM_ARGS() != 5) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlddd",
			&tjd_ut, &ifl, &geopos[0], &geopos[1], &geopos[2], &arg_len) == FAILURE) {
		return;
	}
	rc = swe_lun_eclipse_how(tjd_ut, ifl, geopos, attr, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		
		for(i = 0; i < 10; i++)
			add_index_double(attr_arr, i, attr[i]);
			
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_lun_eclipse_when)
{
	char *arg = NULL;
	int arg_len, rc, ifl, ifltype;
	double tjd_start, tret[10];
	char serr[AS_MAXCH]; 
	int i, backward;
	zval *tret_arr;

	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlll",
			&tjd_start, &ifl, &ifltype, &backward, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_lun_eclipse_when(tjd_start, ifl, ifltype, tret, backward, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, tret[i]);
			
		add_assoc_zval(return_value, "tret", tret_arr);
	}
}

PHP_FUNCTION(swe_lun_eclipse_when_loc)
{
	char *arg = NULL;
	int arg_len, rc, ifl;
	double tjd_ut, geopos[3], tret[10], attr[20];
	char serr[AS_MAXCH], *starname = NULL;
	int i, backward;
	zval *tret_arr, *attr_arr;

	if(ZEND_NUM_ARGS() != 6) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dldddl",
			&tjd_ut, &ifl, &geopos[0], &geopos[1], &geopos[2], &backward, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_lun_eclipse_when_loc(tjd_ut, ifl, geopos, tret, attr, backward, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);

		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, tret[i]);
		add_assoc_zval(return_value, "tret", tret_arr);	

		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);

		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);			
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_pheno)
{
	char *arg = NULL;
	int arg_len, rc, ipl, iflag;
	double tjd, attr[20];
	char serr[AS_MAXCH]; 
	int i;
	zval *attr_arr;

	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dll",
			&tjd, &ipl, &iflag, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_pheno(tjd, ipl, iflag, attr, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
			
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_pheno_ut)
{
	char *arg = NULL;
	int arg_len, rc, ipl, iflag;
	double tjd_ut, attr[20];
	char serr[AS_MAXCH]; 
	int i;
	zval *attr_arr;

	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dll",
			&tjd_ut, &ipl, &iflag, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_pheno_ut(tjd_ut, ipl, iflag, attr, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(attr_arr);
		array_init(attr_arr);
		
		for(i = 0; i < 20; i++)
			add_index_double(attr_arr, i, attr[i]);
			
		add_assoc_zval(return_value, "attr", attr_arr);
	}
}

PHP_FUNCTION(swe_refrac)
{
	char *arg = NULL;
	int arg_len, rc, calc_flag;
	double inalt, atpress, attemp;

	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dddl",
			&inalt, &atpress, &attemp, &calc_flag, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_refrac(inalt, atpress, attemp, calc_flag);

	RETURN_DOUBLE(rc);
}

PHP_FUNCTION(swe_refrac_extended)
{
	char *arg = NULL;
	int arg_len, rc, calc_flag, i;
	double inalt, geoalt, atpress, lapse_rate, attemp;
	double dret[4];

	if(ZEND_NUM_ARGS() != 6) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dddddl",
			&inalt, &geoalt, &atpress, &lapse_rate, &attemp, &calc_flag, &arg_len) == FAILURE) {
		return;
	}
	rc = swe_refrac_extended(inalt, geoalt, atpress, lapse_rate, attemp, calc_flag, dret);

	RETURN_DOUBLE(rc);
	
	array_init(return_value);
	for(i = 0; i < 3; i++)
		add_index_double(return_value, i, dret[i]);
	add_assoc_double(return_value, "retflag", rc);
}

PHP_FUNCTION(swe_set_lapse_rate)
{
	char *arg = NULL;
	int arg_len;
	double lapse_rate;

	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&lapse_rate, &arg_len) == FAILURE) {
		return;
	}
	swe_set_lapse_rate(lapse_rate);
}

PHP_FUNCTION(swe_azalt)
{
	char *arg = NULL;
	int arg_len, rc, calc_flag;
	double tjd_ut, geopos[3], atpress, attemp, xin[3], xaz[3];
	int i;

	if(ZEND_NUM_ARGS() != 10) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dldddddddd",
			&tjd_ut, &calc_flag, 
			&geopos[0], &geopos[1], &geopos[2], 
			&atpress, &attemp,
			&xin[0], &xin[1], &xin[2], 
			&arg_len) == FAILURE) {
		return;
	}
	swe_azalt(tjd_ut, calc_flag, geopos, atpress, attemp, xin, xaz);

	array_init(return_value);
	for(i = 0; i < 3; i++)
		add_index_double(return_value, i, xaz[i]);
}

PHP_FUNCTION(swe_azalt_rev)
{
	char *arg = NULL;
	int arg_len, calc_flag;
	double tjd_ut, geopos[3], xin[2], xout[3];
	int i;

	if(ZEND_NUM_ARGS() != 10) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dddl",
			&tjd_ut, &calc_flag, 
			&geopos[0], &geopos[1], &geopos[2], 
			&xin[0], &xin[1], 
			&arg_len) == FAILURE) {
		return;
	}
	swe_azalt_rev(tjd_ut, calc_flag, geopos, xin, xout);

	array_init(return_value);
	for(i = 0; i < 3; i++)
		add_index_double(return_value, i, xout[i]);
}

PHP_FUNCTION(swe_rise_trans)
{
	char *arg = NULL;
	int arg_len, rc, s_len;
	long ipl, epheflag, rsmi;
	double tjd_ut, geopos[3], tret[10], atpress, attemp;
	char serr[AS_MAXCH], *starname = NULL; 
	int i;
	zval *tret_arr;

	if(ZEND_NUM_ARGS() != 10) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlsllddddd",
			&tjd_ut, &ipl, &starname, &s_len, &epheflag, &rsmi,
			&(geopos[0]), &(geopos[1]), &(geopos[2]),
			&atpress, &attemp, 
			&arg_len) == FAILURE) {
		return;
	}
	rc = swe_rise_trans(tjd_ut, ipl, starname, epheflag, rsmi,
			&(geopos[0]), atpress, attemp, tret, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, tret[i]);
			
		add_assoc_zval(return_value, "tret", tret_arr);
	}
}

PHP_FUNCTION(swe_rise_trans_true_hor)
{
	char *arg = NULL;
	int arg_len, rc, s_len;
	long ipl, epheflag, rsmi;
	double tjd_ut, geopos[3], tret[10], atpress, attemp, horhgt;
	char serr[AS_MAXCH], *starname = NULL; 
	int i;
	zval *tret_arr;

	if(ZEND_NUM_ARGS() != 11) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlslldddddd",
			&tjd_ut, &ipl, &starname, &s_len, &epheflag, &rsmi,
			&geopos[0], &geopos[1], &geopos[2],
			&atpress, &attemp, &horhgt,
			&arg_len) == FAILURE) {
		return;
	}
	rc = swe_rise_trans_true_hor(tjd_ut, ipl, starname, epheflag, rsmi,
			geopos, atpress, attemp, horhgt, tret, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(tret_arr);
		array_init(tret_arr);
		
		for(i = 0; i < 10; i++)
			add_index_double(tret_arr, i, tret[i]);
			
		add_assoc_zval(return_value, "tret", tret_arr);
	}
}

PHP_FUNCTION(swe_nod_aps)
{
	char *arg = NULL;
	int arg_len, rc, ipl, iflag, method;
	double tjd_et, xnasc[6], xndsc[6], xperi[6], xaphe[6];
	char serr[AS_MAXCH]; 
	int i;
	zval *xnasc_arr, *xndsc_arr, *xperi_arr, *xaphe_arr;

	if(ZEND_NUM_ARGS() != 10) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlll",
			&tjd_et, &ipl, &iflag, &method,
			&arg_len) == FAILURE) {
		return;
	}
	rc = swe_nod_aps_ut(tjd_et, ipl, iflag, method, xnasc, xndsc, xperi, xaphe, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(xnasc_arr);
		array_init(xnasc_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xnasc_arr, i, xnasc[i]);

		MAKE_STD_ZVAL(xndsc_arr);
		array_init(xndsc_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xndsc_arr, i, xndsc[i]);

		MAKE_STD_ZVAL(xperi_arr);
		array_init(xperi_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xperi_arr, i, xperi[i]);

		MAKE_STD_ZVAL(xaphe_arr);
		array_init(xaphe_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xaphe_arr, i, xaphe[i]);
			
		add_assoc_zval(return_value, "xnasc", xnasc_arr);
		add_assoc_zval(return_value, "xndsc", xndsc_arr);
		add_assoc_zval(return_value, "xnperi", xperi_arr);
		add_assoc_zval(return_value, "xnaphe", xaphe_arr);
	}
}

PHP_FUNCTION(swe_nod_aps_ut)
{
	char *arg = NULL;
	int arg_len, rc, ipl, iflag, method;
	double tjd_ut, xnasc[6], xndsc[6], xperi[6], xaphe[6];
	char serr[AS_MAXCH]; 
	int i;
	zval *xnasc_arr, *xndsc_arr, *xperi_arr, *xaphe_arr;

	if(ZEND_NUM_ARGS() != 10) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dlll",
			&tjd_ut, &ipl, &iflag, &method,
			&arg_len) == FAILURE) {
		return;
	}
	rc = swe_nod_aps_ut(tjd_ut, ipl, iflag, method, xnasc, xndsc, xperi, xaphe, serr);

	array_init(return_value);
	add_assoc_long(return_value, "retflag", rc);

	if (rc == ERR)
	{
		add_assoc_string(return_value, "serr", serr, 1);			
	}
	else
	{
		MAKE_STD_ZVAL(xnasc_arr);
		array_init(xnasc_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xnasc_arr, i, xnasc[i]);

		MAKE_STD_ZVAL(xndsc_arr);
		array_init(xndsc_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xndsc_arr, i, xndsc[i]);

		MAKE_STD_ZVAL(xperi_arr);
		array_init(xperi_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xperi_arr, i, xperi[i]);

		MAKE_STD_ZVAL(xaphe_arr);
		array_init(xaphe_arr);
		for(i = 0; i < 6; i++)
			add_index_double(xaphe_arr, i, xaphe[i]);
			
		add_assoc_zval(return_value, "xnasc", xnasc_arr);
		add_assoc_zval(return_value, "xndsc", xndsc_arr);
		add_assoc_zval(return_value, "xnperi", xperi_arr);
		add_assoc_zval(return_value, "xnaphe", xaphe_arr);
	}
}

/**************************** 
 * exports from swephlib.c 
 ****************************/

PHP_FUNCTION(swe_deltat)
{
	double tjd_ut;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&tjd_ut) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_deltat(tjd_ut));
}

PHP_FUNCTION(swe_time_equ)
{
	char *arg = NULL;
	double tjd, te;
	int rc;
	char serr[AS_MAXCH]; 
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&tjd) == FAILURE) {
		return;
	}
	rc = swe_time_equ(tjd, &te, serr);
	array_init(return_value);
	
	add_assoc_long(return_value, "rc", rc);
	add_assoc_double(return_value, "te", te);
	add_assoc_string(return_value, "serr", serr, 1);
}

PHP_FUNCTION(swe_lmt_to_lat)
{
	char *arg = NULL;
	double tjd_lmt, geolon;
	double tjd_lat;
	int rc;
	char serr[AS_MAXCH]; 
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&tjd_lmt, &geolon) == FAILURE) {
		return;
	}
	rc = swe_lmt_to_lat(tjd_lmt, geolon, &tjd_lat, serr);
	array_init(return_value);
	
	add_assoc_long(return_value, "rc", rc);
	add_assoc_double(return_value, "tjd_lat", tjd_lat);
	add_assoc_string(return_value, "serr", serr, 1);
}

PHP_FUNCTION(swe_lat_to_lmt)
{
	char *arg = NULL;
	double tjd_lmt, tjd_lat, geolon;
	int rc;
	char serr[AS_MAXCH]; 
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&tjd_lat, &geolon) == FAILURE) {
		return;
	}
	rc = swe_lmt_to_lat(tjd_lat, geolon, &tjd_lmt, serr);
	array_init(return_value);
	
	add_assoc_long(return_value, "rc", rc);
	add_assoc_double(return_value, "tjd_lmt", tjd_lmt);
	add_assoc_string(return_value, "serr", serr, 1);
}

PHP_FUNCTION(swe_sidtime0)
{
	double tjd_ut, eps, nut, rc;
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ddd",
			&tjd_ut, &eps, &nut) == FAILURE) {
		return;
	}
	RETURN_DOUBLE(swe_sidtime0(tjd_ut, eps, nut));
}

PHP_FUNCTION(swe_sidtime)
{
	double tjd_ut, rc;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&tjd_ut) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_sidtime(tjd_ut));
}

PHP_FUNCTION(swe_cotrans)
{
	int i;
	double xpo[3], xpn[3], eps;
	
	if(ZEND_NUM_ARGS() != 4) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dddd",
			&xpo[0], &xpo[1], &xpo[2], &eps) == FAILURE) {
		return;
	}
	
	swe_cotrans(xpo, xpn, eps);

	/* create an array */
	array_init(return_value);
	for(i = 0; i < 3; i++)
		add_index_double(return_value, i, xpn[i]);
}

PHP_FUNCTION(swe_cotrans_sp)
{
	int i;
	double xpo[6], xpn[6], eps;
	
	if(ZEND_NUM_ARGS() != 7) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ddddddd",
			&xpo[0], &xpo[1], &xpo[2], &xpo[3], &xpo[4], &xpo[5], &eps) == FAILURE) {
		return;
	}
	
	swe_cotrans_sp(xpo, xpn, eps);

	/* create an array */
	array_init(return_value);
	for(i = 0; i < 6; i++)
		add_index_double(return_value, i, xpn[i]);
}

PHP_FUNCTION(swe_get_tid_acc)
{
	if(ZEND_NUM_ARGS() != 0) WRONG_PARAM_COUNT;

	RETURN_DOUBLE(swe_get_tid_acc());
}

PHP_FUNCTION(swe_set_tid_acc)
{
	double t_acc;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&t_acc) == FAILURE) {
		return;
	}
	swe_set_tid_acc(t_acc);
	
	RETURN_NULL();
}

PHP_FUNCTION(swe_degnorm)
{
	double x, rc;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d", &x) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_degnorm(x));
}

PHP_FUNCTION(swe_radnorm)
{
	double x;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&x) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_radnorm(x));
}

PHP_FUNCTION(swe_rad_midp)
{
	double x1, x0;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&x1, &x0) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_rad_midp(x1, x0));
}

PHP_FUNCTION(swe_deg_midp)
{
	double x1, x0;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&x1, &x0) == FAILURE) {
		return;
	}

	RETURN_DOUBLE(swe_deg_midp(x1, x0));
}

PHP_FUNCTION(swe_split_deg)
{
	long roundflag;
	double ddeg, dsecfr;
	int ideg, imin, isec, isgn;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dl",
			&ddeg, &roundflag) == FAILURE) {
		return;
	}
	swe_split_deg(ddeg, (int)roundflag, &ideg, &imin, &isec, &dsecfr, &isgn);
	array_init(return_value);
	add_assoc_long(return_value, "deg", ideg);
	add_assoc_long(return_value, "min", imin);
	add_assoc_long(return_value, "sec", isec);
	add_assoc_double(return_value, "secfr", dsecfr);
	add_assoc_long(return_value, "sgn", isgn);
}

PHP_FUNCTION(swe_csnorm)
{
	long p;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "l",
			&p) == FAILURE) {
		return;
	}
	RETURN_LONG(swe_csnorm(p));
}

PHP_FUNCTION(swe_difcsn)
{
	long p1, p2;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ll",
			&p1, &p2) == FAILURE) {
		return;
	}
	RETURN_LONG(swe_difcsn((int)p1, (int)p2));
}

PHP_FUNCTION(swe_difdegn)
{
	double p1, p2;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&p1, &p2) == FAILURE) {
		return;
	}
	RETURN_DOUBLE(swe_difdegn(p1, p2));
}

PHP_FUNCTION(swe_difcs2n)
{
	long p1, p2;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ll",
			&p1, &p2) == FAILURE) {
		return;
	}
	RETURN_LONG(swe_difcs2n((int)p1, (int)p2));
}

PHP_FUNCTION(swe_difdeg2n)
{
	double p1, p2;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&p1, &p2) == FAILURE) {
		return;
	}
	RETURN_DOUBLE(swe_difdeg2n(p1, p2));
}

PHP_FUNCTION(swe_difrad2n)
{
	double p1, p2;
	
	if(ZEND_NUM_ARGS() != 2) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "dd",
			&p1, &p2) == FAILURE) {
		return;
	}
	RETURN_DOUBLE(swe_difrad2n(p1, p2));
}

PHP_FUNCTION(swe_csroundsec)
{
	long x;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "l",
			&x) == FAILURE) {
		return;
	}
	RETURN_LONG(swe_csroundsec((int)x));
}

PHP_FUNCTION(swe_d2l)
{
	double x;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&x) == FAILURE) {
		return;
	}
	RETURN_LONG(swe_d2l(x));
}

PHP_FUNCTION(swe_day_of_week)
{
	double jd;
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "d",
			&jd) == FAILURE) {
		return;
	}
	RETURN_LONG(swe_day_of_week(jd));
}

PHP_FUNCTION(swe_cs2timestr)
{
	long t, sep, suppressZero;
	char a[AS_MAXCH];
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "lll",
			&t, &sep, &suppressZero) == FAILURE) {
		return;
	}

	RETURN_STRING(swe_cs2timestr((int)t, (int)sep, (int)suppressZero, a), 1);
}

PHP_FUNCTION(swe_cs2lonlatstr)
{
	long t;
	int pchar_len, mchar_len;
	char s[AS_MAXCH], *pchar = NULL, *mchar = NULL;
	
	if(ZEND_NUM_ARGS() != 3) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "lss",
			&t, &pchar, &pchar_len, &mchar, &mchar_len) == FAILURE) {
		return;
	}
	if ((pchar_len < 1) || (mchar_len < 1))
		return;

	RETURN_STRING(swe_cs2lonlatstr((int)t, pchar[0], mchar[0], s), 1);
}

PHP_FUNCTION(swe_cs2degstr)
{
	long t;
	char a[AS_MAXCH];
	
	if(ZEND_NUM_ARGS() != 1) WRONG_PARAM_COUNT;

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "l",
			&t) == FAILURE) {
		return;
	}

	RETURN_STRING(swe_cs2degstr((int)t, a), 1);
}

#if 0
/* Remove the following function when you have succesfully modified config.m4
   so that your module can be compiled into PHP, it exists only for testing
   purposes. */

/* Every user-visible function in PHP should document itself in the source */
/* {{{ proto string confirm_sweph_compiled(string arg)
   Return a string to confirm that the module is compiled in */
PHP_FUNCTION(confirm_sweph_compiled)
{
	char *arg = NULL;
	int arg_len, len;
	char string[256];

	if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "s", &arg, &arg_len) == FAILURE) {
		return;
	}

	len = sprintf(string, "Congratulations! You have successfully modified ext/%.78s/config.m4. Module %.78s is now compiled into PHP.", "sweph", arg);
	RETURN_STRINGL(string, len, 1);
}
#endif

/* }}} */
/* The previous line is meant for vim and emacs, so it can correctly fold and 
   unfold functions in source code. See the corresponding marks just before 
   function definition, where the functions purpose is also documented. Please 
   follow this convention for the convenience of others editing your code.
*/


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
