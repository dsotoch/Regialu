chown -R apache:apache /var/www/Regialu
cd /var/www/Regialu/codigo
mv .env.example  /var/www/Regialu/codigo/.env
chmod -R 755 ./storage
mv ./public /var/www/regialusit/
rm -rf ./public 
chomd -R 755  /var/www/regialusit/public

