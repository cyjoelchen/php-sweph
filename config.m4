dnl $Id$
dnl config.m4 for extension sweph

dnl Comments in this file start with the string 'dnl'.
dnl Remove where necessary. This file will not work
dnl without editing.

dnl If your extension references something external, use with:

PHP_ARG_WITH(sweph, for libswe support,
dnl Make sure that the comment is aligned:
[  --with-sweph[=DIR]             Include sweph support])

dnl Otherwise use enable:

dnl PHP_ARG_ENABLE(sweph, whether to enable sweph support,
dnl [  --enable-sweph           Enable sweph support])
AC_MSG_RESULT(php_sweph: $PHP_SWEPH)

if test "$PHP_SWEPH" != "no"; then
  if ! test -r sweph/src/libswe.a; then
    AC_MSG_RESULT(Building libswe.a)
    (cd sweph/src;make libswe.a)
  fi

  if test -r sweph/src/libswe.a; then
    SWEPH_DIR=sweph/src
    AC_MSG_RESULT(libswe.a found in $SWEPH_DIR)
  fi
 
  if test -z "$SWEPH_DIR"; then
    AC_MSG_RESULT([not found])
    AC_MSG_ERROR([Please reinstall the sweph distribution])
  fi

  dnl # --with-sweph -> add include path
  PHP_ADD_INCLUDE($SWEPH_DIR)

  dnl # --with-sweph -> check for lib and symbol presence
  dnl LIBNAME=swe
  dnl LIBSYMBOL=swe_calc_u


  dnl PHP_SUBST(SWEPH_SHARED_LIBADD)

  # remove this... it causes runtime error when running php5
  AC_SUBST(LDFLAGS, "-L$SWEPH_DIR -lswe -lm")
  PHP_NEW_EXTENSION(sweph, sweph.c, $ext_shared)
fi
