#!/bin/bash

apachedir=/etc/apache2/sites-available

confsite=mvc-framework232.local
dokuRoot='projekte\/08_mvc\/public'
sed -e "s/servername/$confsite/g" -e "s/public/$dokuRoot/g" ${apachedir}/example.conf  > ${apachedir}/vagrant.conf
a2ensite vagrant.conf
a2enmod rewrite
systemctl reload apache2

