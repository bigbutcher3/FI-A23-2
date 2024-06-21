#!/bin/bash
apachedir=/etc/apache2/sites-available
confsite=phpgrundlagen.local
dokuRoot="public"

sed -e "s/servername/$confsite/g" -e "s/public/$dokuRoot/g" ${apachedir}/example.conf  > ${apachedir}/vagrant.conf
a2ensite vagrant.conf
a2enmod rewrite
systemctl reload apache2

