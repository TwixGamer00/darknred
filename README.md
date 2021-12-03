# DarkNRed theme for pterodactyl
Note: When installing the theme you need to have nodejs installed with version 16.x.x and you need to have yarn installed, you can install yarn by running `npm install -g yarn`

**Automated installation**
Make sure you run the script with the right permissions!

    bash <(curl -s https://raw.githubusercontent.com/TwixGamer00/darknred/main/install.sh)

**Manual installation**
If you want to install the theme manually remove the folders resources and public from /var/www/pterodactyl and replace them with the folders in this repository, and replace tailwind.config.js (also in /var/www/pterodactyl) with the one in this repository
Then rebuild the panel by running `yarn build:production`
