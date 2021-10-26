<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Products</title>
</head>
<body> 
    <h2 style="color:rgb(22, 8, 61); font-family: Brush Script MT, Brush Script Std, cursive; font-size: 90px;float: left">Fragnance</h2> 
            <div class="container"> 
                <div class="navbar">            
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="product.php" class="active">Products</a></li>
                            <li><a href="account.php">Account</a></li>
                            
                        </ul>
                    </nav>
                    <a href="cart.php"><img src="images/cart.png" width ="30px" height ="30px" alt="" srcset=""></a>
                <img src="images/menu.png" class ="menu-icon" onclick="menutoggle()">
                </div>
            </div>

        <div class="searchbar">

        </div>
    <hr>
      <div class="small-container">
        <div class="row row-2" >
            <h1 style = "float:left; font-size: 50px ">All Products</h1>
        </div>
            <div class="row">
                <?php 
                    $Product_Name = isset($_GET['Product_Name']) ? $_GET['Product_Name']: '';
                    $Product_Type = isset($_GET['Product_Type']) ? $_GET['Product_Type'] : '';
                    $Product_Brand = isset($_GET['Product_Brand']) ? $_GET['Product_Brand'] : '';
                    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : '';

                ?>
                <form action="product.php" method="get">
                    <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="Product_Name" placeholder="Product Name" 
                            value="<?php $Product_Name ?>"/>
                    </div>
                    <div class="form-group col-md-2">
                        <select name="Product_Type" class="form-control">
                            <option value="">Product Type</option>
                            <option value="Men" <?php if($Product_Type=="Men") echo 'selected'?> >Men</option>
                            <option value="Women" <?php if($Product_Type=="Women") echo 'selected'?>>Women</option>
                            <option value="Unisex" <?php if($Product_Type=="Unisex") echo 'selected'?>>Unisex</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select name="Product_Brand" class="form-control">
                            <option value="">Sort By Brand</option>
                            <option value="Chanel" <?php if($Product_Brand=="Chanel") echo 'selected'?>>Chanel</option>
                            <option value="Dior" <?php if($Product_Brand=="Dior") echo 'selected'?>>Dior</option>
                            <option value="Gucci" <?php if($Product_Brand=="Gucci") echo 'selected'?>>Gucci</option>
                            <option value="Versace" <?php if($Product_Brand=="Versace") echo 'selected'?>>Versace</option>
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
            $fields = array('Product_Type', 'Product_Name', 'Product_Brand');
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
            echo '<img src="./images/'.$row['Product_Img'] . '" />';
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
    <!--Footer-->
      <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download</h3>
                    <p>download App for Android and ios mobile Phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <p>Our Purpose is to sustainably make the pleasure and Benefits of sport Accessible
                        to the many.
                    </p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>You Tube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copright 2021 - Shristi Hamal</p>
        </div>
    </div>

</body>
</html>