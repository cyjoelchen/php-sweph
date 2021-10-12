# About pod documentation comments

Pod means Plain Old Documentation and comes from the world of Perl, a programming language similar to PHP.
To extract the documenation from this file, type

perldoc sweph.c

see also https://perldoc.perl.org/perlpod

# function swe\_calc(tjd\_et, ipl, iflag)

calculate position of planet ipl with time in Ephemeris Time (TDT)

### Parameters

    double        tjd_et      Julian day in Ephemeris Time.
    nt           ipl         Planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]        double  position and speed vector xx
    ['serr']      string  optional error message
    ['rc']        int             return flag, < 0 in case of error

### C declaration

    int swe_calc ( double tjd_et, int ipl, int iflag, double* xx, char* serr);

# function swe\_calc\_ut(tjd\_ut, ipl, iflag)

calculate position of planet ipl with time in Universal Time UT

### Parameters

    double        tjd_ut      Julian day in Universal Time.
    int           ipl         Planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]                position and speed vector xx
    ['serr']              optional error message
    ['rc']                return flag, < 0 in case of error

### C declaration

    int swe_calc_ut ( double tjd_ut, int ipl, int iflag, double* xx, char* serr);

# function swe\_calc\_pctr(tjd\_et, ipl, iplctr, iflag)

calculate position of planet ipl relative to a center object iplctr

### Parameters

    double        tjd_et      Julian day in Ephemeris Time.
    int           ipl         Target planet/body/object number or constant.
    int           iplctr      Center planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]                double  position and speed vector xx
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_calc_pctr ( double tjd_et, int ipl, int iplctr, int iflag, double* xx, char* serr);

# function swe\_solcross(x2cross, jd\_et, iflag)

computes moment of Sun's crossing over some longitude

### Parameters

    double                x2cross     zodiac position to be crossed
    double        jd_et      start date in Ephemeris Time.
    int           iflag       Flag bits for computation requirements, e.g.
                                 SEFLG_HELCTR (crossing of Earth instead of Sun)
                                             SEFLG_TRUEPOS
                                             SEFLG_NONUT
                                             SEFLG_EQUATORIAL

### return array

    ['jx']                double  crossing date/time
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    double swe_solcross(double x2cross, double jd_et, int flag, char *serr)

# function swe\_solcross\_ut(x2cross, jd\_ut, iflag)

computes moment of Sun's crossing over some longitude

### Parameters

    double                x2cross     zodiac position to be crossed
    double        jd_ut      start date in Universal Time
    int           iflag       Flag bits for computation requirements, e.g.
                                 SEFLG_HELCTR (crossing of Earth instead of Sun)
                                             SEFLG_TRUEPOS
                                             SEFLG_NONUT
                                             SEFLG_EQUATORIAL

### return array

    ['jx']                double  crossing date/time
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    double swe_solcross_ut(double x2cross, double jd_ut, int flag, char *serr)

# function swe\_mooncross(x2cross, jd\_et, iflag)

computes moment of Moon's crossing over some longitude

### Parameters

    double                x2cross     zodiac position to be crossed
    double        jd_et      start date in Ephemeris Time.
    int           iflag       Flag bits for computation requirements, e.g.
                                 SEFLG_HELCTR (crossing of Earth instead of Sun)
                                             SEFLG_TRUEPOS
                                             SEFLG_NONUT
                                             SEFLG_EQUATORIAL

### return array

    ['jx']                double  crossing date/time
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    double swe_mooncross(double x2cross, double jd_et, int flag, char *serr)

# function swe\_mooncross\_ut(x2cross, jd\_ut, iflag)

computes moment of Moon's crossing over some longitude

### Parameters

    double                x2cross     zodiac position to be crossed
    double        jd_ut      start date in Universal Time
    int           iflag       Flag bits for computation requirements, e.g.
                                 SEFLG_HELCTR (crossing of Earth instead of Sun)
                                             SEFLG_TRUEPOS
                                             SEFLG_NONUT
                                             SEFLG_EQUATORIAL

### return array

    ['jx']                double  crossing date/time
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    double swe_mooncross_ut(double x2cross, double jd_ut, int flag, char *serr)

# function swe\_mooncross\_node(jd\_et, iflag)

computes Moon's crossing its true node, i.e. through zero latitude

### Parameters

    double        jd_et      start date in Ephemeris Time.
    int           iflag       Flag bits for computation requirements, e.g.

### return array

    ['jx']                double  crossing date/time
    ['xlon']              double  longitude at crossing time
    ['xlat']              double  latitude at crossing time (very near zero)
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    double swe_mooncross_node(double jd_et, int flag, double *xlon, double *xlat, char *serr)

# function swe\_mooncross\_node\_ut(jd\_ut, iflag)

computes Moon's crossing its true node, i.e. through zero latitude

### Parameters

    double        jd_ut      start date in Universal Time
    int           iflag       Flag bits for computation requirements, e.g.

### return array

    ['jx']                double  crossing date/time
    ['xlon']              double  longitude at crossing time
    ['xlat']              double  latitude at crossing time (very near zero)
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    double swe_mooncross_node_ut(double jd_ut, int flag, double *xlon, double *xlat, char *serr)

# function swe\_helio\_cross(ipl, x2cross, jd\_et, iflag, dir)

computes a planet's heliocentric  crossing over some longitude

### Parameters

    int                   ipl                     planet nuber
    double                x2cross     zodiac position to be crossed
    double        jd_et      start date in Ephemeris Time.
    int           iflag       Flag bits for computation requirements, e.g.
                                             SEFLG_TRUEPOS
                                             SEFLG_NONUT
                                             SEFLG_EQUATORIAL
    dir                   int                     direction of search
                                                             >= 0    forward in time
                                                             -1      backward in time

### return array

    ['jx']                double  crossing date/time
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_helio_cross(int ipl, double x2cross, double jd_et, int iflag, int dir, double *jd_cross, char *serr)

# function swe\_helio\_cross\_ut(ipl, x2cross, jd\_ut, iflag, dir)

computes a planet's heliocentric  crossing over some longitude

### Parameters

    int                   ipl                     planet nuber
    double                x2cross     zodiac position to be crossed
    double        jd_ut      start date in Universal Time.
    int           iflag       Flag bits for computation requirements, e.g.
                                             SEFLG_TRUEPOS
                                             SEFLG_NONUT
                                             SEFLG_EQUATORIAL
    dir                   int                     direction of search
                                                             >= 0    forward in time
                                                             -1      backward in time

### return array

    ['jx']                double  crossing date/time
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_helio_cross_ut(int ipl, double x2cross, double jd_ut, int iflag, int dir, double *jd_cross, char *serr)

# function swe\_fixstar(star, tjd\_et, iflag)

calculate position of a star with time in Ephemeris Time (TDT)

### Parameters

    string        star        Name of fixed star to be searched, returned name of found star.
    double        tjd_et      Julian day in Ephemeris Time.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]                double  position and speed vector xx
    ['star']              string  returned star name, usually different from input
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_fixstar(char *star, double tjd_et, int32 iflag, double *xx, char *serr);

# function swe\_fixstar2(star, tjd\_et, iflag)

calculate position of a star with time in Ephemeris Time (TDT)

### Parameters

    string        star        Name of fixed star, or string with line number in star file
    double        tjd_et      Julian day in Ephemeris Time.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]                double  position and speed vector xx
    ['star']              string  returned star name, usually different from input
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_fixstar2(char *star, double tjd_et, int32 iflag, double *xx, char *serr);

# function swe\_fixstar\_ut(star, tjd\_ut, iflag)

calculate position of a star with time in Universal Time (UT)

### Parameters

    string        star        Name of fixed star to be searched, returned name of found star.
    double        tjd_ut      Julian day in Universal Time.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]                double  position and speed vector xx
    ['star']              string  returned star name, usually different from input
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_fixstar_ut(char *star, double tjd_ut, int32 iflag, double *xx, char *serr);

# function swe\_fixstar2\_ut(star, tjd\_ut, iflag)

calculate position of a star with time in Universal Time (UT)

### Parameters

    string        star        Name of fixed star, or string with line number in star file
    double        tjd_ut      Julian day in Universal Time.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..5]                double  position and speed vector xx
    ['star']              string  returned star name, usually different from input
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

    int swe_fixstar2_ut(char *star, double tjd_ut, int32 iflag, double *xx, char *serr);

# function swe\_fixstar\_mag(star)

deliver magnitude of star

### Parameters

    string        star        Name of fixed star to be searched

