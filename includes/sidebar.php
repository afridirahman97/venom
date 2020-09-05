<?php

include("includes/db.php");

?>
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title"><b>Motorcycle Components</b></h3>
    </div>
    
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
        
        <?php getPCats(); ?>
            
        </ul>
        
    </div>
</div>

   <div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h5 class="panel-title"><b>Have you found what you were looking for ?</b></h5>
    </div>
    
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
        
        <li><a href="#">Yes</a></li>
        <li><a href="#">No</a></li> 
        </ul>
    
        
    </div>
</div>

<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title"><b>Are you enjoying using Venom's ?</b></h3>
    </div>
    
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
        
        <li><a href="#">Venom is good</a></li>
        <li><a href="#">Venom is bad</a></li> 
        <li><a href="#">Venom is very good</a></li>
        <li><a href="#">Venom is very Bad</a></li>
        <li><a href="#">Venom is the best</a></li>  
        <li><a href="#">Venom is the worst</a></li>  
        </ul>
    </div>
</div>
     