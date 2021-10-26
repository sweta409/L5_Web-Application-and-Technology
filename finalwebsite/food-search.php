<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="food-search.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="./register/register.php">Register/Login</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on Your Search <a href="#" class="text-white">"Momo"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
    <hr>
      <div class="small-container">
        <div class="row row-2" >
            <h1 style = "float:left; font-size: 50px ">All Products</h1>
        </div>
            <div class="row">
                <?php 
                    $Product_Name = isset($_GET['Product_Name']) ? $_GET['Product_Name']: '';
                    $Product_Category = isset($_GET['Product_Category']) ? $_GET['Product_Category'] : '';
                    $Product_Type = isset($_GET['Product_Type']) ? $_GET['Product_Type'] : '';
                    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : '';

                ?>
                <form action="food-search.php" method="get">
                    <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="Product_Name" placeholder="Product Name" 
                            value="<?php if(isset($_GET['Product_Name'])) 
                            echo $_GET['Product_Name']
                            ?>"/>
                    </div>
                    <div class="form-group col-md-2">
                        <select name="Product_Type" class="form-control">
                            <option value="">Product Type</option>
                            <option value="fast_food" <?php if($Product_Type=="fast_food") echo 'selected'?> >Fast Food</option>
                            <option value="hot_drinks" <?php if($Product_Type=="hot_drinks") echo 'selected'?>>Hot Drinks</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select name="Product_Category" class="form-control">
                            <option value="">Sort By Category</option>
                            <option value="food" <?php if($Product_Category=="food") echo 'selected'?>>food</option>
                            <option value="drinks" <?php if($Product_Category=="drinks") echo 'selected'?>>Drinks</option>
        
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select name="sort_by" class="form-control">
                            <option value="">Sort By Name or Price</option>
                            <option value="Name" <?php if($sort_by=="Name") echo 'selected'?> >Name</option>
                            <option value="Price" <?php if($sort_by=="Price") echo 'selected'?> >Price</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-primary" type="submit" name="submit" value="Search" />
                    </div>
                </form>
            </div>  
            <?php        
            include 'connection.php';
            $fields = array('Product_Name','Product_Type', 'Product_Category',);
            $conditions = array();
            foreach($fields as $field){
                // if the field is set and not empty
                if(isset($_GET[$field]) && $_GET[$field] != '') {
                    // create a new condition while escaping the value inputed by the user (SQL Injection)
                    $conditions[] = "`$field` LIKE '%" . $_GET[$field] . "%'";
                }
            }
            
            
            $query = "SELECT * FROM product ";
            if(count($conditions) > 0) {
                // append the conditions
                $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
            }
            $orderby = '';
            if($sort_by=='Name'){
                $orderby = ' order by Product_Name ASC ';
            }else{
                $orderby = ' order by Product_Price DESC ';
            } 
            $query = $query. $orderby ;
            $result = mysqli_query($connection, $query);
            echo'<div class="row">';
            while($row = mysqli_fetch_assoc($result)){               
            echo'<div class="col-4">';
            echo '<img src="./images/'.$row['Product_img_name'] . '" />';
            echo '<h4>'. $row['Product_Name'].'</h4>';
            echo '<p>$'.$row['Product_Price'].'</p>';
            echo ' <select name="" id="">
                <option value="">Select size</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>

            <input type="number" value ="1">
            <br>
            <a href="" class="btn">Add to Cart</a> ';
            echo'</div>';     
            }
            echo'</div>';
  
        ?>
        </div>





    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Sweta Yadav</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>