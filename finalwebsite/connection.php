<?php
 $hostname="localhost";
 $username="root";
 $password="";
 $database="product";
 
 $connection = mysqli_connect($hostname,$username,$password, $database) or exit("Unable to connect to database!");
 
?>