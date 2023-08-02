#chown -R apache:apache /var/Proyectos/Regialu
cd /var/Proyectos/Regialu/codigo
mv .env.example  /var/Proyectos/Regialu/codigo/.env
chmod -R 755 ./storage
mv ./public /var/www/regialusit/
rm -rf ./public 
