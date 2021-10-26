
<!DOCTYPE HTML>
<html>
    <head>
        <title>Php Forms</title>
    </head>
    <body>
        <h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="GET" action="watWk5.php">
<fieldset>
<legend>
Login
</legend>
<label for="email">Email: </label>
<input type="text" name="txtEmail"/><br />
<label for="passwd">Password: </label>
<input type="password" name="txtPass" /><br />
<input type="submit" value="Submit" name="loginSubmit" />
<input type="reset" value="Clear" />
</fieldset>
</form>
<?php 
    if(isset($_GET['loginSubmit'])){
    $email = $_GET['txtEmail'];
    $password = $_GET['txtPass'];
    echo"Email:$email"." Password:$password";
}
?>
<h2>Login Form using POST</h2>
<form method="POST" action="watWk5.php">
<fieldset>
<legend>
Login
</legend>
<label for="email">Email: </label>
<input type="text" name="txtEmail"/><br />
<label for="passwd">Password: </label>
<input type="password" name="txtPass" /><br />
<input type="submit" value="Submit" name="loginSubmit" />
<input type="reset" value="Clear" />
</fieldset>
</form>
<?php 
    if(isset($_POST['loginSubmit'])){
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPass'];
    echo"Email:$email"." Password:$password";
}
?>
<h2>More Form Handling</h2>
<form method="POST" action=""> 
 <fieldset> 
  <legend>Comments</legend> 
  <label for="">Email: </label> 
  <input type="text" name="txtEmail" value="" /><br /> 
  <textarea rows="4" cols="50" name="Comment">Comment</textarea><br /> 
  <label for="">Click to Confirm: </label> 
  <input type="checkbox" name="chkConfirm" value="agree"><br /> 
  <input type="submit" value="Submit" name="submit1"/> 
  <input type="reset" value="Clear" /> 
 </fieldset> 
</form>
<?php
$confirm = "";

if(isset($_POST['submit1'])){   
    if(isset($_POST['chkConfirm'])){
        $confirm = "Agreed<br/>";
    }
    else{
        $confirm = "Not Agreed<br/>";
    }
    if(!empty($_POST['txtEmail'])){
    $email = $_POST['txtEmail'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $comment = $_POST['Comment'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo"Email: $email <br/>Comments: $comment <br/> Confirm: $confirm <br/>";    
    }
    else{
        echo"Invalid Email Address";
    }
}
else{
    echo"Email must not be empty";
}
}
?>
<br/><br/>
<form method ="POST" action="">
<input type="text" name="txtEmail" value="<?php if(isset($_POST['txtEmail'])){ echo $_POST['txtEmail'];  } ?>" /><br />
</form>
<h2>Tax Calculator </h2>
<form method ="POST" action="">
<fieldset>
<legend>Without Tax Calculator</legend>
<lable for="">After Tax Price: </label>
<input type="text" name="tax" value="<?php if(isset($_POST['tax'])){ echo $_POST['tax'];  } ?>">
<lable for="">Tax Price: </label>
<input type="text" name="taxrate" value="<?php if(isset($_POST['taxrate'])){ echo $_POST['taxrate'];  } ?>">
<input type="submit" value="Submit" name="submit2">
<input type="reset" value="Clear"> 
</fieldset>
</form>
<?php
if(isset($_POST['submit2'])){
    $after_tax= $_POST['tax'];
    $tax_rate = $_POST['taxrate'];

    if($after_tax!=""&&$tax_rate!=""){
if(preg_match("/^[0-9]+\.[0-9]{2}$/",$after_tax)){
    if(preg_match("/^[0-9]{1,}$/",$tax_rate)){
    $before_tax = (100*$after_tax)/(100+$tax_rate);
    echo"<h2>Price Before Tax = £$before_tax </h2>"; 
    }
    else{
        echo"Please enter a whole number for tax rate";
    }
}
else{
echo"Please enter the price in the format 9.99";
}
}
else{
    echo"All Fields required";
}
}
?>

<h2>Pick a category</h2>
<a href="watWk5.php?cat=Films">Films</a>
<a href=" watWk5.php?summerlove=Books">Books</a>
<a href=" watWk5.php?jojo=Music">Music</a>
<?php
if(isset($_GET['cat'])){
echo"<br/>".$_GET['cat'];
}
?>
    </body>
</html>