### return array

    ['mag']               double  star magnitude, in case of success
    ['star']              string  returned star name, usually different from input
    ['rc']                int             return flag, < 0 in case of error
    ['serr']              string  optional error message

### C declaration

    int swe_fixstar_mag(char *star, double *mag, char *serr);

# function swe\_fixstar2\_mag(star)

deliver magnitude of star

### Parameters

    string        star        Name of fixed star to be searched

### return array

    ['mag']               double  star magnitude, in case of success
    ['star']              string  returned star name, usually different from input
    ['rc']                int             return flag, < 0 in case of error
    ['serr']              string  optional error message

### C declaration

    int swe_fixstar2_mag(char *star, double *mag, char *serr);

# function swe\_close()

close SE and release resources

### Parameters (none)

### return (none)

### C declaration

void swe\_close()

# function swe\_set\_ephe\_path(path)

Define the path where SE ephemeris files reside

### Parameters

    string      path        Single directory name or a list of directories, searched in sequence.

### return (none)

### C declaration

void swe\_set\_ephe\_path(char \*path);

# function swe\_set\_jpl\_file(fname)

Define the file name for a JPL ephemeris file, used with flag SEFLG\_JPLEPH

### Parameters

    string      fname       File name of JPL ephemeris (must be sibling of ephemeris files).

### return (none)

### C declaration

void swe\_set\_jpl\_file(char \*fname);

# function swe\_get\_planet\_name(ipl)

get the name of a planet, asteroid or fictitious object

### Parameters

    int         ipl         Planet/body/object number or constant.

### return string

In case of error, an error message is returned instead of a planet name.

### C declaration

(char \*) swe\_get\_planet\_name(int ipl, char \*spname);

# function swe\_set\_topo(geolon, geolat, geoalt)

Set topocentric reference places, used with flag SEFLG\_TOPOCTR and some function

### Parameters

    double       geolon      Longitude of location in degrees.
    double       geolat      Latitude of location in degrees.
    double       geoalt      Altitude of location in meters.

### return (none)

### C declaration

void swe\_set\_topo(double geolon, double geolat, double geoalt)

# function swe\_set\_sid\_mode(sid\_mode, t0, ayan\_t0)

Set one of the numerous sidereal modes, used with flag SEFLG\_SIDEREAL and some functions

### Parameters

    int         sid_mode      Number of constant of ayanamsa to use.
    double      t0            Reference date if using SE_SIDM_USER flag, 0 otherwise.
    double      ayan_t0       Initial value of ayanamsa if using SE_SIDM_USER flag, 0 otherwise.

### return (none)

### C declaration

void swe\_set\_sid\_mode(int32 sid\_mode, double t0, double ayan\_t0)

# function swe\_get\_ayanamsa (tjd\_et)

Compute the ayanamsa without nutation.

### Parameters

    double         tjd_et      Julian day in Ephemeris Time.

### return double

### C declaration

double swe\_get\_ayanamsa(double tjd\_et);

# function swe\_get\_ayanamsa\_ex(tjd\_et, iflag)

Compute the ayanamsa with or without nutation, depending on flag.

### Parameters

    double      tjd_et      Julian day in Ephemeris Time.
    int         iflag       Flag bits for computation requirements.

### return array

    [
        'daya' => (double) Value of ayanamsa.
        'serr' => (string) Error message or empty string.
    ]

### C declaration

int32 swe\_get\_ayanamsa\_ex(double tjd\_et, int32 iflag, double \*daya, char \*serr);

# function swe\_get\_ayanamsa\_ut(tjd\_ut)

Compute the ayanamsa without nutation.

### Parameters

    double         tjd_ut      Julian day in Universal Time.

### return

        double

### C declaration

double swe\_get\_ayanamsa\_ut(double tjd\_ut);

# function swe\_get\_ayanamsa\_ex\_ut (tjd\_ut, iflag)

Get ayanamsa value in current sidereal mode, time in UT

### Parameters

    double      tjd_ut      Julian day in Universal Time.
    int         iflag       Flag bits for computation requirements.

### return array

    ['daya']              double  ayanamsa value
    ['serr']              string  optional error message
    ['rc']                int             return flag, < 0 in case of error

### C declaration

int32 swe\_get\_ayanamsa\_ex\_ut(double tjd\_ut, int32 iflag, double \*daya, char \*serr);                 

# function swe\_get\_ayanamsa\_name (isidmode)

Get ayanamsa name for this  sidereal mode

### Parameters

    int         isidmode      Number or constant of sidereal mode.

### return string

### C declaration

const char \*swe\_get\_ayanamsa\_name(int32 isidmode);

# function swe\_version()

find out version number of your Swiss Ephemeris version

### Parameters (none)

### return string

Version information of the Swiss Ephemeris library,
different from the version of this PHP extension.

### C declaration

char \*swe\_version(char\* svers);

# function swe\_get\_library\_path()

Path to the SE PHP extension library file

### Parameters (none)

### return 

        string  path to currently used library

### C declaration

char \*swe\_get\_library\_path(char \*spath);

# function swe\_get\_current\_file\_data (ifno)

This is a function mostly for debug purposes. It is also useful to find out the time range offered by
an asteroid file. The function should only be used directly AFTER a successful call to swe\_calc() or
swe\_fixstar.

It delivers information about the last used file, depending on parameter ifno:

    ifno = 0     planet file sepl_xxx, used for Sun .. Pluto, or jpl file
    ifno = 1     moon file semo_xxx
    ifno = 2     main asteroid file seas_xxx  if such an object was computed
    ifno = 3     other asteroid or planetary moon file, if such object was computed
    ifno = 4     star file

### Parameters 

    int         ifno

### return array

    ['path']              string
    ['tfstart']   double
    ['tfend']             double
    ['denum']             int

    In case of error, NULL is returned.

### C declaration

    char * swe_get_current_file_data(int ifno, double *tfstart, double *tfend, int *denum);

# function swe\_date\_conversion (year, month, day, hour, cal\_flag)

Converts a calendar date to julian day number tjd, with validity check for date.
Parameter cal\_flag is a character, j or g, and not the same as the constants SE\_GREG\_CAL and
SE\_JUL\_CAL used in swe\_juldate() and swe\_revjul()

### Parameters

    int           year
    int           month           (1..12)
    int           day                     (1..31)
    double        hour            UT (0.0 .. 23.99999) clock time as double
    string        'j' or 'g' or string beginning with one of these letters

### return value

    double|null    converted tjd, or in case of illegal input date, NULL.

### C declaration

    int swe_date_conversion( int y , int m , int d , double utime, char c, double *tjd);

# function swe\_julday (y, m, d, hour, gregflag)

Converts a calendar date to julian day number tjd, no validity check for date.

### Parameters

    int           year            
    int           month           (1..12)
    int           day                     (1..31)
    double        hour            UT (0.0 .. 23.99999) clock time as double
    int           gregflag        SE_GREG_CAL (==1, default) or SE_JUL_CAL (==0)

### return value

    double    converted tjd

### C declaration

    double swe_julday(int year, int month, int day, double hour, int gregflag); 

# function swe\_revjul (jd, gregflag)

Converts julian day number to calendar date

### Parameters

    double        jd              julian day number
    int           gregflag        SE_GREG_CAL (==1, default) or SE_JUL_CAL (==0)

### return array

    ['year']              int
    ['month']             int
    ['day']               int
    ['hour']              double
    ['ihour']             int
    ['imin']              int
    ['isec']              int
    ['dsec']              double

### C declaration

    void swe_revjul ( double jd, int gregflag, int *jyear, int *jmon, int *jday, double *jut);

# function swe\_jdet\_to\_utc (tjd\_et, gregflag)

Converts julian day number / time in Ephemeris time to date and time in UTC 

### Parameters

    double        tjd_et          julian day number
    int           gregflag        SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

### return array

    ['year']      int
    ['month']     int
    ['day']       int
    ['hour']      int
    ['min']       int
    ['sec']       double

### C declaration

    void swe_jdet_to_utc (double tjd_et, int32 gregflag, int32 *iyear, int32 *imonth, int32 *iday, int32 *ihour, int32 *imin, double *dsec);

# function swe\_jdut1\_to\_utc(tjd\_ut, gregflag)

Converts julian day number / time in UT to date and time in UTC 

### Parameters

    double    tjd_ut              julian day number and time in UT
    int       gregflag    SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

### return array

    ['year']  int
    ['month'] int
    ['day']   int
    ['hour']  int
    ['min']   int
    ['sec']       double

