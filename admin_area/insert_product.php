<?php

include("includes/db.php");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Insert Products</title>
        <link rel="stylesheet"href="css/bootstrap-337.min.css">
        <link rel="stylesheet"href="font-awsome/css/font-awesome.min.css">
    </head>
<body>
    
    <div class="row">
    
        <div class="col-lg-12">
            <ol class="breadcrumb">
        
            <li class="active">
            
            <i class="fa fa-dashboard"></i>Dashboard
            </li>
                </ol>
        </div>
    </div>
    
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-money fa-fw"></i>Insert Product
            </h3>
            </div>
            <div class="panel-body">
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-3 control-label">Product Title </label>
            <div class="col-md-6">
            <input name="product_title" type="text" class="form-control" required>
            </div>         
            </div>  
            <div class="form-group">
            <label class="col-md-3 control-label">Product Category </label>
            <div class="col-md-6">
            <select name="product_cat" class="form-control">
                <option>Select category </option>
                <?php
                $get_p_cats = "select * from product_categories";
                $run_p_cats = mysqli_query($con,$get_p_cats);
                
                while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                    
                    $p_cat_id = $row_p_cats ['p_cat_id'];
                    $p_cat_title = $row_p_cats ['p_cat_title'];
                    
                    echo "
                    <option value='$p_cat_id'> $p_cat_title </option>
                    
                    ";
                }
                ?>
                </select>
            </div>         
            </div>      
            <div class="form-group">
            <label class="col-md-3 control-label">Product Image </label>
            <div class="col-md-6">
            <input name="product_img" type="file" class="form-control" required>
            </div>         
            </div>  
            
            <div class="form-group">
            <label class="col-md-3 control-label">Product Price </label>
            <div class="col-md-6">
            <input name="product_price" type="text" class="form-control" required>
            </div>         
            </div>  
            <div class="form-group">
            <label class="col-md-3 control-label">Product Description </label>
            <div class="col-md-6">
            <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea> 
            </div>         
            </div>  
            <div class="form-group">
            <label class="col-md-3 control-label">Insert Product </label>
            <div class="col-md-6">
            <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
            </div>         
            </div>  
        </form>
        </div>   
        </div>    
    </div>  
    </div>
    <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
     $product_price = $_POST['product_price'];
     $product_desc = $_POST['product_desc'];
    
    $product_img = $_FILES['product_img']['name'];
    $temp_name = $_FILES['product_img']['temp_name'];
    
    move_uploaded_file($temp_name,"product_images/$product_img");
    
    $insert_product = "insert into products (p_cat_id,date,product_title,product_img,product_price,product_desc) values ('$product_cat',NOW(),'$product_title','$product_img','$product_price','$product_desc')";
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has inserted sucessfully')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
    }
}

?>