<?php

function loadProductsSlider($sliderId, $products){


global $base_dir;
?>


<div id="<?php echo $sliderId; ?>" class="carousel slide" data-ride="carousel">


  <div class="carousel-inner">
    <div class="item active">
      <?php
      $totalProducts = count($products);
      $j=0;
      foreach($products as $product):

            $j++;
            $product = (object) $product;
          ?>
          <div class="col-sm-4">
            <?php include($base_dir."pages/products/loop-item.php"); ?>
          </div>


          <?php
          if($j%3==0 && $j<$totalProducts):

          echo "</div><div class='item'>";
          endif;
          endforeach;
          ?>





    </div>
</div>


  <a class="left carousel-control" href="#<?php echo $sliderId; ?>" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#<?php echo $sliderId; ?>" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php } ?>






