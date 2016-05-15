<?php  
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

 $hostname_localhost ="localhost";  
 $database_localhost ="tunisiamalldb";  
 $username_localhost ="root";  
 $password_localhost ="";  
 $con = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)  
 or  
 trigger_error(mysql_error(),E_USER_ERROR);  
 ?>