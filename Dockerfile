FROM php:8.1

COPY ./ /usr/src/app
COPY --from=composer:2.3 /usr/bin/composer /usr/bin/composer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN apt-get update && \
    apt-get install -y \
        git \
        zip \
        unzip && \
    chmod +x /usr/bin/composer && \
    chmod +x /usr/local/bin/install-php-extensions && \
    sync && \
    install-php-extensions \
        zip \
        xdebug && \
    cd /usr/src/app && composer install
EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/usr/src/app/public", "/usr/src/app/public/index.php"]
