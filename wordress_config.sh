#!/bin/sh

if ! $(wp core is-installed  --allow-root --path='/var/www/html'); then
   echo "=> WordPress is not configured yet, configuring WordPress ..."

   echo "=> Installing WordPress"
   sudo -E -u www-data wp core install --path='/var/www/html'
else
   echo "=> WordPress is alread configured.";
fi
