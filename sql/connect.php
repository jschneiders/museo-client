<?php

//Configuração Victor
$host= "127.0.0.1:3306"; // Host name
$username="root"; // Mysql username
$password="mypassword1"; // Mysql password
$db_name="museo"; // Database name


//Configuração Guilherme
//$host= "localhost"; // Host name
//$username="root"; // Mysql username
//$password=""; // Mysql password
//$db_name="museo"; // Database name


$connection = mysqli_connect("$host", "$username", "$password") or die(mysql_error());
mysqli_select_db($connection, "$db_name") or die(mysql_error());
mysqli_query($connection, "SET NAMES 'utf8'");

 ?>
