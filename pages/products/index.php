<?php
$base_dir = "../../";

require_once($base_dir."pages/products/loop-item.php");
include($base_dir."includes/header.php");
include($base_dir."pages/products/productsDb.php");

?>

<div id="productsPage">
	<div class="container">


		<div class="row">
			<div class="col-sm-12">
				<div class="breadCrumbs">
					<a href="<?php echo $base_dir; ?>index.php">Home</a> / Desktop
				</div><!--end of breadcrumbs-->
			</div><!--end of col-sm-12-->
		</div><!--end of row-->

		<div class="content">
			<div class="row">
				<div class="col-sm-9">
					 <img src="<?php echo $base_dir.'assets/images/banner.jpg'; ?>" alt="banner" class="full_width">
					 <br><br>
					 <div id="products">
                         <div class="row">
                            <?php 
                               foreach($products as $product):
                               $product = (object) $product;
                              ?>

                            <div class="col-sm-4">
                             <?php generateProductTile($product); ?>
                            </div>

                            <?php endforeach; ?>

                          </div>
                     </div><!--end of products-->
				</div><!--end of col-sm-9-->

				<div class="col-sm-3">
					<div class="vMenu">
						<div class="heading">Category</div><!--end of heading-->

						<ul>
							<?php for($i=0; $i<=5; $i++): ?>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i>Smart Phone
								</a>
							</li>

						    <?php endfor; ?>

						</ul>
					</div><!--end of vMenu-->



					<div class="vMenu checkboxes">
						<div class="heading">By Brand</div><!--end of heading-->

						<ul>
							<?php for($i=0; $i<=5; $i++): ?>
							<li>
								<input class="hidden" type="checkbox" name="brand" id="brand<?php echo $i;?>" />
								<label for="brand<?php echo $i ; ?>">Smart Phone</label>
							</li>

						    <?php endfor; ?>

						</ul>
					</div><!--end of vMenu-->



					<div class="vMenu price">
						<div class="heading">By Price</div><!--end of heading-->

						<ul>
							<?php for($i=1; $i<=5; $i++): ?>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i>
									<?php echo "$".$i."0,000 - $".($i + 1)."0,000" ; ?>
								</a>
							</li>

						    <?php endfor; ?>

						</ul>
					</div><!--end of vMenu-->


				</div><!--end of col-sm-3-->








			</div><!--end of row-->
		</div><!--end of content-->



	</div><!--end of container-->
</div><!--end  of productsPage-->

<?php include($base_dir."includes/siteInfoBanner.php"); ?>




<?php include($base_dir."includes/footer.php"); ?>