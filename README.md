##This is a Simple Stack deployement as below.

#1- Load balancer sending traffic to myapp1 and myapp2
#2- apache as myapp1/2 servers working as a proxy for php-fpm
#3- php-fpm container running behind apache server to execute all php files and maintain session in redis server. currently only index.php is served which returns current session variable count of hit and date and IP address in Json format
#4- Redis server for keeping the session.
#5- logstash server is running with rsyslog to recieve error and access log from Apache server and store them in /var/log/SERVERS/ and parse and upload to Elastic Search
#6- kibana server running on port 5777 to analyze the log.

##INSTALLATION:
#install docker and docker-cpmpose latest versions (atleast support composer 2)
#git clone this Repository in your directory
#git compose up    to bring up the stack
