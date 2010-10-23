dnl $Id$
dnl config.m4 for extension sweph

dnl Comments in this file start with the string 'dnl'.
dnl Remove where necessary. This file will not work
dnl without editing.

dnl If your extension references something external, use with:

dnl PHP_ARG_WITH(sweph, for sweph support,
dnl Make sure that the comment is aligned:
dnl [  --with-sweph             Include sweph support])

dnl Otherwise use enable:

PHP_ARG_ENABLE(sweph, whether to enable sweph support,
[  --enable-sweph           Enable sweph support])

if test "$PHP_SWEPH" != "no"; then
  dnl Write more examples of tests here...

  dnl # --with-sweph -> check with-path
  SEARCH_PATH="/usr/local/include /usr/include"     # you might want to change this
  SEARCH_FOR="swephexp.h"  # you most likely want to change this
  if test -r $PHP_SWEPH/; then # path given as parameter
    SWEPH_DIR=$PHP_SWEPH
  else # search default path list
    AC_MSG_CHECKING([for sweph files in default path])
    for i in $SEARCH_PATH ; do
      if test -r $i/$SEARCH_FOR; then
        SWEPH_DIR=$i
        AC_MSG_RESULT(found in $i)
      fi
    done
  fi
  
  if test -z "$SWEPH_DIR"; then
    AC_MSG_RESULT([not found])
    AC_MSG_ERROR([Please reinstall the sweph distribution])
  fi

  dnl # --with-sweph -> add include path
  PHP_ADD_INCLUDE($SWEPH_DIR/include)

  dnl # --with-sweph -> check for lib and symbol presence
  dnl LIBNAME=swe
  dnl LIBSYMBOL=swe_calc_u


  dnl PHP_SUBST(SWEPH_SHARED_LIBADD)

  # remove this... it causes runtime error when running php5
  AC_SUBST(LDFLAGS, "-L. -lswe -lm")
  PHP_NEW_EXTENSION(sweph, sweph.c, $ext_shared)
fi