### C declaration

    void swe_jdut1_to_utc (double tjd_ut, int32 gregflag, int32 *iyear, int32 *imonth, int32 *iday, int32 *ihour, int32 *imin, double *dsec);

# function swe\_utc\_to\_jd(year, month, day, hour, min, dsec, gregflag)

Converts a calendar date to julian day number tjd, no validity check for date.

### Parameters

    int           year
    int           month   (1..12)
    int           day             (1..31)
    int           hour    (0..23)
    int           min             (0..59)
    double        dsec    (0.0 .. 59.99999)
    int           gregflag        SE_GREG_CAL (==1) or SE_JUL_CAL (==0)

### return array

    In case of success

    [0]           double  jd_et   jd in ET (TDT)
    [1]           double  jd_ut   jd in UT (UT1)
    ['rc']        int             0

    In case of error

    ['serr']      string
    ['rc']        int             -1

### C declaration

    int swe_utc_to_jd( int32 iyear, int32 imonth, int32 iday, int32 ihour, int32 imin, double dsec, int32 gregflag, double *dret, char *serr);

# function swe\_utc\_time\_zone(iyear, imonth, iday, ihour, imin, dsec, d\_timezone)

Converts a calendar date in a zone with time offset d\_timezone into a calendar date in UT (UT1).

### Parameters

    int           year
    int           month   (1..12)
    int           day             (1..31)
    int           hour    (0..23)
    int           min             (0..59)
    double        dsec    (0.0 .. 59.99999)
    double        d_timezone      offset of time zone to UT, in hours as double

### return array

    ['year']      int
    ['month']     int
    ['day']       int
    ['hour']      int
    ['min']       int
    ['sec']       double

### C declaration

    void swe_utc_time_zone( int32 iyear, int32 imonth, int32 iday, int32 ihour, int32 imin, double dsec, double d_timezone, int32 *iyear_out, int32 *imonth_out, int32 *iday_out, int32 *ihour_out, int32 *imin_out, double *dsec_out); 

# function swe\_houses(tjd\_ut, geolat, geolon, hsys)

calculated house cusps for given date/time, location and house system

### Parameters

    double        tjd_ut      Julian day in Universal Time.
    double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
    double                geolon          longitude -180.00 .. 180.00 (east postive, sowest negative)
    string                hsys            first letter indicates house system, default 'P' for Placidus

### return array

    ['cusps']     array of 13 or 37 doubles
    ['ascmc']     array of 10 doubles
    ['rc']        int     return flag, < 0 in case of error

### C declaration

    int swe_houses( double tjd_ut, double geolat, double geolon, int hsys, double *cusps, double *ascmc);

# function swe\_houses\_ex(tjd\_ut, iflag, geolat, geolon, hsys)

calculated house cusps for given date/time, location and house system

### Parameters

    double        tjd_ut      Julian day in Universal Time.
    int                   iflag
    double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
    double                geolon          longitude -180.00 .. 180.00 (east postive, sowest negative)
    string                hsys            first letter indicates house system, default 'P' for Placidus

### return array

    ['cusps']     array of 13 or 37 doubles
    ['ascmc']     array of 10 doubles
    ['rc']        int     return flag, < 0 in case of error

### C declaration

    int swe_houses_ex( double tjd_ut, int iflag, double geolat, double geolon, int hsys, double *cusps, double *ascmc);

# function swe\_houses\_ex2(tjd\_ut, iflag, geolat, geolon, hsys)

calculated house cusps for given date/time, location and house system

### Parameters

    double        tjd_ut      Julian day in Universal Time.
    int                   iflag
    double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
    double                geolon          longitude -180.00 .. 180.00 (east postive, sowest negative)
    string                hsys            first letter indicates house system, default 'P' for Placidus

### return array

    ['cusps']                     array of 13 or 37 doubles
    ['ascmc']                     array of 10 doubles
    ['cusp_speed']        array of 13 or 37 doubles
    ['ascmc_speed']       array of 10 doubles
    ['rc']                        int     return flag, < 0 in case of error
    ['serr']                      string

### C declaration

    int swe_houses_ex2( double tjd_ut, int iflag, double geolat, double geolon, int hsys, double *cusps, double *ascmc, double *cusp_speed, double *ascmc_speed, char *serr);

# function swe\_houses\_armc(armc, geolat, eps, hsys)

calculated house cusps for given armc, latitude, obliquity and house system

### Parameters

    double        armc            0.00 .. 360.00
    double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
    double                eps                     obliquity of the ecliptic
    string                hsys            first letter indicates house system, default 'P' for Placidus

### return array

    ['cusps']     array of 13 or 37 doubles
    ['ascmc']     array of 10 doubles
    ['rc']        int     return flag, < 0 in case of error

### C declaration

    int swe_houses_armc( double armc, double geolat, double eps, int hsys, double *cusps, double *ascmc);

# function swe\_houses\_armc\_ex2(armc, geolat, eps, hsys)

calculated house cusps for given armc, latitude, obliquity and house system

### Parameters

    double        armc            0.00 .. 360.00
    double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
    double                eps                     obliquity of the ecliptic
    string                hsys            first letter indicates house system, default 'P' for Placidus

### return array

    ['cusps']                     array of 13 or 37 doubles
    ['ascmc']                     array of 10 doubles
    ['cusp_speed']        array of 13 or 37 doubles
    ['ascmc_speed']       array of 10 doubles
    ['rc']                        int     return flag, < 0 in case of error
    ['serr']                      string

### C declaration

    int swe_houses_armc_ex2( double armc, double geolat, double eps, int hsys, double *cusps, double *ascmc, double *cusp_speed, double *ascmc_speed, char *serr);

# function swe\_house\_pos(armc, geolat, eps, hsys, xpin0, xpin1)

calculated house position of object for given armc, latitude, obliquity and house system

### Parameters

    double        armc            0.00 .. 360.00
    double                geolat          latitude -90.00 .. 90.00 (north postive, south negative)
    double                eps                     obliquity of the ecliptic
    string                hsys            first letter indicates house system, default 'P' for Placidus
    double                xpin0           longitude of object
    double                xpin1           latitude of object

### return value

        double          house position

        or, in case of error

        string          error message

### C declaration

    double swe_house_pos(double armc, double geolat, double eps, int hsys, double *xpin, char *serr)

# function swe\_house\_name(hsys)

Get the name of a house system

### Parameters

    string                hsys            first letter indicates house system, default 'P' for Placidus

### return value

        string          name of house system

        or fail if system unknown.

### C declaration

    char *swe_house_name(int hsys)

# function swe\_gauquelin\_sector(tjd\_ut, ipl, starname, iflag, imeth, geolon, geolat, geoalt, atpress, attemp)

finds the gauquelin sector position of a planet or fixed star at given date/time (UT)

### Parameters

    tjd_ut        double          Julian day number, Universal Time.
    ipl           int              Planet 
    star          string   Star name, if a star placement is searched
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))
    imeth         int      method: 0 = with lat., 1 = without lat., 
                                           2 = from rise/set, 3 = from rise/set with refraction 
    double                geolon          longitude
    double                geolat          latitude
    double                geoalt          altitude above sea
    double                atpress         atmospheric pressure
    double                attemp          atmospheric temperature

### return array
      rc => (int)            ERR or OK 
      serr    => (string)         Error string, on error only

        in case of success;
      star    => (string)         Corrected star name, if input starname was given
      gsect    => (double) 

### C declaration

    int swe_gauquelin_sector(double t_ut, int32 ipl, char *starname, int32 iflag, int32 imeth, double *geopos, double atpress, double attemp, double *dgsect, char *serr);

# function swe\_sol\_eclipse\_where(tjd\_ut, iflag);

Finds the place on earth where the solar eclipse is maximal at a given
time. 

Algorithm for the central line is taken from Montenbruck, pp. 179ff.,
with the exception, that we consider refraction for the maxima of
partial and noncentral eclipses.
Geographical positions are referred to sea level / the mean ellipsoid.

Errors:

    - from uncertainty of JPL-ephemerides (0.01 arcsec): 
         about 40 meters
    - from displacement of shadow points by atmospheric refraction:
         a few meters 
    - from deviation of the geoid from the ellipsoid 
         a few meters
    - from polar motion
         a few meters

    For geographical locations that are interesting for observation, the error is always < 100 m.
    However, if the sun is close to the horizon, all of these errors can grow up to a km or more. 

### Parameters

    tjd_ut        double   Julian day number, Universal Time
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))

