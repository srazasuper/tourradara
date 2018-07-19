#docker run -d --name mykibana --link=myelastic -p 5777:5777 mykibana
#docker run -d --name mylogstash --link=myelastic 4647f67650d3
FROM docker.elastic.co/kibana/kibana:5.6.10
#FROM docker.elastic.co/kibana/kibana:6.3.1
 
#Delete the Existing default.conf
RUN rm /usr/share/kibana/config/kibana.yml
COPY kibana.yml /usr/share/kibana/config/kibana.yml
RUN bin/kibana-plugin remove x-pack
