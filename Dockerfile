# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia todos os arquivos do projeto pro servidor web
COPY . /var/www/html/
