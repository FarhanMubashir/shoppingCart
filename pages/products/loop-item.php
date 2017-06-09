<div class="product">
	<div class="img" style="background-image: url(<?php 

	echo $base_dir; ?>assets/uploads/<?php

	 echo $product->img; ?>);">

	<?php
	if(isset($product->discount) && $product->discount>0): ?>
	<div class="discountBadge">
		<span class="percent"><?php echo $product->discount; ?>%</span>
	</div>
     <?php endif; ?>
		
		<div class="title"><a href="singleProduct.php"><?php echo $product->title; ?></a></div><!--end of title-->
	</div><!--end of img-->
	<div class="price <?php echo $product->discount>0?'discounted':'' ?>">
		$<?php echo number_format($product->price); ?>
	</div><!--end of price-->

	<?php
	if(isset($product->discount) && $product->discount>0): 
	$discount = ($product->price * $product->discount) / 100;

	?>
	<div class="newPrice">
		$<?php echo number_format($product->price - $discount); ?>
	</div><!--end of newPrice-->
<?php endif; ?>




	<div class="rating">
	<?php for($i=1; $i<=5; $i++): ?>
	<div class="star <?php 
	if($i<=$product->rating):
		echo "active";

	endif;

	?>"></div><!--end of star-->
    <?php endfor; ?>
	</div><!--end of rating-->




	<a href="#" class="btn btnStyle1">
		<i class="glyphicon glyphicon-shopping-cart"></i>
		Add To Cart
	</a>





</div><!--end of product -->