# ========================================================
# Stage 1: Build Frontend Assets (Vite & Tailwind)
# ========================================================
FROM node:20-alpine AS node-builder
WORKDIR /app

COPY package*.json ./
RUN npm ci --ignore-scripts || npm install

COPY . .
RUN npm run build

# ========================================================
# Stage 2: Production PHP-FPM & Nginx Application Server
# ========================================================
FROM php:8.3-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install system utilities, Nginx, Supervisor, and extension build libraries
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    bash \
    gettext \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    icu-dev \
    postgresql-dev \
    sqlite-dev \
    oniguruma-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_pgsql \
        pdo_sqlite \
        pdo_mysql \
        mbstring \
        zip \
        bcmath \
        opcache \
        intl \
        gd

# Configure production OPcache
RUN echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini \
    && echo "opcache.max_accelerated_files=10000" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini \
    && echo "opcache.validate_timestamps=0" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini \
    && echo "opcache.save_comments=1" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini

# Install Composer
COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

# Copy application source code
COPY . /var/www/html

# Copy built frontend assets from node-builder
COPY --from=node-builder /app/public/build /var/www/html/public/build

# Install PHP dependencies without dev packages
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-scripts

# Setup Nginx, Supervisor, and Entrypoint configurations
RUN mkdir -p /etc/nginx/templates /etc/supervisor/conf.d
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/default.conf.template /etc/nginx/templates/default.conf.template
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Setup proper ownership and permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Port exposed for Render
EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
