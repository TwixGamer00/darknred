# DarkNRed theme for pterodactyl
**Automated installation**
Note: When running this script you need to have nodejs installed with version 16.x.x and you need to have yarn installed you can install yarn by running `npm install -g yarn`

Make sure you run it with the right permissions!

    bash <(curl -s https://raw.githubusercontent.com/TwixGamer00/darknred/main/install.sh?token=APN4GHGM5PTK3WSXIZOLMF3BVIOIU)

**Manual installation**
If you want to install the theme manually remove the folders resources and public from /var/www/pterodactyl and replace them with the folders in this repository, and replace tailwind.config.js (also in /var/www/pterodactyl) with the one in this repository
Then rebuild the panel by running `yarn build`
