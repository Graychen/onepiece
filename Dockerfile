FROM zacksleo/docker-composer:develop
WORKDIR /var/www/html
COPY . /var/www/html
VOLUME ["/var/www/html"]
