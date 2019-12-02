FROM debian:buster

EXPOSE 80 443
RUN apt-get -qq -y update
RUN apt-get install -y -qq nginx wget lsb-release gnupg php7.3-fpm php7.3-mysql php7.3-mbstring
COPY srcs/default /etc/nginx/sites-available/
COPY srcs/dhparam.pem /etc/nginx/dhparam.pem
COPY srcs/nginx-selfsigned.crt /etc/ssl/certs/
COPY srcs/nginx-selfsigned.key /etc/ssl/private/
COPY srcs/self-signed.conf /etc/nginx/snippets/
COPY srcs/ssl-params.conf /etc/nginx/snippets/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
COPY srcs/localhost.sql /
COPY srcs/install.sh /
RUN sh ./install.sh
COPY srcs/wp-config.php /var/www/html
COPY srcs/start.sh /
CMD sh start.sh