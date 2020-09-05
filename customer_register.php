<?php 

    $active='Account';
    include("includes/header.php");

?>
         
        
         <div id="hot">
         
       
            <div class="container">
         <div class="col-md-9">
               <div class="box">
                   <center>
                  <h1>Register <i class="fa fa-edit"></i></h1>
                       </center>
             </div>
         </div>
            </div>
         </div> 
         
         
         <div class="col-md-9">
         
             <div class="box">
             <div class="box-header">
                 <center>
                 <h2>Register Here</h2>
                 </center>
                 <form action="customer_register.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                     <label>Your Name</label>
                     <input type="text" class="form-control" name="c_name" required>
                     </div>
                     <div class="form-group">
                     <label>Your Email</label>
                     <input type="text" class="form-control" name="c_email" required>
                     </div>
                 <div class="form-group">
                     <label>Your Password</label>
                     <input type="password" class="form-control" name="c_pass" required>
                     </div>
                     <div class="form-group">
                     <label>Your Phone Number</label>
                     <input type="text" class="form-control" name="c_contact" required>
                     </div>
                     <div class="form-group">
                     <label>Your Address</label>
                     <input type="text" class="form-control" name="c_address" required>
                     </div>
                     <div class="form-group">
                     <label>Your Profile Picture</label>
                     <input type="file" class="form-control form-height-custom" name="c_image" required>
                     </div>
                     
                     <div class="text-center">
                     <button type="submit" name="register" class="btn btn-primary">
                         Register
                         </button>
                     </div>
                 </form>
                 </div> 
             </div>             
    

         <?php
         
         include("includes/footer.php");
         
             ?>
             
         </div>
            <script src="js/jquery-331.min.js"></script>
            <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>
         
         <?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register has items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register doesn't have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>