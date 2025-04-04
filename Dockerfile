FROM php:8.2-apache

# Instala o driver do PostgreSQL (pdo_pgsql)
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_pgsql

# Copia os arquivos do seu projeto para o Apache
COPY . /var/www/html/
