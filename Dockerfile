F# Gunakan PHP versi 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan Laravel 12
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring tokenizer xml ctype bcmath zip

# Aktifkan mod_rewrite untuk routing Laravel
RUN a2enmod rewrite

# Copy Composer dari image resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Salin semua file ke container
COPY . .

# Jalankan Composer install
RUN composer install --optimize-autoloader --no-dev

# Set permission (aman di Render)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Arahkan Apache ke folder public Laravel
WORKDIR /var/www/html/public

# Expose port
EXPOSE 80

