 

<?php
 $hostname="localhost";
 $username="root";
 $password="";
 $database="mydb";
 
 $connection = mysqli_connect($hostname,$username,$password, $database) or exit("Unable to connect to database!");
 
?>