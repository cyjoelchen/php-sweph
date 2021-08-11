/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 0ec2fb03f64630ed01b1c11df23963aa33f965b7 */

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


ZEND_FUNCTION(swe_calc);
ZEND_FUNCTION(swe_calc_ut);
ZEND_FUNCTION(swe_calc_pctr);


static const zend_function_entry ext_functions[] = {
	ZEND_FE(swe_calc, arginfo_swe_calc)
	ZEND_FE(swe_calc_ut, arginfo_swe_calc_ut)
	ZEND_FE(swe_calc_pctr, arginfo_swe_calc_pctr)
	ZEND_FE_END
};
