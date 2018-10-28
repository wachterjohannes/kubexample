FROM php:7.2-apache

RUN /usr/sbin/a2enmod rewrite && /usr/sbin/a2enmod headers && /usr/sbin/a2enmod expires
ADD config/apache2/apache.conf /etc/apache2/sites-available/000-default.conf

COPY . /var/www/application

RUN chown www-data:www-data /var/www/application/var/cache
RUN chown www-data:www-data /var/www/application/var/log

WORKDIR /var/www/application
