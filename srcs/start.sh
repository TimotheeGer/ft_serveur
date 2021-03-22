bash /var/change_autoindex.sh

service php7.3-fpm start
service nginx start
service mysql start
# bash

echo "docker stop [y]?"
read reponse
if [[ "$reponse" == "y" ]]
then 
    exit;
fi
# while true;
# 	do sleep infinity;
