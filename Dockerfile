FROM php:8.0.3-apache-buster
LABEL maintainer="Nathan Ethier"\
    name="docker_dockerhub"\
    version="2.0"
COPY index.php /var/www/html/