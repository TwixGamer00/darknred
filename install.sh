cd /var/www/pterodactyl
php artisan down
git clone https://github.com/TwixGamer00/darknred.git
rm -r resources
rm -r public
rm -r tailwind.config.js
mv darknred/resources resources
mv darknred/public public
mv darknred/tailwind.config.js tailwind.config.js
chown -R www-data:www-data /var/www/pterodactyl/*
chmod -R 755 storage/* bootstrap/cache/
yarn build
php artisan queue:restart
php artisan up
