cd /var/www/pterodactyl
php artisan down
git clone https://github.com/TwixGamer00/darknred.git
rm -r -f resources
rm -r -f public
rm -r -f tailwind.config.js
mv darknred/resources resources
echo "Updated Resources folder"
mv darknred/public public
echo "Updated Public folder"
mv darknred/tailwind.config.js tailwind.config.js
echo "Updated Tailwind file"
chown -R www-data:www-data /var/www/pterodactyl/*
chmod -R 755 storage/* bootstrap/cache/
yarn install
yarn build
php artisan queue:restart
php artisan up
