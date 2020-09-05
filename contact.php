<?php

include("includes/db.php");
include("includes/header.php");
?>

        
         <div id="hot">
         
       
            <div class="container">
         <div class="col-md-9">
               <div class="box">
                   <center>
                  <h1>Contact Us <i class="fa fa-pencil"></i></h1>
                       </center>
             </div>
         </div>
            </div>
         </div> 
         
         
         <div class="col-md-9">
         
             <div class="box">
             <div class="box-header">
                 <center>
                 <h2>Feel Completely Free to Contact Us</h2>
                     <p class="text-muted">
                         If you have any question,feel free to ask us.We are open<strong> 24/7</strong>
                     </p>
                 </center>
                 <form action="contact.php" method="post">
                 <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" name="name" required>
                     </div>
                     <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" name="email" required>
                     </div>
                 <div class="form-group">
                     <label>Subject</label>
                     <input type="text" class="form-control" name="subject" required>
                     </div>
                     <div class="form-group">
                     <label>Message</label>
                     <textarea name="message" class="form-control"></textarea>
                     </div>
                     <div class="text-center">
                     <button type="submit" name="submit" class="btn btn-primary">
                         <i class="fa fa-envelope"> Send Message</i>
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
         
         