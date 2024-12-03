#FROM public.ecr.aws/docker/library/ubuntu:20.04
FROM ubuntu:20.04
WORKDIR  /usr/src/app
ARG DEBIAN_FRONTEND=noninteractive
RUN echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until
RUN apt update 
RUN apt-get install apache2 -y
#RUN apt-get install unzip -y
RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update -y
RUN apt-get install -y php7.4-cli php7.4-json php7.4-common php7.4-mysql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath php7.4 php7.4-intl php7.4-sqlite3 php7.4-pgsql
# RUN a2enmod ssl
# RUN a2enmod rewrite
RUN mkdir -p /var/www/html/moneyuncle
ADD moneyuncle /var/www/html/moneyuncle
RUN chmod -R 777 /var/www/html/


COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
Expose 80
RUN a2ensite  000-default.conf  
CMD ["apachectl", "-D", "FOREGROUND"]
RUN pwd
