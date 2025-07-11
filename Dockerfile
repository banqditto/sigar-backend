
FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan Laravel 12
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libxml2-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring xml bcmath zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Arahkan ke folder public
WORKDIR /var/www/html

# Copy semua file Laravel
COPY . .

# Install dependency Laravel
RUN composer install --optimize-autoloader --no-dev

# Set permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Ubah DocumentRoot Apache ke /var/www/html/public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Pastikan Apache tahu bahwa index.php adalah halaman utama
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf


EXPOSE 80


