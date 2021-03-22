
#!/bin/bash

PS3='> '   # le prompt
LISTE=("AUTO_INDEX OFF enter [off]" "AUTO_INDEX ON  enter [on]")  # liste de choix disponibles
select CHOIX in "${LISTE[@]}" ; do
    case $REPLY in
        1|off)
        mv /etc/nginx/sites-available/localhost /var/nginx.conf && cp /var/nginx_off.conf /etc/nginx/sites-available/localhost && cp /usr/share/nginx/html/index.html /var/www/html/index.nginx-debian.html && echo AUTO_INDEX OFF ;
        break
        ;;
        2|on)
        echo AUTO_INDEX ON
        break
        ;;
    esac
done