### return array

      retflag => (int)            ERR or eclipse type
                 
                 Function returns as 'retflag':
                 -1 (ERR)     on error (e.g. if swe_calc() for sun or moon fails)
                 0            if there is no solar eclipse at tjd
                 SE_ECL_TOTAL
                 SE_ECL_ANNULAR
                 SE_ECL_TOTAL | SE_ECL_CENTRAL
                 SE_ECL_TOTAL | SE_ECL_NONCENTRAL
                 SE_ECL_ANNULAR | SE_ECL_CENTRAL
                 SE_ECL_ANNULAR | SE_ECL_NONCENTRAL
                 SE_ECL_PARTIAL

      serr    => (string)         Error string, on error only
      geopos  => array of 2 doubles, geogr. position where eclipse is maximal
      attr    => array of 11 double:
                 attr[0]        fraction of solar diameter covered by moon (magnitude)
                 attr[1]        ratio of lunar diameter to solar one
                 attr[2]        fraction of solar disc covered by moon (obscuration)
                 attr[3]      diameter of core shadow in km
                 attr[4]        azimuth of sun at tjd
                 attr[5]        true altitude of sun above horizon at tjd
                 attr[6]        apparent altitude of sun above horizon at tjd
                 attr[7]        angular distance of moon from sun in degrees
                 attr[8]        magnitude acc. to NASA;
                                          = attr[0] for partial and attr[1] for annular and total eclipses
                 attr[9]        saros series number
                 attr[10]       saros series member number

### C declaration

        int  swe_sol_eclipse_where( double tjd_ut, int32 ifl, double *geopos, double *attr, char *serr) 

# function swe\_lun\_occult\_where(tjd\_ut, ipl, star, iflag);

Finds the place on earth where the occultation is maximal at a given
time. 

### Parameters

    tjd_ut        double   Julian day number, Universal Time
    ipl           int              Planet occulted
    star          string   Star name, if a star occultation is searched
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))

### return array

      retflag => (int)            ERR or eclipse type
                  There are the following eclipse types for lunar eclipses:
                  SE_ECL_TOTAL, SE_ECL_PARTIAL, SE_ECL_PENUMBRAL
      serr    => (string)         Error string, on error only
      star    => (string)         Corrected star name
      geopos  => array of 2 doubles, geogr. position where eclipse is maximal
      attr    => array of 8 double:
                attr[0] fraction of object's diameter covered by moon (magnitude)
                attr[1] ratio of lunar diameter to object's diameter
                attr[2] fraction of object's disc covered by moon (obscuration)
                attr[3] diameter of core shadow in km
                attr[4] azimuth of object at tjd
                attr[5] true altitude of object above horizon at tjd
                attr[6] apparent altitude of object above horizon at tjd
                attr[7] angular distance of moon from object in degrees

### C declaration

    int swe_lun_occult_where(double tjd, int32 ipl, char *starname, int32 ifl, double *geopos, double *attr, char *serr);

# function swe\_sol\_eclipse\_how(tjd\_ut, iflag, geolng, geolat, geoalt);

Computes attributes of a solar eclipse for given tjd, geo. longitude, geo. latitude, and geo. height.

### Parameters

    tjd_ut        double   Julian day number, Universal Time
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))
    geolng    double       geographic longitude
    geolat    double       geographic latitude
    geoalt    double       altitude above sea level, in meters

### return array

      retflag => (int)            ERR or eclipse type
                 SE_ECL_TOTAL or SE_ECL_ANNULAR or SE_ECL_PARTIAL
         SE_ECL_NONCENTRAL, 
             if 0, no eclipse is visible at geogr. position.

      serr    => (string)         Error string, on error only
          attr   => array of 11 double,
                 attr[0]        fraction of solar diameter covered by moon;
                                            with total/annular eclipses, it results in magnitude acc. to IMCCE.
                 attr[1]        ratio of lunar diameter to solar one
                 attr[2]        fraction of solar disc covered by moon (obscuration)
                 attr[3]        diameter of core shadow in km
                 attr[4]        azimuth of sun at tjd
                 attr[5]        true altitude of sun above horizon at tjd
                 attr[6]        apparent altitude of sun above horizon at tjd
                 attr[7]        elongation of moon in degrees
                 attr[8]        magnitude acc. to NASA;
                                            = attr[0] for partial and attr[1] for annular and total eclipses
                 attr[9]        saros series number
                 attr[10]       saros series member number

### C declaration

        int swe_sol_eclipse_how( double tjd_ut, int32 ifl, double *geopos, double *attr, char *serr)

# function swe\_sol\_eclipse\_when\_loc(tjd\_start, iflag, geopos\[0\], geopos\[1\], geopos\[2\], backw);

When and how is the next solar eclipse at a given geographical position?

### Parameters

    tjd_start     double   Julian day number, Universal Time
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))
    geopos[0] double       geographic longitude
    geopos[1] double       geographic latitude
    geopos[2] double       altitude above sea level, in meters
    backw         int              search backward in time

### return array

      retflag => (int)            ERR or eclipse type
                 SE_ECL_TOTAL or SE_ECL_ANNULAR or SE_ECL_PARTIAL
         SE_ECL_VISIBLE, 
                 SE_ECL_MAX_VISIBLE, 
                 SE_ECL_1ST_VISIBLE, SE_ECL_2ND_VISIBLE
                 SE_ECL_3ST_VISIBLE, SE_ECL_4ND_VISIBLE

      serr    => (string)         Error string, on error only
      tret    => array of 7 double:
                 tret[0]        time of maximum eclipse
                 tret[1]        time of first contact
                 tret[2]        time of second contact
                 tret[3]        time of third contact
                 tret[4]        time of forth contact
                 tret[5]        time of sun rise between first and forth contact
                 tret[6]        time of sun set beween first and forth contact
          attr   => array of 11 double,
                 attr[0]        fraction of solar diameter covered by moon;
                                            with total/annular eclipses, it results in magnitude acc. to IMCCE.
                 attr[1]        ratio of lunar diameter to solar one
                 attr[2]        fraction of solar disc covered by moon (obscuration)
                 attr[3]        diameter of core shadow in km
                 attr[4]        azimuth of sun at tjd
                 attr[5]        true altitude of sun above horizon at tjd
                 attr[6]        apparent altitude of sun above horizon at tjd
                 attr[7]        elongation of moon in degrees
                 attr[8]        magnitude acc. to NASA;
                                            = attr[0] for partial and attr[1] for annular and total eclipses
                 attr[9]        saros series number
                 attr[10]       saros series member number

### C declaration

        int swe_sol_eclipse_when_loc(double tjd_start, int32 ifl, double *geopos, double *tret, double *attr, int32 backward, char *serr)

# function swe\_lun\_occult\_when\_loc(tjd\_ut, ipl, star, iflag, geopos\[0\], geopos\[1\], geopos\[2\], backw);

Finds the next occultation of a celestial body (ipl or star) by the moon,
for a given place on earth.  

There are the following eclipse types for lunar eclipses:
SE\_ECL\_TOTAL, SE\_ECL\_PARTIAL, SE\_ECL\_PENUMBRAL

### Parameters

    tjd_ut        double          Julian day number, Universal Time
    ipl           int             Planet occulted
    star          string|null     Star name, if a star occultation is searched
    iflag         int             (specify ephemeris to be used, cf. swe_calc( ))
    geopos[0]     double          geographic longitude
    geopos[1]     double          geographic latitude
    geopos[2]     double          altitude above sea level, in meters
    backw         int             search backward in time

          If you want to have only one conjunction 
          of the moon with the body tested, add the following flag:
          backward |= SE_ECL_ONE_TRY. If this flag is not set, 
          the function will search for an occultation until it
          finds one. For bodies with ecliptical latitudes > 5,
          the function may search unsuccessfully until it reaches
          the end of the ephemeris.

### return array

      retflag => (int)            ERR or eclipse type
      serr    => (string)         Error string, on error only
      star    => (string)         Corrected star name, if input parameter is not null.
      tret    => array of 10 double:
                  tret[0] time of maximum eclipse
                  tret[1]
                  tret[2] time of partial phase begin (indices consistent with solar eclipses)
                  tret[3] time of partial phase end
                  tret[4] time of totality begin
                  tret[5] time of totality end
                  tret[6] time of penumbral phase begin
                  tret[7] time of penumbral phase end
                  tret[8] time of moonrise, if it occurs during the eclipse
                  tret[9] time of moonset, if it occurs during the eclipse
          attr   => array of 20 double, not all are used
           attr[0] umbral magnitude at tjd
           attr[1] penumbral magnitude
           attr[4] azimuth of moon at tjd
           attr[5] true altitude of moon above horizon at tjd
           attr[6] apparent altitude of moon above horizon at tjd
           attr[7] distance of moon from opposition in degrees
           attr[8] umbral magnitude at tjd (= attr[0])
           attr[9] saros series number (if available; otherwise -99999999)
           attr[10] saros series member number (if available; otherwise -99999999) 

