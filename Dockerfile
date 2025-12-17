FROM php:8.2-apache

# Activer les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier l'application dans Apache
COPY app/ /var/www/html/

# Exposer le port
EXPOSE 80
