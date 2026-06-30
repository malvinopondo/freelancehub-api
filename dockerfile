# ---- Base PHP image with required extensions ----
FROM php:8.2-cli

# Install system dependencies and PHP extensions Laravel typically needs
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first (better layer caching)
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy the rest of the application
COPY . .

# Finish composer setup
RUN composer dump-autoload --optimize

# Install JS dependencies and build frontend assets (Vite/Laravel Mix)
RUN if [ -f package.json ]; then \
        yarn install || npm install; \
        yarn build || npm run build; \
    fi

# Laravel storage/cache permissions
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && chmod -R 775 storage bootstrap/cache

# Expose the port Render will assign dynamically
EXPOSE 10000

# Run migrations and start the server
CMD php artisan config:cache && \
    php artisan route:cache && \
    php artisan migrate --force || true && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-10000}