### C declaration

    int swe_lun_occult_when_loc(double tjd_start, int32 ipl, char *starname, int32 ifl,
         double *geopos, double *tret, double *attr, int32 backward, char *serr)

# function swe\_sol\_eclipse\_when\_glob(tjd\_start, iflag, ifltype, backw);

When is the next solar eclipse anywhere on earth?

### Parameters

    tjd_start    double      Julian day number, Universal Time
    iflag     int         (specify ephemeris to be used, cf. swe_calc( ))
    ifltype   int         Eclipse type to be searched; 0 if any type of eclipse is wanted
    backw     int         search backward in time

### return array

      retflag => (int)            ERR or eclipse type
                returns SE_ECL_TOTAL or SE_ECL_ANNULAR or SE_ECL_PARTIAL or SE_ECL_ANNULAR_TOTAL
                                SE_ECL_CENTRAL
                                SE_ECL_NONCENTRAL
      serr    => (string)         Error string, on error only
      tret    => array of 8 double:
        tret[0] time of maximum eclipse
        tret[1] time, when eclipse takes place at local apparent noon
                tret[2] time of eclipse begin
                tret[3] time of eclipse end
                tret[4] time of totality begin
                tret[5] time of totality end
                tret[6] time of center line begin
                tret[7] time of center line end
                tret[8] Unused/not implemented.
                tret[9] Unused/not implemented.

### C declaration

    int swe_sol_eclipse_when_glob(double tjd_start, int32 ifl, int32 ifltype, double *tret, int32 backward, char *serr)

# function swe\_lun\_occult\_when\_glob(tjd\_ut, ipl, star, iflag, ifltype, backw);

Finds the next occultation of a celestial body (ipl or star) by the moon,
no matter where on earth.

There are the following eclipse types for lunar eclipses:
SE\_ECL\_TOTAL, SE\_ECL\_PARTIAL, SE\_ECL\_PENUMBRAL

### Parameters

    tjd_ut        double          Julian day number, Universal Time
    ipl           int             Planet occulted
    star          string|null     Star name, if a star occultation is searched
    iflag         int             (specify ephemeris to be used, cf. swe_calc( ))
    ifltype       int             Eclipse type to be searched; 0 if any type of eclipse is wanted
    backw         int             search backward in time

### return array

      retflag => (int)            ERR or eclipse type
      serr    => (string)         Error string, on error only
      star    => (string)         Corrected star name, if input parameter is not null.
      geopos  => array of 2 doubles, geogr. position where eclipse is maximal
      tret    => array of 8 double:
                tret[0] Time of maximum occultation (UT)
                tret[1] time, when eclipse takes place at local apparent noon
                tret[2] time of eclipse begin
                tret[3] time of eclipse end
                tret[4] time of totality begin
                tret[5] time of totality end
                tret[6] time of center line begin
                tret[7] time of center line end

### C declaration

    int swe_lun_occult_when_glob( double tjd_start, int32 ipl, char *starname, int32 ifl, int32 ifltype, double *tret, int32 backward, char *serr)

# function swe\_lun\_eclipse\_how(tjd\_ut, iflag, geopos\[0\], geopos\[1\], geopos\[2\]);

Computes attributes of a lunar eclipse for given tjd and geopos

There are the following eclipse types for lunar eclipses:
SE\_ECL\_TOTAL, SE\_ECL\_PARTIAL, SE\_ECL\_PENUMBRAL

### Parameters

    tjd_ut        double   Julian day number, Universal Time
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))
    geopos[0] double       geographic longitude
    geopos[1] double       geographic latitude
    geopos[2] double       altitude above sea level, in meters

          If you want to have only one conjunction 
          of the moon with the body tested, add the following flag:
          backward |= SE_ECL_ONE_TRY. If this flag is not set, 
          the function will search for an occultation until it
          finds one. For bodies with ecliptical latitudes > 5,
          the function may search unsuccessfully until it reaches
          the end of the ephemeris.

### return array

      retflag => (int)            ERR or eclipse type, 0 if no eclipse
          serr   => (string)  in case of error
          attr   => array of 20 double, not all are used
           attr[0] umbral magnitude at tjd
           attr[1] penumbral magnitude
           attr[4] azimuth of moon at tjd
           attr[5] true altitude of moon above horizon at tjd
           attr[6] apparent altitude of moon above horizon at tjd
           attr[7] distance of moon from opposition in degrees
           attr[8] umbral magnitude at tjd (= attr[0])
           attr[9] saros series number (if available; otherwise -99999999)
           attr[10] saros series member number (if available; otherwise -99999999) 

### C declaration

    int int32 CALL_CONV swe_lun_eclipse_how( double tjd_ut, int32 ifl, double *geopos, double *attr, char *serr)

# function swe\_lun\_eclipse\_when(tjd\_ut, iflag, ifltype, backw);

When is the next lunar eclipse?  

There are the following eclipse types for lunar eclipses:
SE\_ECL\_TOTAL, SE\_ECL\_PARTIAL, SE\_ECL\_PENUMBRAL

### Parameters

    tjd_ut    double      Julian day number, Universal Time
    iflag     int         (specify ephemeris to be used, cf. swe_calc( ))
    ifltype   int         Eclipse type to be searched; 0 if any type of eclipse is wanted
    backw     int         search backward in time

### return array

      retflag => (int)            ERR or eclipse type
      serr    => (string)         Error string, on error only
      tret    => array of 8 double:
        tret[0] time of maximum eclipse
        tret[1] (unused ?)
        tret[2] time of partial phase begin (indices consistent with solar eclipses)
        tret[3] time of partial phase end
        tret[4] time of totality begin
        tret[5] time of totality end
        tret[6] time of penumbral phase begin
        tret[7] time of penumbral phase end

### C declaration

    int swe_lun_eclipse_when(double tjd_start, int32 ifl, int32 ifltype, double *tret, int32 backward, char *serr);

# function swe\_lun\_eclipse\_when\_loc(tjd\_start, iflag, geopos\[0\], geopos\[1\], geopos\[2\], backw);

When is the next lunar eclipse, observable at a geographic position? 

There are the following eclipse types for lunar eclipses:
SE\_ECL\_TOTAL, SE\_ECL\_PARTIAL, SE\_ECL\_PENUMBRAL

### Parameters

    tjd_start     double   Julian day number, Universal Time
    iflag         int      (specify ephemeris to be used, cf. swe_calc( ))
    geopos[0] double       geographic longitude
    geopos[1] double       geographic latitude
    geopos[2] double       altitude above sea level, in meters
    backw         int              search backward in time

### return array

      retflag => (int)            ERR or eclipse type
      serr    => (string)         Error string, on error only
      tret    => array of 10 double:
                  tret[0] time of maximum eclipse
                  tret[1] (unused ?)
                  tret[2] time of partial phase begin (indices consistent with solar eclipses)
                  tret[3] time of partial phase end
                  tret[4] time of totality begin
                  tret[5] time of totality end
                  tret[6] time of penumbral phase begin
                  tret[7] time of penumbral phase end
                  tret[8] time of moonrise, if it occurs during the eclipse
                  tret[9] time of moonset, if it occurs during the eclipse
          attr   => array of 11 double, not all are used
           attr[0] umbral magnitude at tjd
           attr[1] penumbral magnitude
           attr[4] azimuth of moon at tjd
           attr[5] true altitude of moon above horizon at tjd
           attr[6] apparent altitude of moon above horizon at tjd
           attr[7] distance of moon from opposition in degrees
           attr[8] umbral magnitude at tjd (= attr[0])
           attr[9] saros series number (if available; otherwise -99999999)
           attr[10] saros series member number (if available; otherwise -99999999) 

### C declaration

    int swe_lun_eclipse_when_loc(double tjd_start, int32 ifl, double *geopos, double *tret, double *attr, int32 backward, char *serr);

# function swe\_pheno(tjd\_et, ipl, iflag)

function calculates planetary phenomena

### Parameters

    double       tjd_et      Julian day in Ephemeris Time.
    int           ipl         Planet/body/object number or constant.
    int          iflag       Flag bits for computation requirements.

