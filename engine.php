<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rent a Bike</title> 
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
                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php"> <b><font color="white">  Welcome to Venom's Online Bike Shop </font></b></a>
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
                        <a href="checkout.php"><font color="white"> Login</font></a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
         
         <div id="navbar" class="navbar navbar-default">
             <a href="index.php"class="navbar-brand home">
             <img src="images/venom3.png" alt="Rent-a-bike Logo" class="hidden-xs">
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
                    <a href="checkout.php">My Account</a>
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
               <div class="box">
                  <h1>Shop~Engines</h1>
             </div>
         </div>
            </div>
         </div> 
         
          <div class="col-md-3">
         <?php
             include("includes/sidebar.php")
         ?>
         </div>
         
         
         <div id="content" class="container">
         <div class="row">
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details_szro.php">
                     <img class="img-responsive" src="admin_area/enginews/black%20horse%20300cc.jpg" alt="product 1">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details_szro.php">
                         Black Horse 200CC
                     </a>
                     </h3>
                     <p class="price">Tk.55,000</p>
                     <p class="button">
                     <a href="details_szro.php" class="btn btn-default">View Details</a>
                         <a href="details_szro.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details_ha199.php">
                     <img class="img-responsive" src="admin_area/enginews/questa%20200cc.jpg" alt="product 2">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details_ha199.php">
                         Questa 200CC
                     </a>
                     </h3>
                     <p class="price">Tk.35,000</p>
                     <p class="button">
                     <a href="details_ha199.php" class="btn btn-default">View Details</a>
                         <a href="details_ha199.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/MODIFIED%20LONCIN%20CBT250.jpg" alt="product 3">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         LONCIN CBT250
                     </a>
                     </h3>
                     <p class="price">Tk.50,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/LONCIN%20250CC.jpg" alt="product 4">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         LONCIN 250CC
                     </a>
                     </h3>
                     <p class="price">Tk.60,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div>
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/civic%20100cc.jpg" alt="product 5">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         Civic 100CC
                     </a>
                     </h3>
                     <p class="price">Tk.25,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/ZONGSHEN%20110C.jpg" alt="product 6">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         Zongshen 110CC
                     </a>
                     </h3>
                     <p class="price">Tk.30,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/ZONGSHEN%20250CC.jpg" alt="product 7">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         Zongshen 250CC
                     </a>
                     </h3>
                     <p class="price">Tk.75,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/ULTIMA%20BLACK%20CHROME%20ENGINES%20LL.jpg" alt="product 8">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         Ultimate Black Chrome 
                     </a>
                     </h3>
                     <p class="price">Tk.45,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
             </div>             
         </div> 
             
             <div class="col-sm-4 sm-6 single">
             <div class="product">
                 <a href="details.php">
                     <img class="img-responsive" src="admin_area/enginews/black%20horse%20300cc.jpg" alt="product 9">
                 </a>
                 <div class="text">
                 <h3>
                     <a href="details.php">
                         Black Horse 300CC
                     </a>
                     </h3>
                     <p class="price">Tk.50,000</p>
                     <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                         <a href="details.php" class="btn btn-primary">
                              <i class="fa fa-shopping-cart">
                                 Add To Cart
                                 </i>
                         </a>
                     </p>
                 </div>                
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