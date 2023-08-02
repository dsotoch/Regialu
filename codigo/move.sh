chown -R apache:apache /etc/Proyectos/Regialu
cd /etc/Proyectos/Regialu/codigo
mv .env.example  /etc/Proyectos/Regialu/codigo/.env
chmod -R 755 ./storage
mv ./public /var/www/regialusit/
rm -rf ./public 
