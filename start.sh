#!/bin/sh

./mysql_config.sh
./apache_config.sh

echo "=> Apache started..."
/usr/sbin/apache2ctl -D FOREGROUND