### return array

      retflag => (int)            ERR or used iflag bits

      serr    => (string)         Error string, on error only
          attr   => array of 6 double,
                attr[0] = phase angle (earth-planet-sun)
                attr[1] = phase (illumined fraction of disc)
                attr[2] = elongation of planet
                attr[3] = apparent diameter of disc
                attr[4] = apparent magnitude
                attr[5] = geocentric horizontal parallax (Moon)

### C declaration

    int swe_pheno(double tjd_et, int32 ipl, int32 iflag, double *attr, char *serr)

# function swe\_pheno\_ut(tjd\_ut, ipl, iflag)

function calculates planetary phenomena

### Parameters

    double       tjd_ut      Julian day in Universal Time.
    int           ipl         Planet/body/object number or constant.
    int          iflag       Flag bits for computation requirements.

### return array

      retflag => (int)            ERR or used iflag bits

      serr    => (string)         Error string, on error only
          attr   => array of 6 double,
                attr[0] = phase angle (earth-planet-sun)
                attr[1] = phase (illumined fraction of disc)
                attr[2] = elongation of planet
                attr[3] = apparent diameter of disc
                attr[4] = apparent magnitude
                attr[5] = geocentric horizontal parallax (Moon)

### C declaration

    int swe_pheno_ut(double tjd_ut, int32 ipl, int32 iflag, double *attr, char *serr)

# function swe\_refrac(inalt, atpress, attemp, calc\_flag)

Transforms apparent to true altitude and vice-versa.

### Parameters

    double                inalt           altitude of object in degrees 
    double                atpress         atmospheric pressure (hectopascal)
    double                attemp          atmospheric temperature °C
    int           calc_flag   either SE_APP_TO_TRUE or  SE_TRUE_TO_APP

### return value

    double        converted altitude

### C declaration

    double swe_refrac(double inalt, double atpress, double attemp, int32 calc_flag)

# function swe\_refrac\_extended(inalt, geoalt, atpress, attemp, lapse\_rate, calc\_flag)

Transforms apparent to true altitude and vice-versa.

This function was created thanks to and with the help of the
archaeoastronomer Victor Reijs.

It is more correct and more skilled than the old function swe\_refrac():
 - it allows correct calculation of refraction for altitudes above sea > 0,
   where the ideal horizon and planets that are visible may have a 
   negative height. (for swe\_refrac(), negative apparent heights do not 
   exist!)
 - it allows to manipulate the refraction constant

### Parameters

    double        inalt           altitude of object in degrees 
    double        geoalt      altitude of observer above sea level in meters 
    double        atpress         atmospheric pressure (hectopascal)
    double        attemp          atmospheric temperature °C
    double        lapse_rate  (dT/dh) [deg K/m]
    int       calc_flag   either SE_APP_TO_TRUE or  SE_TRUE_TO_APP

### return array

    ['rc']        int return code
    [0..3]         array of 4 doubles: 
          [0] true altitude, if possible; otherwise input value
          [1] apparent altitude, if possible; otherwise input value
          [2] refraction
          [3] dip of the horizon

### C declaration

    double swe_refrac_extended(double inalt, double geoalt, double atpress, double attemp, double lapse_rate, int32 calc_flag, double *dret)

# function swe\_heliacal\_ut(tjdstart, geolon, geolat, geoalt, atpress, attemp, athum, atuom, oage, oeyes, omono, ozoom, odia, otrans, objectname, event\_type, helflag)

Compute heliacal risings etc. of a planet or star.

If this is too much for you, set all these values to 0.
The software will then set the following defaults:

\- Pressure 1013.25, temperature 15, relative humidity 40.
\- The values will be modified depending on the altitude of the observer above sea level.

### Parameters

    double      tjdstart        Julian day number of start date for the search, Universal Time.

    double      geolon          Geographic longitude.
    double      geolat          Geographic latitude.
    double      geoalt          Geographic altitude (eye height), in meters.

    double      atpress         Atmospheric pressure in mbar (hPa).
    double      attemp          Atmospheric temperature in C.
    double      athum           Relative humidity in %.
    double      atuom           Unit of measure:
                                < 1 & > 0, then it is the total atmospheric coefficient (ktot)
                                0, then other atmospheric parameters determine the total atmospheric coefficient (ktot)
                                >= 1, then meteorological range (km)

    double      oage            Age of observer in years (default = 36).
    double      oeyes           Snellen ratio of observers eyes (default = 1 = normal).
    double      omono           0 = monocular, 1 = binocular.
    double      ozoom           Telescope magnification: 0 = default to naked eye (binocular), 1 = naked eye.
    double      odia            Optical aperture (telescope diameter) in mm.
    double      otrans          Optical transmission.

    string      objectname      Name string of fixed star or planet.

    int         event_type      Options:
                                SE_HELIACAL_RISING (1): morning first (exists for all visible planets and stars);
                                SE_HELIACAL_SETTING (2): evening last (exists for all visible planets and stars);
                                SE_EVENING_FIRST (3): evening first (exists for Mercury, Venus, and the Moon);
                                SE_MORNING_LAST (4): morning last (exists for Mercury, Venus, and the Moon).

    int         helflag         Ephemeris flag, like iflag in swe_calc(). In addition:
                                SE_HELFLAG_OPTICAL_PARAMS (512);
                                SE_HELFLAG_NO_DETAILS (1024);
                                SE_HELFLAG_VISLIM_DARK (4096);
                                SE_HELFLAG_VISLIM_NOMOON (8192);

### return array

    array of 3 doubles
     [0]: beginning of visibility (Julian day number)
     [1]: optimum visibility (Julian day number; 0 if SE_HELFLAG_AV)
     [2]: end of visibility (Julian day number; 0 if SE_HELFLAG_AV)

### C declaration

    int swe_heliacal_ut(double JDNDaysUTStart, double *dgeo, double *datm, double *dobs, char *ObjectNameIn, int32 TypeEvent, int32 helflag, double *dret, char *serr_ret)

# function swe\_heliacal\_pheno\_ut(tjdstart, geolon, geolat, geoalt, atpress, attemp, athum, atuom, oage, oeyes, omono, ozoom, odia, otrans, objectname, event\_type, helflag)

Provides data that are relevant for the calculation of heliacal risings and settings.

This function does not provide data of heliacal risings and settings,
just some additional data mostly used for test purposes

### Parameters

        Identical to input parameters of swe_heliacal_ut().

### return array

    array of 30 doubles
          see Programmer's manual and C source code in swehel.c

### C declaration

    int swe_heliacal_pheno_ut(double JDNDaysUT, double *dgeo, double *datm, double *dobs, char *ObjectNameIn, int32 TypeEvent, int32 helflag, double *darr, char *serr)

# function swe\_vis\_limit\_mag(tjdstart, geolon, geolat, geoalt, atpress, attemp, athum, atuom, oage, oeyes, omono, ozoom, odia, otrans, objectname, helflag)

Limiting magnitude in dark skies

### Parameters

    Identical to input parameters of swe_heliacal_ut(), except no `event_type`.

### return array

    [
        0 => (double)   limiting visual magnitude (if dret[0] > magnitude of object, then the object is visible);
        1 => (double)   altitude of object;
        2 => (double)   azimuth of object;
        3 => (double)   altitude of sun;
        4 => (double)   azimuth of sun;
        5 => (double)   altitude of moon;
        6 => (double)   azimuth of moon;
        7 => (double)   magnitude of object;
    ]

### C declaration

    int swe_vis_limit_mag(double tjdut, double *dgeo, double *datm, double *dobs, char *ObjectName, int32 helflag, double *dret, char *serr)

# function swe\_azalt(tjd\_ut, calc\_flag, geolon, geolat, geoalt, atpress, attemp, xin0, xin1)

Computes azimut and height, from either ecliptic or equatorial coordinates

### Parameters

    double        tjd_ut      
    int           calc_flag               either SE_ECL2HOR or SE_EQU2HOR
    double                geolon          longitude
    double                geolat          latitude
    double                geoalt          altitude above sea
    double                atpress         atmospheric pressure
    double                attemp          atmospheric temperature
    double                xin0            longitude of object
    double                xin1            latitude of object

### return array

    [0..1]                        array of 2 doubles: 
                       xaz[0] = azimuth
                                           xaz[1] = true altitude
                                           xaz[2] = apparent altitude

### C declaration

    void  swe_azalt( double tjd_ut, int32  calc_flag, double *geopos, double atpress, double attemp, double *xin, double *xaz)

