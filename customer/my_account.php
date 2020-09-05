<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");

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
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                    </a>
                </div>
                <div class="col-md-6">
                <ul class="menu">
                <li>
                    <a href="../customer_register.php"><font color="white">Register ||</font></a>
                    </li>
                    <li>
                        <a href="my_account.php"><font color="white"> My Account ||</font></a>   
                    </li>
                    <li>
                        <a href="../cart.php"><font color="white"> Go to cart ||</font></a>
                    </li>
                    <li>
                        <a href="../checkout.php"><font color="white"> 
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

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
             <img src="frhyuj.png" alt="Venom Logo" class="hidden-xs">
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
                <li>
                   <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="../shop.php">Shop</a>
                </li>
                <li class="active">
                    <a href="my_account.php">My Account</a>
                </li>
                <li>
                    <a href="../cart.php">Shopping Cart</a>
                </li>
                <li>
                    <a href="../contact.php">Contact us</a>
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
         
        
         <div id="hot">
         
       
            <div class="container">
         <div class="col-md-9">
               <div class="box">
                  <h1>My Account <i class="fa fa-user"></i></h1>
             </div>
         </div>
            </div>
         </div> 
         
          <div class="col-md-3">
         <?php
             include("includes/sidebar.php")
         ?>
         </div> 
         
        <div class="col-md-9">
         <div class="box">
            <?php
                 if (isset($_GET['my_orders'])){
                     include("my_orders.php");
                 }
              ?>                
            
            </div>
         </div>
         
         <?php } ?>