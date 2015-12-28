<?php
echo 'fdsfa';

$link = mysql_connect('123.57.206.244','root','123456');
if($link)
{
	echo '1';
}
else
{
	mysql_error();
}
?>