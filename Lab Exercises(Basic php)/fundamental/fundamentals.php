<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Sweta Yadav C7227282</h1> 
      </header>
      
      <section id="container">
         <h1>Fundamentals of PHP</h1>
         <?php
            echo '<h3>Selection</h3>';
            $day=date('l');
            echo 'it\'s '.$day;
            echo'<br/>';
        
            if($day=='Wednesday'){
                echo'it\'s midweek';    
            }
            else{
                echo'it\'s not midweek';
            }
            echo'<br/>';
            $timezone='Asia/Kathmandu';
            date_default_timezone_set($timezone);
            $hour=date("H");
            $min=date("i");
            $sec=date("s");
            echo'Time is '. $hour.':'.$min. ':'.$sec;
            echo'<br/>';
            if($hour<12){
                echo 'Good Morning';
            }
            elseif($hour>12 AND $hour<18){
                echo'Good afternoon';
            }
            else{
                echo'Good Night';
            }
            echo'<br/>';
            $pass ='password';
            echo 'Password is: '.$pass;
            echo'<br/>';
            if(strLen($pass)>4 AND strLen($pass)<10){
                echo 'Password length is valid';
            }
            else{
                echo 'Password length is invalid';
            }
            echo'<br/>';
            if($pass=='password' AND $pass=='username'){
                echo'Password is invalid';
            }
            else{
                echo 'Password is invalid';
            }
            ?>

            <?php
            echo'<h3>Array</h3>';
    
            echo'<h4>Simple Array</h4>';           
            $products=array('t-shirt','cap','mug');
            print_r($products);
            echo'<br/>';
            $products[1]='shirt';
            print_r($products);
            echo'<br/>';
            $products[]='skirt';
            print_r($products);
            echo'<br/>';
            echo'The item at index[2] is:'.$products[2];
            echo'<br/>';
            echo'The item at index[3] is:'.$products[3];
            echo'<br/>';
            ?>
            <?php
            echo'<h4>Associative Array</h4>';
            $customer=array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
            print_r($customer);
            echo'<br/>';
            $customer['CustAge']=36;
            $customer['CustEmail']='sarah@gamil.com';
            print_r($customer);
            echo'<br/>';
            echo'Item in my customer array'.'<br/>';
            echo'The item at index[CustName] is:'.$customer['CustName'].'<br/>';
            echo'The item at index[CustEmail] is:'.$customer['CustEmail'].'<br/>';
            echo'The item at index[CustAge] is:'.$customer['CustAge'].'<br/>';
            echo'<br/>';
            ?>
            <?php
            echo'<h3>Multi-Dimensional Array</h3>';
            echo'<br/>';
            ?>

            <?php
            echo'<h3>Loops</h3>';
            echo'<h3>While Loops</h3>';
            $counter=1;
            while($counter<6){
                echo'count is: '.$counter;
                $counter++;
                echo'<br/>';
            }
            ?>

<?php
$shirtPrice=9.99;
$counter=1;
do{
echo'<table border= 1px solid black>';
echo'<tr>';
echo'<th>Sn.No</th>';
echo'<th>Price</th>';
  $total=$counter*$shirtPrice;
  echo'<tr>';
  echo'<td>'.$counter.'</td>';
  echo'<td>£'.$total.'</td>';
  echo'</tr>';
    $counter++;
}while($counter<=10);
echo'</table>';
?>
<?php
echo'<h3>For Loops</h3>';


?>
		
      </section>
      <footer>   
         <small> <a href="../watIndex.html">Home</a></small>
      </footer>
   </body>
</html>

