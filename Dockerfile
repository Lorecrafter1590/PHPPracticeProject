FROM php:8.3-cli

# Install Xdebug for code coverage
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Set working directory
WORKDIR /var/www/html

# Copy source code
COPY . .

# Set default command
CMD [ "php", "index.php" ]

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer