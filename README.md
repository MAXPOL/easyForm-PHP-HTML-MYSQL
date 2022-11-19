# easyForm-PHP-HTML-MYSQL

Server with OS 'CentOS 7'

yum install epel-release -y

yum install git -y

cd /

git clone https://github.com/MAXPOL/easyForm-PHP-HTML-MYSQL.git

chmod +x configServer.sh

./configServer.sh

cp index.php /var/www/html/

cp style.css /var/www/html/

Check system in browser: http://ip_address/
