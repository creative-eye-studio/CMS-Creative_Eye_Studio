#!/usr/bin/env bash
 
composer install -n
npm install -g -n npm@8.5.5
bin/console doc:mig:mig --no-interaction
bin/console doc:fix:load --no-interaction
 
exec "$@"