<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPBasicPage</title>
</head>
<body>
<?php
echo"Sweta Yadav<br>";//my first php
echo"c7227282";
?>

<h4>Variables:</h4>

<?php
$name="Sweta";//variable decleration
$age='23';
echo'Hi My name is '.$name.' and I am '.$age.'years old.';
echo"<br>Mi nombre es $name y tengo  $age anos de edad";
?>

<h4>Functions:</h4>

<?php
echo gettype($name);//it shows the datatype of variable
echo '<br />';

echo strlen($name);//it shows the no.of length of variable.
echo '<br />';

echo strtoUpper($name);//print only the uppercase letters in the string.

?>

<h4>Arithmetic</h4>

<?php
$num1='9';
$num2='12';
$percentage=($num1/$num2)*100;
$division=$num2/$num1;
echo'num1='.$num1.'<br/>num2='.$num2;
echo'<br/>num1xnum2='.$num1*$num2;
echo'<br/>num2/num1='.$division;
echo'<br/>num1 as a percentage of num2='.$percentage.'%';
echo'<br/>num2 divided by num1='.number_format($division);

?>
</body>
</html>