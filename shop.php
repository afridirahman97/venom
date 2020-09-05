
<?php
session_start();
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
                    <a href="customer_register.php"><font color="white">Register ||</font></a>
                    </li>
                    <li>
                        <a href="customer/my_account.php"><font color="white"> My Account ||</font></a>   
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
                            
                            </font>
                        </a>
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
                <li>
                   <a href="index.php">Home</a>
                </li>
                <li class="active">
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
         
        
         <div id="hot">
         
       
            <div class="container">
         <div class="col-md-9">
             
             <?php
             if(!isset($_GET['p_cat'])){
             
             echo "             
             <div class='box'>
             <h1>Shop</h1>
             </div>                   
                  ";
             }
             
             ?>
            </div>
         </div> 
         
          <div class="col-md-3">
         <?php
             include("includes/sidebar.php")
         ?>
         </div>
         
         
         <div id="content" class="container">
         <div class="row">
                
             <?php  
                 
                 if(!isset($_GET['p_cat'])){
                     
                     $per_page=9;
                     
                     if(isset($_GET['page'])){
                         
                         $page = $_GER['page'];
                         
                     }else{
                             $page=1;
                         
                         $start_from = ($page-1) * $per_page;
                         
                         #$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                         $get_products = "select * from products order by rand() LIMIT 0,9";
                         
                         $run_products = mysqli_query($con,$get_products);
                         
                         while($row_products=mysqli_fetch_array($run_products)){
                             
                             $pro_id = $row_products['product_id'];
                             $pro_title =$row_products['product_title'];
                             $pro_price =$row_products['product_price'];
                             $pro_img =$row_products['product_img'];
                             
                             echo "
                             <div class='col-md-4 col-sm-6 single'>
        <div class='product'>
        <a href='details.php?pro_id=$pro_id'>
        <img class='img-responsive' src='admin_area/product_images/$pro_img'>
        </a>
        <div class='text'>
        </h3>
        <a href='details.php?pro_id=$pro_id'>
        $pro_title
        </a>
        </h3>
        
        <p class='price'>
        $pro_price tk
        </p>
        
        <p class='button'>
        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
        View Details
        </a>
        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
        <i class='fa fa-shopping-cart'></i> Add to cart
        </a>
        </p>
        </div>
            </div>
            </div>
                             ";
                         }
                         }
                     }
                 ?>
                 
     
         <div class="row">
         <?php getpcatpro(); ?>
         
           </div>
         </div>
    </div>
</div>
         
         
          <?php
         
         include("includes/footer.php");
         
             ?>
         
            <script src="js/jquery-331.min.js"></script>
            <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>