<?php

//Make connection to database
include 'connection.php';

//Display heading
echo '<h2>Select ALL from the Customer Table</h2>';

//run query to select all records from customer table
$query="SELECT * FROM customer";


//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

}

?>

<?php
//Make connection to database
include 'connection.php';

//Display heading
echo '<h2>Select ALL from the Customer Table with Age >22 </h2>';

//run query to select all records from customer table
$query= "SELECT * FROM customer WHERE Age > '22'";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].$row['Password'].$row['Gender'].$row['Age'].'<br />';

}

?>

<?php
//Make connection to database
include 'connection.php';

//Display heading
echo '<h2>Select Females from the Customer Table with Age >= 22 </h2>';

//run query to select all records from customer table
$query= "SELECT *  FROM customer WHERE Gender = 'F' && Age >= 22  ";


//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

}
?>
<?php
//Make connection to database
include 'connection.php';

//Display heading
echo '<h2>Select Males from the Customer Table list Age by descending </h2>';

//run query to select all records from customer table
$query= "SELECT * FROM customer WHERE Gender = 'M' ORDER BY  Age DESC ";


//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

}
?>
<?php
//Make connection to database
include 'connection.php';

//Display heading
echo '<h2>Select All from the Customer Table with "a" in the fiest name </h2>';

//run query to select all records from customer table
$query= "SELECT *  FROM customer WHERE FirstName LIKE 'A%' ORDER BY FirstName ";


//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

}
?>



