# Use PHP 7.4 as the base image
FROM php:7.4-cli

# Install required packages and Node.js
RUN apt-get update \
    && apt-get install -y curl libicu-dev libzip-dev zip unzip nodejs npm libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install intl zip pdo_mysql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg  \
    && docker-php-ext-install gd \
    && apt-get clean

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --2.2 \
    && mv composer.phar /usr/local/bin/composer

# Set the working directory inside the container to /app
WORKDIR /app

# Copy the project files into the /app directory in the container
COPY . /app

# Install Composer dependencies
RUN composer install

# Install npm dependencies
RUN npm install

# Run the Symfony application
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
