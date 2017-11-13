FROM php:7.0-apache

# working directory
WORKDIR /tmp

# setting config variables
ARG HOST_URL=localhost
ENV HOST_URL ${HOST_URL}

# install dependencies
RUN apt-get update && apt-get install -y git

# assuming the git master branch is always stable
RUN git clone https://github.com/nareshganesan/ipxe-configs.git

# copy the configs to php html root folder
COPY /tmp/ipxe-configs/ubuntu/static/ /var/www/html/

