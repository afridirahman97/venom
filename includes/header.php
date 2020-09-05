<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<?php

if(isset($_GET['pro_id'])){
    $product_id = $_GET['pro_id'];
    $get_product = "select * from products where product_id='$product_id'";
    $run_product = mysqli_query($con,$get_product);
    $row_product = mysqli_fetch_array($run_product);
    $p_cat_id = $row_product['p_cat_id'];
    $pro_title = $row_product['product_title'];
    $pro_price = $row_product['product_price'];
    $pro_desc = $row_product['product_desc'];
    $pro_img = $row_product['product_img'];
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat = mysqli_query($con,$get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    $p_cat_title = $row_p_cat['p_cat_title'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Venom's</title> 
        <link rel="stylesheet"href="styles/bootstrap-337.min.css">
        <link rel="stylesheet"href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet"href="styles/style.css"> 
    </head>
     <body>
       <div class="header-control">
       </div> 
        <div id ="top">
            <div class="container">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm">
                    <?php 
                        
                        if(!isset($_SESSION['customer_email'])){
                            echo "Welcome : Guest";
                        }else{
                            echo "Welcome : " . $_SESSION['customer_email'] . "";
                        }
                    
                    ?>
                    </a>
                    
                </div>
                <div class="col-md-6">
                <ul class="menu">
                <li>
                    <a href="customer_register.php"><font color="white">Register ||</font></a>
                    </li>
                    <li>
                        <a href="Checkout.php"><font color="white"> My Account ||</font></a>   
                    </li>
                    <li>
                        <a href="cart.php"><font color="white"> Go to cart ||</font></a>
                    </li>
                    <li>
                        <a href="checkout.php"><font color="white"> 
                            
                            <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php'> Login </a>";
                            }else{
                                echo " <a href='logout.php'> Log Out </a>";
                            }
                            ?>
                            
                            </font></a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
         
         <div id="navbar" class="navbar navbar-default">
             <a href="index.php"class="navbar-brand home">
             <img src="images/frhyuj.PNG" alt="Venom Logo" class="hidden-xs">
             </a>
         <button class="navbar-toggle" data-toggle="collapse" data-target="navigation">
             <span class="sr-only">Toggle Navigation</span>
             <i class="fa fa-align-justify"></i>
         </button>
         <button class="navbar-toggle" data-toggle="collaspe" data-target="#search">
             <span class="sr-only">Toggle search</span>
             <i class="fa fa-search"></i>
         </button>
         </div>
         
         <div class="navbar-collapse collapse" id="navigation">
             <div class="padding-nav">
                <ul class="nav navbar-nav left">
                <li class="active">
                   <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li>
                    <a href="customer/my_account.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Shopping Cart</a>
                </li>
                <li>
                    <a href="contact.php">Contact us</a>
                </li> 
                </ul> 
                 
           
             <a href="cart.php" class="btn navbar-btn btn-primary right">
                 <i class="fa fa-shopping-cart"></i>
                 <span>Have a look at your Cart </span>
             </a>
             <div class="navbar-collaspe collaspe right">
                 <button class="btn btn-primary navbar-btn"type="button"data-toggle="collapse"data-target="#search">
                 <span class="sr-only">Toggle Search</span>
                 <i class="fa fa-search"></i>
                 </button>
                 
                 <div class="collapse clearfix" id="search">
                     <form method="get" action="results.php" class="navbar-form">
                         <div class="input-group">
                             <input type="text" class="form-control"placeholder="Search" name="user_query" required>
                             <span class="input-group-btn">
                             <button type="submit" name="search" value="Search" class="btn btn-primary">
                              <i class="fa fa-search"></i>   
                                 
                             </button>
                             </span>
                         </div>
                     </form>
                 </div>
                 </div>
             </div>
         </div>
         