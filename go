#!/bin/bash

phpize && \
./configure && \
make && \
make install && \
echo "extension=sweph.so" > /usr/local/etc/php/conf.d/sweph.ini
