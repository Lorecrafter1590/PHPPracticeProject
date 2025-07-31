FROM php:8.3-cli

# Set working directory
WORKDIR /var/www/html

# Copy source code
COPY . .

# Set default command
CMD [ "php", "index.php" ]

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer