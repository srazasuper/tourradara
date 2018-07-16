#docker pull docker.elastic.co/logstash/logstash:5.6.10
#docker run -d --name mylogstash --link=myelastic 4647f67650d3 
#docker pull docker.elastic.co/logstash/logstash:5.6.10
# docker run -d --name mylogstash --link=myelastic 4715626c7093
FROM docker.elastic.co/logstash/logstash:5.6.10
 
#Delete the Existing default.conf
RUN rm /usr/share/logstash/config/logstash.yml
RUN rm /usr/share/logstash/pipeline/logstash.conf
COPY logstash.yml /usr/share/logstash/config/logstash.yml
COPY logstash.conf /usr/share/logstash/pipeline/logstash.conf
USER root
RUN yum install -y rsyslog;
RUN mkdir -p /var/log/SERVERS
RUN rm /etc/rsyslog.conf
COPY rsyslog.conf /etc/rsyslog.conf
COPY start.sh /home/start.sh
CMD [ "/bin/bash", "/home/start.sh" ]
