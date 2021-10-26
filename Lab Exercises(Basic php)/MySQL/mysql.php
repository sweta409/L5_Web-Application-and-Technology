<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
</head>
<body>
<h2>Insert a Record</h2>
<form method="post" action="InsertRecord.php">
      <fieldset>
       <legend>Enter Customer Details</legend>
            <label for="First Name: ">FirstName</label>
            <input type="text" name="txtFirst" /><br />
            <label for="$LastName: ">LastName </label>
            <input type="text" name="txtSur" /><br />
            <label for="Email: ">Email </label>
            <input type="text" name="txtEmail" /><br />
            <label for="Password: ">Password </label>
            <input type="password" name="txtPass" /><br />
            <label for="Gender: ">Gender </label>
            <!-- <input type="Gender" name="txtGender" /><br /> -->
            
            <select id="Gender" name="txtGender"> 
            <option value="Male">Male</option> 
            <option value="Female">Female</option> 
             <option value="Others">Others</option> 
            </select> 
            <label for="Age: ">Age</label>
            <input type="text" name="txtAge" /><br />
            <input type="submit" value="Submit" name="logSub" />
            
       </fieldset>
    </form> 
    <?php
        include 'selectRecord.php';
    ?>
</body>
</html>