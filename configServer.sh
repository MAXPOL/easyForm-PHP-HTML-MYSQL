yum install epel-release wget nano -y

yum install yum-utils unzip httpd -y

yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm 

yum-config-manager --disable remi-php54

yum-config-manager --enable remi-php72

yum update -y

yum -y install php php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json

yum install mariadb mariadb-client mariadb-server -y

cd /var/www/html

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.10/phpMyAdmin-4.9.10-all-languages.zip

unzip phpMyAdmin-4.9.10-all-languages.zip

rm -rf phpMyAdmin-4.9.10-all-languages.zip

mv phpMyAdmin-4.9.10-all-languages pma

systemctl start httpd 

systemctl start mariadb

systemctl enable mariadb

systemctl enable httpd 

firewall-cmd --permanent --zone=public --add-port=80/tcp --add-port=3306/tcp

firewall-cmd --reload

mysql_secure_installation

##INSIDE PHPMYADMIN CREATE DB WITH NAME "collector" - utf8_general_ci
##TABLE:id(int,AI);login(VARCHAR 50);password(VARCHAR 50);ip(VARCHAR 50)
