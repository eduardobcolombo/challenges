FROM php:5.4-apache
MAINTAINER Eduardo Colombo <eduardobcolombo@gmail.com>
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql


# Install intl RUN apt-get install -y libicu-dev
RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# Install mbstring
RUN docker-php-ext-install mbstring

