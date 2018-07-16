#GET the base default nginx image from docker hub
FROM phpdockerio/php71-fpm
 
#Delete the Existing default.conf
RUN rm /etc/php/7.1/fpm/pool.d/www.conf
RUN rm /etc/php/7.1/fpm/php.ini
COPY php.ini /etc/php/7.1/fpm/php.ini 
#Copy the custom default.conf to the nginx configuration
COPY www.conf /etc/php/7.1/fpm/pool.d/www.conf
RUN mkdir -p /var/www/html/
COPY index.php /var/www/html/
RUN apt-get update
RUN apt install -y php-redis;
