FROM php:fpm-alpine

RUN apk update && apk add zlib-dev libpng-dev libxml2 libxml2-dev libzip-dev

RUN docker-php-ext-install pdo pdo_mysql tokenizer xml pcntl zip gd

CMD ["php-fpm"]

EXPOSE 9000