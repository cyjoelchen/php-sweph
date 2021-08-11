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
 * @param string $path
 * @return null
 */
function swe_set_ephe_path(string $path) {}

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
