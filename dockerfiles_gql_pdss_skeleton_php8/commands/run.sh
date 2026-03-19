#!/bin/bash

cp /home/commands/doctrine.local.example.php /var/www/html/config/doctrine.local.php;
php /home/commands/init-database.php;
rm /var/www/html/composer.lock;
composer install --no-interaction
bin/doctrine orm:schema-tool:update --force
php /home/commands/init-database-data.php;
apache2-foreground
