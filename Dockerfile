FROM alpine:3.5
WORKDIR /var/www/html
COPY . /var/www/html
VOLUME ["/var/www/html"]
