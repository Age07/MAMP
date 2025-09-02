#!/bin/sh
export PHP_FCGI_CHILDREN=4
export PHP_FCGI_MAX_REQUESTS=10000
exec /Applications/MAMP/bin/php/php7.4.33/bin/php-cgi -c "/Applications/MAMP/bin/php/php7.4.33/conf/php.ini"

#
# Do not modify this file, it will be overwritten
# the next time MAMP.app (re)starts Apache.
#