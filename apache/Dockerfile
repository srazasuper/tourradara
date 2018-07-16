#docker run -d --name myapp2 --link=mylogstash --link=myfpm --link=myredis --link=myelastic --link=mylogstash -p 9090:80 --hostname myapp2 myapache
#docker run -d --name myapp2 --link=mylogstash --link=myfpm --link=myredis --link=myelastic -p 9090:80 --hostname myapp2 --log-driver syslog --log-opt syslog-address=udp://mylogstash:514 myapache
#docker run -d --name myapp2 --link=mylogstash --link=myfpm --link=myredis --link=myelastic -p 9090:80 myapache
#GET the base default nginx image from docker hub

FROM php:apache
 
#Delete the Existing default.conf
RUN rm /var/log/apache2/error.log
RUN rm /var/log/apache2/access.log
RUN rm /var/log/apache2/other_vhosts_access.log
RUN rm /etc/apache2/sites-enabled/000-default.conf
RUN apt-get update ; \
    apt-get install -y \
   libapache2-mod-fcgid \
   rsyslog \
   vim;
RUN a2enmod actions alias cgid rewrite suexec include fcgid proxy_fcgi
RUN rm /etc/rsyslog.conf
COPY rsyslog.conf /etc/rsyslog.conf
#Copy the custom default.conf to the Apache configuration
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY index.php /var/www/html/
RUN touch /var/log/apache2/error.log
RUN touch /var/log/apache2/access.log
RUN touch /var/log/apache2/other_vhosts_access.log
RUN update-rc.d rsyslog defaults
#CMD rm -fr /var/run/rsyslogd.pid
#CMD [ "/usr/sbin/rsyslogd", "-dn" ]
#CMD [ "service", "apache2", "start" ]
COPY start.sh /home/start.sh
CMD [ "/bin/bash", "/home/start.sh" ]
