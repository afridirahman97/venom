<?php
$active='Home';
include("includes/db.php");
include("includes/header.php");
?>


         
         <div class="container" id="slider">
             <div class="col-md=12">
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        
                        <li class="active" data-target="myCarousel" data-slide-to="0"></li>
                         <li data-target="myCarousel" data-slide-to="1"></li>
                         <li data-target="myCarousel" data-slide-to="2"></li>
                         <li data-target="myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        
                        $get_slides = "select * from slider LIMIT 0,1";
                        
                        $run_slides = mysqli_query($con,$get_slides);
                        
                        while($row_slides=mysqli_fetch_array($run_slides)){
                            
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];
                            
                            echo " 
                            
                            <div class='item active'>
                            
                            <img src='admin_area/slides_images/$slide_image'>
                            
                            </div>                  
                            ";                           
                        }
                        
                        
                        $get_slides = "select * from slider LIMIT 1,3";
                        
                        $run_slides = mysqli_query($con,$get_slides);
                        
                        while($row_slides=mysqli_fetch_array($run_slides)){
                            
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];
                            
                            echo " 
                            
                            <div class='item'>
                            
                            <img src='admin_area/slides_images/$slide_image'>
                            
                            </div>                  
                            ";                           
                        }
                        
                        ?>
                    
                    </div>
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
             </div>
         </div>
         
         <div id="advantages">
         <div class="container">
             <div class="same-height-row">
             <div class="col-sm-4">
                 <div class="box same-height">
                 <h3> <a href= "#">We provide the Best Online Service</a></h3>
                     <p>We,Venom promise you to give a fantastic online shopping experience</p>
                 
                 </div>        
                </div> 
                 
                 <div class="col-sm-4">
                 <div class="box same-height">
                 <h3> <a href= "#">We don't compromise with quality</a></h3>
                     <p>Here at Venom, We make sure that the conditions of every products are always good </p>
                 
                 </div>               
                </div>
                 
                 <div class="col-sm-4">
                 <div class="box same-height">
                 <h3> <a href= "#">No refunds or replacements</a></h3>
                     <p>Once a product is sold, we do not refund for that product or replace that with any other products</p>
                 
                 </div>            
                </div>
                 
             </div>
         </div>         
     </div>
         
         <?php
         
         include("includes/footer1.php");
         
             ?>
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>