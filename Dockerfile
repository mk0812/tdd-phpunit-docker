FROM php:8.0-cli

RUN apt-get update && apt-get install -y \
    zip unzip

# composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app