<?php

//Db config
$host= "localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="museo"; // Database name
$connection = mysqli_connect("$host", "$username", "$password") or die(mysql_error());
mysqli_select_db($connection, "$db_name") or die(mysql_error());
mysqli_query($connection, "SET NAMES 'utf8'");

 ?>