# function swe\_azalt\_rev(tjd\_ut, calc\_flag, lng, lat, alt, xin0, xin1)

computes either ecliptical or equatorial coordinates from azimuth and true altitude in degrees.

### Parameters

    double        tjd_ut      
    int           calc_flag   Either SE_HOR2ECL or SE_HOR2EQU
    double        lng         Longitude position of observer.
    double        lat         Latitude position of observer.
    double        alt         Altitude of observer.
    double        xin0        azimut, in degrees
    double        xin1        true altitude, in degrees

### return array

        array of 2 doubles: 
         xout[0] = longitude
         xout[1] = latitude

### C declaration

    void  swe_azalt_rev( double tjd_ut, int32  calc_flag, double *geopos, double *xin, double *xout) 

# function swe\_rise\_trans(tjd\_ut, ipl, starname, epheflag, rsmi, geolon, geolat, geoalt, atpress, attemp)

rise, set, and meridian transits of sun, moon, planets, and stars

### Parameters

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

### return array

    [0..9]                        array of 10 doubles
    ['star']              string, present only if starname was used in call parameters
    ['rc']                        int     return flag, < 0 in case of error
    
    in case of error
    ['rc']                        int     < 0 in case of error
    ['serr']                      string

### C declaration

    int  swe_rise_trans( double tjd_ut, int32 ipl, char *starname, int32 epheflag, int32 rsmi, double *geopos, double atpress, double attemp, double *tret, char *serr)

# function swe\_rise\_trans\_true\_hor(tjd\_ut, ipl, starname, epheflag, rsmi, geolon, geolat, geoalt, atpress, attemp, horhgt)

rise, set, and meridian transits of sun, moon, planets, and stars

### Parameters

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

### return array

    [0..9]                        array of 10 doubles
    ['star']              string, present only if starname was used in call parameters
    ['rc']                        int     return flag, < 0 in case of error
    
    in case of error
    ['rc']                        int     < 0 in case of error
    ['serr']                      string

### C declaration

    int  swe_rise_trans_true_hor( double tjd_ut, int32 ipl, char *starname, int32 epheflag, int32 rsmi, double *geopos, double atpress, double attemp, double horhgt, double *tret, char *serr)

# function swe\_nod\_aps(tjd\_et, ipl, iflag, method)

calculate nodes and apsides 

Detailed documentation in Programmer's manual and in comments in C source file swecl.

### Parameters

    double        tjd_et      Julian day in Ephemeris Time.
    int           ipl         Planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.
    int               method
          combination of SE_NODBIT_MEAN, SE_NODBIT_OSCU, SE_NODBIT_OSCU_BAR, SE_NODBIT_FOCAL
          according to docu

### return array

    ['retflag']   int             return flag, < 0 in case of error
    ['serr']      string  optional error message
    ['xnasc']     array of 6 doubles
    ['xndsc']     array of 6 doubles
    ['xperi']     array of 6 doubles
    ['xaphe']     array of 6 doubles

### C declaration

    int swe_nod_aps(double tjd_et, int32 ipl, int32 iflag, int32  method, double *xnasc, double *xndsc, double *xperi, double *xaphe, char *serr)

# function swe\_nod\_aps\_ut(tjd\_ut, ipl, iflag, method)

calculate nodes and apsides 

Detailed documentation in Programmer's manual and in comments in C source file swecl.

### Parameters

    double        tjd_ut      Julian day in Universal Time.
    int           ipl         Planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.
    int               method
          combination of SE_NODBIT_MEAN, SE_NODBIT_OSCU, SE_NODBIT_OSCU_BAR, SE_NODBIT_FOCAL
          according to docu

### return array

    ['retflag']   int             return flag, < 0 in case of error
    ['serr']      string  optional error message
    ['xnasc']     array of 6 doubles
    ['xndsc']     array of 6 doubles
    ['xperi']     array of 6 doubles
    ['xaphe']     array of 6 doubles

### C declaration

    int swe_nod_aps_ut(double tjd_ut, int32 ipl, int32 iflag, int32  method, double *xnasc, double *xndsc, double *xperi, double *xaphe, char *serr)

# function swe\_get\_orbital\_elements(tjd\_et, ipl, iflag)

Calculates osculating orbital elements (Kepler elements) of a planet 
or asteroid or the Earth-Moon barycentre. 
The function returns error if called for the Sun, the lunar nodes, or the apsides.

### Parameters

    double        tjd_et      Julian day in Ephemeris Time.
    int           ipl         Planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.

### return array

    [0..16]       array double, with elements
    ['serr']      string  optional error message
    ['rc']        int             return flag, < 0 in case of error

### C declaration

    int swe_get_orbital_elements ( double tjd_et, int ipl, int iflag, double* xx, char* serr);

# function swe\_orbit\_max\_min\_true\_distance(tjd\_et, ipl, iflag)

This function calculates calculates the maximum possible distance, the
minimum possible distance, and the current true distance of planet, the EMB,
or an asteroid. The calculation can be done either heliocentrically or
geocentrically.

### Parameters

    double        tjd_et      Julian day in Ephemeris Time.
    int           ipl         Planet/body/object number or constant.
    int           iflag       Flag bits for computation requirements.

### return array

    ['dmax']      double
    ['dmin']      double
    ['dtrue']     double
    ['serr']      string  optional error message
    ['rc']        int             return flag, < 0 in case of error

### C declaration

    int swe_orbit_max_min_true_distance ( double tjd_et, int ipl, int iflag, double* xx, char* serr);

# function swe\_deltat(tjd)

Calculate delta t (difference between UT & ET) from Julian day number.

### Parameters

    double        tjd         Julian day in Universal Time.

### return value

    double        Delta T.

### C declaration

    double swe_deltat(double tjd);

# function swe\_deltat\_ex(tjd, ephe\_flag)

Calculate delta t (difference between UT & ET) from Julian day number.

If the function is called with SEFLG\_SWIEPH before calling swe\_set\_ephe\_path(),
or with or SEFLG\_JPLEPH before calling swe\_set\_jpl\_file(),
then the function returns a warning.

### Parameters

    double        tjd         Julian day in Universal Time.
    int           ephe_flag   Ephemeris flag (one of SEFLG_SWIEPH, SEFLG_JPLEPH, SEFLG_MOSEPH).

### return array

    [
        'dt' => (double) Delta T.
        'serr' => (string) Error string.
    ]

### C declaration

    double swe_deltat_ex(double tjd, int32 ephe_flag, char *serr);

# function swe\_time\_equ(tjd\_et)

Get the difference between local apparent and local mean time.

### Parameters

    double        tjd_et      Julian day in Ephemeris Time.

### return array

    [
        'rd' => (int) Return code.
        'td' => (double) Local Apparent Time - Local Mean Time.
        'serr' => (string) Error string.
    ]

### C declaration

    int swe_time_equ(double tjd_et, double *e, char *serr);

# function swe\_lmt\_to\_lat(tjd\_lmt, geolon)

Converts Local Mean Time (LMT) to Local Apparent Time (LAT).

### Parameters

    double        tjd_lmt     Julian day in Local Mean Time.
    double        geolon      Longitude of geographic location.

### return array

    [
        'rd' => (int) Return code.
        'tjd_lat' => (double) Local Apparent Time.
        'serr' => (string) Error string.
    ]

### C declaration

    int32 swe_lmt_to_lat(double tjd_lmt, double geolon, double *tjd_lat, char *serr);

# function swe\_lat\_to\_lmt(tjd\_lat, geolon)

Converts Local Apparent Time (LAT) to Local Mean Time (LMT).

### Parameters

    double        tjd_lat     Julian day in Local Apparent Time.
    double        geolon      Longitude of geographic location.

### return array

    [
        'rd' => (int) Return code.
        'tjd_lmt' => (double) Local Mean Time.
        'serr' => (string) Error string.
    ]

### C declaration

    int32 swe_lat_to_lmt(double tjd_lat, double geolon, double *tjd_lmt, char *serr);

# function swe\_sidtime0(tjd\_ut, eps, nut)

Get sidereal time with user-specified ecliptic obliquity and nutation.

### Parameters

    double        tjd_ut      Julian day in Universal Time.
    double        eps         Obliquity of ecliptic, in degrees.
    double        nut         Nutation in longitude, in degrees.

### return value

    double      Sidereal time in degrees.

### C declaration

    double swe_sidtime0(double tjd_ut, double eps, double nut);

# function swe\_sidtime(tjd\_ut)

Get sidereal time (ecliptic obliquity and nutation calculated internally).

