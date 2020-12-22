FROM php:7.4.12-apache-buster

RUN apt-get update && apt-get install -y --no-install-recommends apt-transport-https locales libicu63 libpq5 libicu-dev libpq-dev wget zip libzip-dev unzip gnupg
RUN docker-php-ext-install intl pgsql pdo_pgsql pdo_mysql opcache zip
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini && \
    echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/xdebug.ini



COPY testsite.conf /etc/apache2/sites-available/testsite.conf
RUN a2ensite testsite