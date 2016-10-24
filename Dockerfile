FROM php:7.0-apache

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql

# composer
RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer

# php.ini
RUN { \
  echo "date.timezone=America/Montreal"; \
  echo "display_errors=On"; \
  echo "error_reporting=E_ALL"; \
  } > /usr/local/etc/php/conf.d/php.ini

# apache

#COPY apache2.conf /etc/apache2/apache2.conf
#COPY sites-enabled.conf /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite
RUN a2enmod expires
#RUN apache2-foreground
