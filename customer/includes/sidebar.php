
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <?php
        $customer_session = $_SESSION['customer_email'];
        $get_customer = "select * from customers where customer_email='$customer_session'";
        $run_customer = mysqli_query($con,$get_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_image = $row_customer['customer_image'];
        $customer_name = $row_customer['customer_name'];
        if(!isset($_SESSION['customer_email'])){
            
        }else{
            echo "
            <center>
            <style>
                .image-resize{
                    height: 250px;
                    object-fit: cover;
                    object-position: center;
                }
            </style>
                <img src='customer_images/$customer_image' class='img-responsive' >
                </center>
                <br/>
                <h3 class='panel-title' align='center'>
                Name : $customer_name
                </h3>
                ";
        }
        ?>
    </div>
    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
        <li class="<?php if(isset($_GET['my_orders'])){echo "active";} ?>">
            <a href="my_account.php?my_orders">
            <i class="fa fa-list"></i> My orders
            </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])){echo "active"; } ?>">
                <a href="my_account.php?edit_account">
                <i class="fa fa-pencil"></i> Edit Account
                </a>
            </li>
           
            <a href="logout.php">
            <i class="fa fa-sign-out"></i> Log Out
            </a>
        </ul>
    
    </div>
</div>
        
        