<?php
$base_dir = "";
include($base_dir."includes/header.php");
include($base_dir."pages/products/products-slider.php");

?>


<!-- slider -->
<div id="myCarousel" class="carousel slide slider" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo $base_dir; ?>assets/images/slider1.jpg" alt="Slider1 image">
    </div>

    <div class="item">
      <img src="<?php echo $base_dir; ?>assets/images/slider1.jpg" alt="Slider1 image">
    </div>

    <div class="item">
      <img src="<?php echo $base_dir; ?>assets/images/slider1.jpg" alt="Slider1 image">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <img src="<?php echo $base_dir; ?>assets/images/leftArrow.png" alt="leftArrow image" class="glyphicon-chevron-left">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <img src="<?php echo $base_dir; ?>assets/images/rightArrow.png" alt="rightArrow image" class="glyphicon-chevron-right">
    <span class="sr-only">Next</span>
  </a>
</div>


<!--end of slider-->



<?php include("includes/siteInfoBanner.php"); ?>



<div id="tabbedSlider">
  <div class="container">
    <div class="header">
       <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="pill" href="#featuredTab">Featured</a></li>
                      <li><a data-toggle="pill" href="#newItemTab">New Item</a></li>
                      <li><a data-toggle="pill" href="#topSellerTab">Top Seller</a></li>
                      <li><a data-toggle="pill" href="#topRatingTab">Top Rating</a></li>
                    </ul>
                </div><!--end of col-sm-12-->
        </div><!--end of row-->
    </div><!--end of header-->
         <?php 
                require_once($base_dir."pages/products/productsDb.php");

            ?>
    <div class="content">
      <div class="tab-content">
          <div id="featuredTab" class="tab-pane fade in active">
         <?php loadProductsSlider('featuredProduct', $products); ?>
          </div><!--end of featuredTab-->

          <div id="newItemTab" class="tab-pane fade">
              <?php loadProductsSlider('newItemProduct', $products); ?>
          </div><!--end of newItemTab-->



          <div id="topSellerTab" class="tab-pane fade">
              <?php loadProductsSlider('topSellerProduct', $products); ?>
          </div><!--end of topSellerTab-->



          <div id="topRatingTab" class="tab-pane fade">
               <?php loadProductsSlider('topRatingProduct', $products); ?>
          </div><!--end of topRatingTab-->


      </div><!--end of tab-content-->    
    </div><!--end of content-->
  </div><!--end of cntainer-->
</div><!--end of tabbedslider-->



<div id="subscribe">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <div class="title">SUBCRIBE FOR GET OFFER UPDATE</div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <form action="#">
          <input type="email" required name="q" placeholder="Type your email" /><button type="submit">Lets go!</button>
        </form>
      </div><!--end of col-sm-12-->
    </div><!--end of row-->
  </div><!--end of container-->
</div><!--end of subscribe-->








<?php 
$base_dir = "";
include("includes/footer.php");  ?>