<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page | Shopping</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_dir; ?>assets/frameworks/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_dir; ?>assets/css/styles.css">
</head>
<body>

<header>
<div id="row1">
<div class="container">
	<div class="row">
			<div class="col-sm-7">
			<a class="links" href="#">
            <i class="glyphicon glyphicon-home"></i>
			Home

			</a>

			<a class="links" href="#">
            <i class="glyphicon glyphicon-user"></i>
			My Account

			</a>

			<a class="links" href="#">
            <i class="glyphicon glyphicon-shopping-cart"></i>
			Shopping Cart

			</a>

		    <a class="links" href="#">
		    <i class="glyphicon glyphicon-ok"></i>
		    Checkout

		    </a>
		</div><!--end of col-sm-7-->

		   <div class="col-sm-5">
                 <div class="dropdown pull-right currencyDropdown">
                    <a href="#" class="active links dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Dollar ($)</a></li>
                        <li><a href="#">Euro</a></li>
                     </ul>
                 </div>
            </div><!--end of col-sm-5-->

	</div><!--end of bootstrap row-->
</div><!--end of container-->
</div><!--end of row1-->


<div id="row2">
	<nav class="navbar navbar-default">
                    <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo $base_dir; ?>assets/images/logo.jpg" alt="logo's image" />
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Signup</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="glyphicon glyphicon-heart"></i>
                                     </a>
                                <ul class="dropdown-menu">
                                
                                <li><a href="#">Your Wishlist goes here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
	</div>


</div><!--end of row2-->


<div id="row3">
	<nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            Categories
                        </button>
                        </div>
                        <div id="navbar1" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li ><a class="active" href="#">Smartphone</a></li>
                                <li><a href="#">Desktop</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Networking</a></li>
                                <li><a href="#">Software</a></li>
                            </ul>

                            <form class="navbar-form navbar-right hidden-xs">
                                
                                <div class="form-group  pull-left">
                                <input type="text" placeholder="Search your item..." class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <i class="glyphicon glyphicon-search"></i>

                                </button>
                            </form>
                        </div><!--/.nav-collapse -->

                        
                    </div>
                </nav>



</div><!--end of row3-->
</header><!--end of header-->