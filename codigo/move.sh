chown -R apache:apache /etc/Proyectos/Regialu
cd /etc/Proyectos/Regialu/codigo
chmod -R 755 ./storage
mv ./public /var/www/regialusit/codigo
rm -rf ./public 
