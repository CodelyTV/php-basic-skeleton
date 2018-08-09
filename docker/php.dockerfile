FROM php:7.2.8-alpine3.7

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/ \
    && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-2.6.0 \
    && docker-php-ext-enable xdebug

RUN adduser -D -u 1000 codelytv

RUN mkdir app \
    && chown codelytv app

WORKDIR app

USER codelytv
