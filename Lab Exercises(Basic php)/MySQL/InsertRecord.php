<?php
Include 'Connection.php';
if(isset($_POST['logSub'])){
    //collect the data
    $FirstName=$_POST['txtFirst']; 
    $LastName=$_POST['txtSur'];
    $Email=$_POST['txtEmail'];
    $Password=$_POST['txtPass'];
    $Gender=$_POST['txtGender'];
    $Age=$_POST['txtAge'];
    //produce the query
    $query= "INSERT INTO customer( FirstName, Lastname, Email, Password, Gender, Age) VALUES 
    (' $FirstName', '$LastName', '$Email',  '$Password', '$Gender', '$Age')";
 
     //echo 'query'; 
     //exit();
    //run query
    }if(mysqli_query($connection, $query)){

        echo "Record inserted successfully.";
        } else{        
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    header('location:mysql.php');

?>