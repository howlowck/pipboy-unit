FROM howlowck/nginx-simple
MAINTAINER Hao Luo <howlowck@gmail.com>

RUN usermod -g staff www-data

ENV VIRTUAL_HOST pipboy.docker

COPY vhost.conf /etc/nginx/sites-enabled/pipboy.docker

