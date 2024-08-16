#!/bin/bash

cd /var/www/html
mkdir -p temp
mkdir -p logs
mkdir -p storage
chmod -vR 0777 logs/
chmod -vR 0777 temp/
chmod -vR 0777 storage/
chmod 0755 bin/*

composer clear
composer install

apache2-foreground