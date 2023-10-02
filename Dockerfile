FROM php:7.4 AS builder

WORKDIR /app

# Copy only the necessary files
COPY ./app/dashboard.php /app/
COPY ./app/index.php /app/
COPY ./app/logout.php /app/

FROM php:7.4-apache

WORKDIR /var/www/html

COPY --from=builder /app /var/www/html/

EXPOSE 80
# Enable Apache Rewrite module
RUN a2enmod rewrite

# Configure Apache
COPY ./app/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Start Apache in the foreground
CMD ["apache2-foreground"]