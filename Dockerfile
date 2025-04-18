FROM php:8.4-fpm

LABEL maintainer="Kevin DeCapite"

RUN apt-get -y update
RUN mkdir /root/php-sweph

WORKDIR /root/php-sweph
