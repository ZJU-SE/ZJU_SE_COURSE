# Ubuntu部署安装说明
安装Apache2
sudo apt-get install apache2
安装完成之后使用service apache2 status查看apahce2的状态，使用service apache2 restart重启apache2。

安装php7
sudo apt-get install php7.0
安装完成之后可以通过php -v测试环境是否配置正确，或者通过sudo nano /var/www/html/testphp.php命令创建testphp.php文件,浏览器输入http://localhost/testphp.php进行访问，如果访问正常，则表示php安装成功。

安装MySQL
sudo apt-get install mysql-server


安装phpmyadmin
sudo apt-get install phpmyadmin php-mbstring php-gettext，安装的过程中选择apache2。
安装完成之后使用如下命令修改支持模块:
sudo phpenmod mbstring
修改完成之后sudo systemctl restart apache2重启apache2服务器。
执行如下命令创建软连接
sudo ln -s /usr/share/phpmyadmin /var/www/index
在浏览器输入http://localhost/phpmyadmin/，进入熟悉的页面。一切OK。


安装ftp
sudo apt-get install vsftpd 
修改ftp的配置文件 /etc/vsftpd.conf,向文件中添加如下内容：
```
# 允许匿名用户和本地用户登录，本地用主户即/etc/passwd中的用户
anonymous_enable=YES
local_enable=YES

# 禁止全局写命令
write_enable=YES

# 禁止匿名用户上传和创建文件夹
anon_upload_enable=NO
anon_mkdir_write_enable=NO
```
开启、停止和重启FTP
sudo /etc/init.d/vsftpd start
sudo /etc/init.d/vsftpd stop
sudo /etc/init.d/vsftpd restart




