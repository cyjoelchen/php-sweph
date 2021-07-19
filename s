[1mAbout pod documentation comments[0m
    Pod means Plain Old Documentation and comes from the world of Perl, a
    programming language similar to PHP. To extract the documenation from this
    file, type

    perldoc sweph.c

    see also https://perldoc.perl.org/perlpod

[1mfunction swe_calc(tjd_ut, ipl, iflag)[0m
    calculate position of planet ipl with time in Ephemeris Time (TDT)

   Parameters
      double        tjd_et      Julian day in Ephemeris Time.
      int           ipl         Planet/body/object number or constant.
      int           iflag       Flag bits for computation requirements.

   return array
      [0..5]        double  position and speed vector xx
      ['serr']      string  optional error message
      ['rc']        int             return flag, < 0 in case of error

   C declaration
      int swe_calc ( double tjd_et, int ipl, int iflag, double* xx, char* serr);

[1mfunction swe_calc_ut(tjd_ut, ipl, iflag)[0m
    calculate position of planet ipl with time in Universal Time UT

   Parameters
      double        tjd_ut      Julian day in Universal Time.
      int           ipl         Planet/body/object number or constant.
      int           iflag       Flag bits for computation requirements.

   return array
      [0..5]                position and speed vector xx
      ['serr']              optional error message
      ['rc']                return flag, < 0 in case of error

   C declaration
      int swe_calc_ut ( double tjd_ut, int ipl, int iflag, double* xx, char* serr);

[1mfunction swe_calc_pctr(tjd_et, ipl, iplctr, iflag)[0m
    calculate position of planet ipl relative to a center object iplctr

   Parameters
      double        tjd_et      Julian day in Ephemeris Time.
      int           ipl         Target planet/body/object number or constant.
      int           iplctr      Center planet/body/object number or constant.
      int           iflag       Flag bits for computation requirements.

   return array
      [0..5]                double  position and speed vector xx
      ['serr']              string  optional error message
      ['rc']                int             return flag, < 0 in case of error

   C declaration
      int swe_calc_pctr ( double tjd_et, int ipl, int iplctr, int iflag, double* xx, char* serr);

[1mfunction swe_fixstar(star, tjd_et, iflag)[0m
    calculate position of a star with time in Ephemeris Time (TDT)

   Parameters
      string        star        Name of fixed star to be searched, returned name of found star.
      double        tjd_et      Julian day in Ephemeris Time.
      int           iflag       Flag bits for computation requirements.

   return array
      [0..5]                double  position and speed vector xx
      ['star']              string  returned star name, usually different from input
      ['serr']              string  optional error message
      ['rc']                int             return flag, < 0 in case of error

   C declaration
      int swe_fixstar(char *star, double tjd_et, int32 iflag, double *xx, char *serr);

[1mfunction swe_fixstar_ut(star, tjd_ut, iflag)[0m
    calculate position of a star with time in Universal Time (UT)

   Parameters
      string        star        Name of fixed star to be searched, returned name of found star.
      double        tjd_ut      Julian day in Universal Time.
      int           iflag       Flag bits for computation requirements.

   return array
      [0..5]                double  position and speed vector xx
      ['star']              string  returned star name, usually different from input
      ['serr']              string  optional error message
      ['rc']                int             return flag, < 0 in case of error

   C declaration
      int swe_fixstar(char *star, double tjd_et, int32 iflag, double *xx, char *serr);

[1mfunction swe_fixstar_mag(star)[0m
    deliver magnitude of star

   Parameters
      string        star        Name of fixed star to be searched

   return array
      ['mag']               double  star magnitude, in case of success
      ['star']              string  returned star name, usually different from input
      ['rc']                int             return flag, < 0 in case of error
      ['serr']              string  optional error message

   C declaration
      int swe_fixstar(char *star, double tjd_et, int32 iflag, double *xx, char *serr);

[1mfunction swe_close()[0m
    close SE and release resources

   Parameters (none)
   return (none)
   C declaration
    void swe_close()

[1mfunction swe_set_ephe_path(path)[0m
    Define the path where SE ephemeris files reside

   Parameters
        string      path        Single directory name or a list of directories, searched in sequence.

   return (none)
   C declaration
    void swe_set_ephe_path(char *path);

[1mfunction swe_set_jpl_file(fname)[0m
    Define the file name for a JPL ephemeris file, used with flag SEFLG_JPLEPH

   Parameters
        string      fname       File name of JPL ephemeris (must be sibling of ephemeris files).

   return (none)
   C declaration
    void swe_set_jpl_file(char *fname);

[1mfunction swe_get_planet_name(ipl)[0m
    get the name of a planet, asteroid or fictitious object

   Parameters
        int         ipl         Planet/body/object number or constant.

   return string
    In case of error, an error message is returned instead of a planet name.

   C declaration
    (char *) swe_get_planet_name(int ipl, char *spname);

[1mfunction swe_set_topo(geolon, geolat, geoalt)[0m
    Set topocentric reference places, used with flag SEFLG_TOPOCTR and some
    function

   Parameters
        double       geolon      Longitude of location in degrees.
        double       geolat      Latitude of location in degrees.
        double       geoalt      Altitude of location in meters.

   return (none)
   C declaration
    void swe_set_topo(double geolon, double geolat, double geoalt)

[1mfunction swe_set_sid_mode(sid_mode, &t0, &ayan_t0)[0m
    Set one of the numerous sidereal modes, used with flag SEFLG_SIDEREAL and
    some functions

   Parameters
        int         sid_mode      Number of constant of ayanamsa to use.
        double      t0            Reference date if using SE_SIDM_USER flag, 0 otherwise.
        double      ayan_t0       Initial value of ayanamsa if using SE_SIDM_USER flag, 0 otherwise.

   return (none)
   C declaration
    void swe_set_sid_mode(int32 sid_mode, double t0, double ayan_t0)

[1mfunction swe_get_ayanamsa (tjd_et)[0m
    Compute the ayanamsa without nutation.

   Parameters
        double         tjd_et      Julian day in Ephemeris Time.

   return double
   C declaration
    double swe_get_ayanamsa(double tjd_et);

[1mfunction swe_get_ayanamsa_ex(tjd_et, iflag)[0m
    Compute the ayanamsa with or without nutation, depending on flag.

   Parameters
        double      tjd_et      Julian day in Ephemeris Time.
        int         iflag       Flag bits for computation requirements.

   return array
        [
            'daya' => (double) Value of ayanamsa.
            'serr' => (string) Error message or empty string.
        ]

   C declaration
    int32 swe_get_ayanamsa_ex(double tjd_et, int32 iflag, double *daya, char
    *serr);

[1mfunction swe_get_ayanamsa_ut(tjd_ut)[0m
    Compute the ayanamsa without nutation.

   Parameters
        double         tjd_ut      Julian day in Universal Time.

   return
            double

   C declaration
    double swe_get_ayanamsa_ut(double tjd_ut);

    <<<<<<< HEAD

[1mfunction swe_get_ayanamsa_ex_ut (tjd_ut, iflag)[0m
    Get ayanamsa value in current sidereal mode, time in UT

   Parameters
        double      tjd_ut      Julian day in Universal Time.
        int         iflag       Flag bits for computation requirements.

   return array
      ['daya']              double  ayanamsa value
      ['serr']              string  optional error message
      ['rc']                int             return flag, < 0 in case of error

   C declaration
    int32 swe_get_ayanamsa_ex_ut(double tjd_ut, int32 iflag, double *daya,
    char *serr);

[1mfunction swe_get_ayanamsa_name (isidmode)[0m
    Get ayanamsa name for this sidereal mode

   Parameters
        int         isidmode      Number or constant of sidereal mode.

   return string
   C declaration
    const char *swe_get_ayanamsa_name(int32 isidmode);

[1mfunction swe_version()[0m
    find out version number of your Swiss Ephemeris version

   Parameters (none)
   return string
    Version information of the Swiss Ephemeris library, different from the
    version of this PHP extension.

   C declaration
    char *swe_version(char* svers);

[1mfunction swe_get_library_path()[0m
    Path to the SE PHP extension library file

   Parameters (none)
   return
            string  path to currently used library

   C declaration
    char *swe_get_library_path(char *spath);

[1mfunction swe_get_current_file_data (ifno)[0m
    This is a function mostly for debug purposes. It is also useful to find
    out the time range offered by an asteroid file. The function should only
    be used directly AFTER a successful call to swe_calc() or swe_fixstar.

    It delivers information about the last used file, depending on parameter
    ifno:

      ifno = 0     planet file sepl_xxx, used for Sun .. Pluto, or jpl file
      ifno = 1     moon file semo_xxx
      ifno = 2     main asteroid file seas_xxx  if such an object was computed
      ifno = 3     other asteroid or planetary moon file, if such object was computed
      ifno = 4     star file

   Parameters
        int         ifno

   return array
      ['path']              string
      ['tfstart']   double
      ['tfend']             double
      ['denum']             int

      In case of error, NULL is returned.

   C declaration
     char * swe_get_current_file_data(int ifno, double *tfstart, double *tfend, int *denum);

[1mfunction swe_date_conversion (year, month, day, hour, cal_flag)[0m
    Converts a calendar date to julian day number tjd, with validity check for
    date. Parameter cal_flag is a character, j or g, and not the same as the
    constants SE_GREG_CAL and SE_JUL_CAL used in swe_juldate() and
    swe_revjul()

   Parameters
      int           year
      int           month           (1..12)
      int           day                     (1..31)
      double        hour            UT (0.0 .. 23.99999) clock time as double
      string        'j' or 'g' or string beginning with one of these letters

   return value
      double|null    converted tjd, or in case of illegal input date, NULL.

   C declaration
      int swe_date_conversion( int y , int m , int d , double utime, char c, double *tjd);

[1mfunction swe_julday (y, m, d, hour, gregflag)[0m
    Converts a calendar date to julian day number tjd, no validity check for
    date.

   Parameters
      int           year            
      int           month           (1..12)
      int           day                     (1..31)
      double        hour            UT (0.0 .. 23.99999) clock time as double
      int           gregflag        SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

   return value
      double    converted tjd

   C declaration
      double swe_julday(int year, int month, int day, double hour, int gregflag);

[1mfunction swe_revjul (jd, gregflag)[0m
    Converts julian day number to calendar date

   Parameters
      double        jd              julian day number
      int           gregflag        SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

   return array
      ['year']              int
      ['month']             int
      ['day']               int
      ['hour']              double

   C declaration
      void swe_revjul ( double jd, int gregflag, int *jyear, int *jmon, int *jday, double *jut);

[1mfunction swe_jdet_to_utc (tjd_et, gregflag)[0m
    Converts julian day number / time in Ephemeris time to date and time in
    UTC

   Parameters
      double        tjd_et          julian day number
      int           gregflag        SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

   return array
      ['year']      int
      ['month']     int
      ['day']       int
      ['hour']      int
      ['min']       int
      ['sec']       double

   C declaration
      void swe_jdet_to_utc (double tjd_et, int32 gregflag, int32 *iyear, int32 *imonth, int32 *iday, int32 *ihour, int32 *imin, double *dsec);

[1mfunction swe_jdut1_to_utc(tjd_ut, gregflag)[0m
    Converts julian day number / time in UT to date and time in UTC

   Parameters
      double    tjd_ut              julian day number and time in UT
      int       gregflag    SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

   return array
      ['year']  int
      ['month'] int
      ['day']   int
      ['hour']  int
      ['min']   int
      ['sec']       double

   C declaration
      void swe_jdut1_to_utc (double tjd_ut, int32 gregflag, int32 *iyear, int32 *imonth, int32 *iday, int32 *ihour, int32 *imin, double *dsec);

[1mfunction swe_utc_to_jd(year, month, day, hour, min, dsec, gregflag)[0m
    Converts a calendar date to julian day number tjd, no validity check for
    date.

   Parameters
      int           year
      int           month   (1..12)
      int           day             (1..31)
      int           hour    (0..23)
      int           min             (0..59)
      double        dsec    (0.0 .. 59.99999)
      int           gregflag        SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

   return array
      In case of success

      [0]           double  jd_et   jd in ET (TDT)
      [1]           double  jd_ut   jd in UT (UT1)
      ['rc']        int             0

      In case of error

      ['serr']      string
      ['rc']        int             -1

   C declaration
      int swe_utc_to_jd( int32 iyear, int32 imonth, int32 iday, int32 ihour, int32 imin, double dsec, int32 gregflag, double *dret, char *serr);

[1mfunction swe_utc_time_zone(iyear, imonth, iday, ihour, imin, dsec, d_timezone)[0m
    Converts a calendar date in a zone with time offset d_timezone into a
    calendar date in UT (UT1).

   Parameters
      int           year
      int           month   (1..12)
      int           day             (1..31)
      int           hour    (0..23)
      int           min             (0..59)
      double        dsec    (0.0 .. 59.99999)
      double        d_timezone      offset of time zone to UT, in hours as double

   return array
      ['year']      int
      ['month']     int
      ['day']       int
      ['hour']      int
      ['min']       int
      ['sec']       double

   C declaration
      void swe_utc_time_zone( int32 iyear, int32 imonth, int32 iday, int32 ihour, int32 imin, double dsec, double d_timezone, int32 *iyear_out, int32 *imonth_out, int32 *iday_out, int32 *ihour_out, int32 *imin_out, double *dsec_out);

[1mfunction swe_houses(tjd_ut, geolat, geolon, hsys)[0m
    calculated house cusps for given date/time, location and house system

   Parameters
      double        tjd_ut      Julian day in Universal Time.
      double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
      double                geolon          longitude -180.00 .. 180.00 (east postive, sowest negative)
      string                hsys            first letter indicates house system, default 'P' for Placidus

   return array
      ['cusps']     array of 13 or 37 doubles
      ['ascmc']     array of 10 doubles
      ['rc']        int     return flag, < 0 in case of error

   C declaration
      int swe_houses( double tjd_ut, double geolat, double geolon, int hsys, double *cusps, double *ascmc);

[1mfunction swe_houses_ex(tjd_ut, iflag, geolat, geolon, hsys)[0m
    calculated house cusps for given date/time, location and house system

   Parameters
      double        tjd_ut      Julian day in Universal Time.
      int                   iflag
      double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
      double                geolon          longitude -180.00 .. 180.00 (east postive, sowest negative)
      string                hsys            first letter indicates house system, default 'P' for Placidus

   return array
      ['cusps']     array of 13 or 37 doubles
      ['ascmc']     array of 10 doubles
      ['rc']        int     return flag, < 0 in case of error

   C declaration
      int swe_houses_ex( double tjd_ut, int iflag, double geolat, double geolon, int hsys, double *cusps, double *ascmc);

[1mfunction swe_houses_ex2(tjd_ut, iflag, geolat, geolon, hsys)[0m
    calculated house cusps for given date/time, location and house system

   Parameters
      double        tjd_ut      Julian day in Universal Time.
      int                   iflag
      double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
      double                geolon          longitude -180.00 .. 180.00 (east postive, sowest negative)
      string                hsys            first letter indicates house system, default 'P' for Placidus

   return array
      ['cusps']                     array of 13 or 37 doubles
      ['ascmc']                     array of 10 doubles
      ['cusp_speed']        array of 13 or 37 doubles
      ['ascmc_speed']       array of 10 doubles
      ['rc']                        int     return flag, < 0 in case of error
      ['serr']                      string

   C declaration
      int swe_houses_ex2( double tjd_ut, int iflag, double geolat, double geolon, int hsys, double *cusps, double *ascmc, double *cusp_speed, double *ascmc_speed, char *serr);

[1mfunction swe_houses_armc(armc, geolat, eps, hsys)[0m
    calculated house cusps for given armc, latitude, obliquity and house
    system

   Parameters
      double        armc            0.00 .. 360.00
      double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
      double                eps                     obliquity of the ecliptic
      string                hsys            first letter indicates house system, default 'P' for Placidus

   return array
      ['cusps']     array of 13 or 37 doubles
      ['ascmc']     array of 10 doubles
      ['rc']        int     return flag, < 0 in case of error

   C declaration
      int swe_houses_armc( double armc, double geolat, double eps, int hsys, double *cusps, double *ascmc);

[1mfunction swe_houses_armc_ex2(armc, geolat, eps, hsys)[0m
    calculated house cusps for given armc, latitude, obliquity and house
    system

   Parameters
      double        armc            0.00 .. 360.00
      double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
      double                eps                     obliquity of the ecliptic
      string                hsys            first letter indicates house system, default 'P' for Placidus

   return array
      ['cusps']                     array of 13 or 37 doubles
      ['ascmc']                     array of 10 doubles
      ['cusp_speed']        array of 13 or 37 doubles
      ['ascmc_speed']       array of 10 doubles
      ['rc']                        int     return flag, < 0 in case of error
      ['serr']                      string

   C declaration
      int swe_houses_armc_ex2( double armc, double geolat, double eps, int hsys, double *cusps, double *ascmc, double *cusp_speed, double *ascmc_speed, char *serr);

[1mfunction swe_house_pos(armc, geolat, eps, hsys, xpin0, xpin1)[0m
    calculated house position of object for given armc, latitude, obliquity
    and house system

   Parameters
      double        armc            0.00 .. 360.00
      double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
      double                eps                     obliquity of the ecliptic
      string                hsys            first letter indicates house system, default 'P' for Placidus
      double                xpin0           longitude of object
      double                xpin1           latitude of object

   return value
            double          house position

            or, in case of error

            string          error message

   C declaration
      double swe_house_pos(double armc, double geolat, double eps, int hsys, double *xpin, char *serr)

[1mfunction swe_house_name(hsys)[0m
    Get the name of a house system

   Parameters
      string                hsys            first letter indicates house system, default 'P' for Placidus

   return value
            string          name of house system

            or fail if system unknown.

   C declaration
      char *swe_house_name(int hsys)

[1mfunction swe_azalt(tjd_ut, calc_flag, geolon, geolat, geoalt, atpress, attemp, xin0, xin1)[0m
    Computes azimut and height, from either ecliptic or equatorial coordinates

   Parameters
      double        tjd_ut      
      int           calc_flag
      double                geolon          longitude
      double                geolat          latitude
      double                geoalt          altitude above sea
      double                atpress         atmospheric pressure
      double                attemp          atmospheric temperature
      double                xin0            longitude of object
      double                xin1            latitude of object

   return array
      [0..1]                        array of 2 doubles: 
                         xaz[0] = azimuth
                                             xaz[1] = true altitude
                                             xaz[2] = apparent altitude

   C declaration
      void  swe_azalt( double tjd_ut, int32  calc_flag, double *geopos, double atpress, double attemp, double *xin, double *xaz)

[1mfunction swe_azalt_rev(tjd_ut, iflag, xin0, xin1)[0m
    computes either ecliptical or equatorial coordinates from azimuth and true
    altitude in degrees.

   Parameters
      double        tjd_ut      
      int           iflag           either SE_HOR2ECL or SE_HOR2EQU
      double                xin0            azimut, in degrees
      double                xin1            true altitude, in degrees

   return array
      [0..2]                        array of 3 doubles: 
                         xout[0] = longitude
                         xout[1] = latitude

   C declaration
      void  swe_azalt_rev( double tjd_ut, int32  calc_flag, double *geopos, double *xin, double *xout)

[1mfunction swe_rise_trans(tjd_ut, ipl, starname, epheflag, rsmi, geolon, geolat, geoalt, atpress, attemp)[0m
    rise, set, and meridian transits of sun, moon, planets, and stars

   Parameters
      double        tjd_ut      
      int           ipl             planet number
      string        starname        (used instead of planet if not null or empty)
      int           epheflag
      int           rsmi        flag combination, defines what is computed
      double                geolon          longitude
      double                geolat          latitude
      double                geoalt          altitude above sea
      double                atpress         atmospheric pressure
      double                attemp          atmospheric temperature

   return array
      [0..9]                        array of 10 doubles
      ['star']              string, present only if starname was used in call parameters
      ['rc']                        int     return flag, < 0 in case of error
  
      in case of error
      ['rc']                        int     < 0 in case of error
      ['serr']                      string

   C declaration
      int  swe_rise_trans( double tjd_ut, int32 ipl, char *starname, int32 epheflag, int32 rsmi, double *geopos, double atpress, double attemp, double *tret, char *serr)

[1mfunction swe_rise_trans_true_hor(tjd_ut, ipl, starname, epheflag, rsmi, geolon, geolat, geoalt, atpress, attemp, horhgt)[0m
    rise, set, and meridian transits of sun, moon, planets, and stars

   Parameters
      double        tjd_ut      
      int           ipl             planet number
      string        starname        (used instead of planet if not null or empty)
      int           epheflag
      int           rsmi        flag combination, defines what is computed
      double                geolon          longitude
      double                geolat          latitude
      double                geoalt          altitude above sea
      double                atpress         atmospheric pressure
      double                attemp          atmospheric temperature
      double                horhgt          height of horizon

   return array
      [0..9]                        array of 10 doubles
      ['star']              string, present only if starname was used in call parameters
      ['rc']                        int     return flag, < 0 in case of error
  
      in case of error
      ['rc']                        int     < 0 in case of error
      ['serr']                      string

   C declaration
      int  swe_rise_trans_true_hor( double tjd_ut, int32 ipl, char *starname, int32 epheflag, int32 rsmi, double *geopos, double atpress, double attemp, double horhgt, double *tret, char *serr)

