<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Product</title>
    <style>
         table ,th , td{
            border: 1px solid black;
            
        }
        th, td{
            padding:10px;
           
        }
    </style>
</head>
<body>
        <h2>Manage Products</h2>
    <?php
        include 'connection.php';
        $query = "SELECT * FROM products";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result)){
            echo '<table>';
            echo '<tr>';
                echo '<th>Product Name </th>';
                echo '<th>Price </th>';
                echo '<th>Image </th>';
                echo '<th>Amend </th>';
                echo '<th>Delete </th>';
            echo '</tr>';

            echo '<tr>';
                echo '<td>'.$row['product_name'].'</td> ';
                echo '<td>'.$row['price'].'</td>';
                echo '<td>'.'<img src="./images/'.$row['Product_img_name'] . '" />'.'</td>';
                echo '<td>'.'<a href="amendProduct.php?id='.$row['product_id'].'">Amend</a>'.'</td>';
                echo '<td>'.'<a href="deleteProduct.php?id='.$row['product_id'].'">Delete</a> <br />'.'</td>';
            echo '</tr>';
            echo '</table>'; 
        }
        
    ?> 
</body>
</html>