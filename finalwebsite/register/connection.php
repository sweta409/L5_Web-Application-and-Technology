<?php

$hostname='localhost';
$username='root';
$password='';
$databaseName='product';

$connection= mysqli_connect($hostname,$username,$password,$databaseName) or exit('Unable to connect');
?>