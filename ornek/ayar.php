<?php

$dbhost="localhost"; 			//Veritabanınızın bulunduğu host adresi
$dbuser="";					  		//Veritabanı kullanıcı adı
$dbpassword="";						//Kullanıcı şifresi
$dbname="";			        	//Veritabanı adı
 
 
$baglan=mysql_connect($dbhost,$dbuser,$dbpassword) or die ("MySQL Baglantisi kurulamadi.");
mysql_unbuffered_query('SET NAMES utf8');
mysql_select_db($dbname,$baglan) or die ("Veritabani baglantisi kurulamadi");

?>
