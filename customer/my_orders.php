<center>
<h1>My Made Payments so far..</h1>
</center>
<hr>

<div class="table-responsive">
 <table class="table table-bordered table-hover">
    <thread>
     
        <tr>
        
            <th>On:</th>
            
            <th>Amount:</th>
            <th>Quantity</th>
            <th>Order date:</th>
        
        </tr>
     
     </thread>
     <tbody>
     <?php 
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                
                
                $amount = $row_orders['amount'];
                
                $qty = $row_orders['qty'];
                
                $order_date = substr($row_orders['order_date'],0,11);
                
                $order_id = $row_orders['order_id'];
                
                $i++;
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> $<?php echo $amount; ?> </td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                
                
                
            </tr><!--  tr Finish  -->
            
            <?php } ?>
         
         
         
    </table> 
</div>