### Parameters

    double        tjd_ut      Julian day in Universal Time.

### return value

    double      Sidereal time in degrees.

### C declaration

    double swe_sidtime(double tjd_ut);

# function swe\_cotrans(lng, lat, dist, eps)

Transform coordinates from ecliptic to equatorial, or vice-versa.
Convert equatorial to ecliptic if eps is positive.
Convert ecliptic to equatorial if eps is negative.

### Parameters

    double        lng     Longitude/right ascension position.
    double        lat     Latitude/declination position.
    double        dist    Distance (ignored).
    double        eps     Obliquity of ecliptic, in degrees.

### return array

    [
        0 => (double) Converted longitude/right ascension position.
        1 => (double) Converted latitude/declination position.
        2 => (double) distance (unchanged).
    ]

### C declaration

    void swe_cotrans(double *xpo, double *xpn, double eps);

# function swe\_cotrans\_sp(lng, lat, dist, lngs, lats, dists, eps)

Transform position and speed coordinates from ecliptic to equatorial, or vice-versa.
Convert equatorial to ecliptic if eps is positive.
Convert ecliptic to equatorial if eps is negative.

### Parameters

    double        lng     Longitude/right ascension.
    double        lat     Latitude/declination.
    double        dist    Distance (ignored).
    double        lngs    Longitude/right ascension velocity.
    double        lat     Latitude/declination velocity.
    double        dists   Distance velocity (ignored).
    double        eps     Obliquity of ecliptic, in degrees.

### return array

    [
        0 => (double) Converted longitude/right ascension value.
        1 => (double) Converted latitude/declination value.
        2 => (double) distance (unchanged).
        3 => (double) Converted longitude/right ascension velocity.
        4 => (double) Converted latitude/declination velocity.
        5 => (double) distance velocity (unchanged).
    ]

### C declaration

    void swe_cotrans_sp(double *xpo, double *xpn, double eps);

# function swe\_get\_tid\_acc()

Get tidal acceleration used in swe\_deltat().

### Parameters (none)

### return value

    double      Tidal acceleration value.

### C declaration

    double swe_get_tid_acc(void);

# function swe\_set\_tid\_acc(t\_acc)

Set tidal acceleration used in swe\_deltat().

### Parameters

    double      Tidal acceleration.

### return (none)

### C declaration

    void swe_set_tid_acc(double t_acc);

# function swe\_set\_delta\_t\_userdef(t\_acc)

Set fixed Delta T value to be returned by swe\_deltat().

### Parameters

    double      Delta T.

### return (none)

### C declaration

    void swe_set_delta_t_userdef(double t_acc);

# function swe\_degnorm(deg)

Normalize degrees to the range >= 0 & < 360.

### Parameters

    double      Degree.

### return value

    double      Normalized degree.

### C declaration

    double swe_degnorm(double x);

# function swe\_radnorm(rad)

Normalize radians to the range >= 0 & < 2 PI.

### Parameters

    double      Radians.

### return value

    double      Normalized radians.

### C declaration

    double swe_radnorm(double x);

# function swe\_rad\_midp(x1, x2)

Calculate a directional midpoint between 2 radian values:

0, 3.14159 => 1.570795
3.14159, 0 => 1.570795

### Parameters

    double      x1      Starting radian value.
    double      x2      Ending radian value.

### return value

    double      Midpoint in radians.

### C declaration

    double swe_rad_midp(double x1, x0);

# function swe\_deg\_midp(x1, x2)

Calculate a directional midpoint between 2 degree values:

0,180 => 90
180,0 => 270

### Parameters

    double      x1      Starting degree value.
    double      x2      Ending degree value.

### return value

    double      Midpoint in degrees.

### C declaration

    double swe_deg_midp(double x1, x0);

# function swe\_split\_deg(ddeg, roundflag)

This function takes a decimal degree number as input and provides sign or nakshatra,
degree, minutes, seconds and fraction of second.

It can also round to seconds, minutes, degrees.

### Parameters

    double      ddeg            Decimal degree value to "split".
    int         roundflag       Default is no rounding; otherwise use flags:
                                SE_SPLIT_DEG_ROUND_SEC
                                SE_SPLIT_DEG_ROUND_MIN
                                SE_SPLIT_DEG_ROUND_DEG
                                SE_SPLIT_DEG_ZODIACAL
                                SE_SPLIT_DEG_NAKSHATRA
                                SE_SPLIT_DEG_KEEP_SIGN

### return array

    [
        'deg' => (int) Integer portion of input value.
        'min' => (int) Minute portion of input value (>= 0 < 60).
        'sec' => (int) Seconds portion of input value (>= 0 < 60).
        'secfr' => (double) Fractional portion of seconds.
        'sgn' => (int) Zodiac sign number; or +/- 1.
    ]

### C declaration

    double swe_split_deg(double ddeg, int32 roundflag, int32 *ideg, int32 *imin, int32 *isec, double *dsecfr, int32 *isgn)

# function swe\_csnorm(p)

Normalize argument into interval \[0..DEG360\].

### Parameters

    int     p       Input value to normalize to >=0 & < 360.

### return value

    long    Normalized value.

### C declaration

    centisec swe_csnorm(centisec p)

# function swe\_difcsn(p1, p2)

Distance in centisecs p1 - p2 normalized to \[0..360\].

### Parameters

    int     p1      Starting position.
    int     p2      Ending position.

### return value

    long    Normalized distance.

### C declaration

    centisec swe_difcsn(centisec p1, centisec p2)

# function swe\_difdegn(p1, p2)

Distance in degrees.

### Parameters

    double     p1      Starting position.
    double     p2      Ending position.

### return value

    double    Normalized distance.

### C declaration

    double swe_difdegn(double p1, double p2);

# function swe\_difcs2n(p1, p2)

Distance in centisecs p1 - p2 normalized to \[-180..180\].

### Parameters

    int     p1      Starting position.
    int     p2      Ending position.

### return value

    int    Normalized distance.

### C declaration

    centisec swe_difcs2n(centisec p1, centisec p2);

# function swe\_difdeg2n(p1, p2)

Distance in degrees p1 - p2 normalized to \[-180..180\].

### Parameters

    double     p1      Starting position.
    double     p2      Ending position.

### return value

    double    Normalized distance.

### C declaration

    double swe_difdeg2n(double p1, double p2);

# function swe\_difrad2n(p1, p2)

Distance in radians p1 - p2 normalized to \[-PI..PI\].

### Parameters

    double     p1      Starting position.
    double     p2      Ending position.

### return value

    double    Normalized distance.

### C declaration

    double swe_difrad2n(double p1, double p2);

# function swe\_csroundsec(x)

Round second, but at 29.5959 always down.

### Parameters

    int     x      Second value.

### return value

    int    Rounded value.

### C declaration

    centisec swe_csroundsec(centisec x);

# function swe\_d2l(x)

Double to long with rounding, no overflow check.

### Parameters

    double     x      Value to round.

### return value

    int    Rounded value.

### C declaration

    long swe_d2l(double x);

# function swe\_day\_of\_week(jd)

Get day of week from Julian day, expressed as integer (0 = Monday, 6 = Sunday).

### Parameters

    double     jd      Julian day number.

### return value

    int    Day of week.

### C declaration

    int swe_day_of_week(double jd);

# function swe\_cs2timestr(t, sep, suppressZero)

Centiseconds -> time string.

### Parameters

    int     t               Time in centiseconds.
    int     sep             ASCII code of character to use as separator.
    int     suppressZero    Remove trailing zeros (default is to show them).

### return value

    string    Time as string.

### C declaration

    char * swe_cs2timestr(CSEC t, int sep, AS_BOOL suppressZero, char *a);

# function swe\_cs2lonlatstr(t, pchar, mchar)

Centiseconds -> longitude or latitude string.

        typical use for longitude: swe_cs2lonlatstr(cs, 'e', 'w')
        typical use for latitude: swe_cs2lonlatstr(cs, 'n', 's')

### Parameters

    int     t       Longitude/latitude value in centiseconds.
    string  pchar   Spacing character after degree notation.
    string  mchar   Spacing character after degree notation, if value is negative.

### return value

    string    Longitude/latitude value as string.

### C declaration

    char * swe_cs2lonlatstr(CSEC t, char pchar, char mchar, char *s);

# function swe\_cs2degstr(t)

Centiseconds -> degrees string.

### Parameters

    int     t       Degree value in centiseconds.

### return value

    string    Degree string.

### C declaration

    char * swe_cs2degstr(CSEC t, char *a);
