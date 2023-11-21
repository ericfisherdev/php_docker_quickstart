FROM php:apache
RUN docker-php-ext-install mysqli
RUN service apache2 restart