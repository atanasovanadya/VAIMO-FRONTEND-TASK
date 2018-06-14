<!-- THIS SOLUTION OF THE DESIGN WORKS GOOD ON EVERY BROWSER -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<script
  src="https://code.jquery.com/jquery-2.1.3.min.js"
  integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM="
  crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
		
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	
	
	<title>Vaimo Store</title>
</head>
	
<body>
	
	<!-- HEADER DIV -->
	<div class="header"></div>

	<div class="row" id="main-content">
		<div class="col">

			 <!-- STORE TITLE AND CART DIV -->
				<div class="row" id="logo-cart">
					<div class="col-6 col-sm-9"><img src="images/logo.png" id="logo"></div>
					<div class="col-6 col-sm-3">
						<!-- CART DIV -->
						<div id="cart">
							<div class="cart-button">
								<span class="amount" style="padding-left: 5px; padding-right: 5px">0</span>
								items in your cart
								<strong class="sum" style="padding-left: 15px; padding-right: 0px"></strong>
							</div>
							<div class="cart-items" id="cartitems">
									<ul></ul>
									<button class="btn" id="checkout-button">GO TO CHECKOUT</button>
							</div>
						</div>
					</div>
				</div>

				<!-- MENU -->
				<div class="row">
					<div class="col-sm-12">

						<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
							<img src="images/logo.png" class="logo-small">

							<button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" data-toggle="collapse" data-target="#collapse_target">
								<span class="navbar-toggler-icon" id="toggler"></span>
							</button>
							<div id="small-cart">
								 <div class="cart-button">
								 </div>
									<div class="cart-items">
											<ul></ul>
											<button class="btn" id="checkout-button">GO TO CHECKOUT</button>
									</div>
							</div>
							<div class="collapse navbar-collapse .align-items-end" id="collapse_target">
							<ul class="navbar-nav" id="nav-left">
								<li class="nav-item">
									<a class="nav-link">WOMEN</a>
								</li>
								<li class="nav-item">
									<a class="nav-link">MEN</a>
								</li>
								<li class="nav-item">
									<a class="nav-link">JUNIOR</a>
								</li>
								<li class="nav-item">
									<a class="nav-link">ACCESSORIES</a>
								</li>

								 <li class="nav-item dropdown">
									 <a class="nav-link data-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													COLLECTIONS
											 </a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

													<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">2014</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" id="last-lvl" href="#">WINTER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SPRING</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SUMMER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">AUTUMN</a></li>
														</ul>
													</li>

													<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">2013</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" id="last-lvl" href="#">WINTER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SPRING</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SUMMER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">AUTUMN</a></li>
														</ul>
													</li>

													<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">2012</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" id="last-lvl" href="#">WINTER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SPRING</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SUMMER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">AUTUMN</a></li>
														</ul>
													</li>


													<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">2011</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" id="last-lvl" href="#">WINTER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SPRING</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">SUMMER</a></li>
															<li><a class="dropdown-item" id="last-lvl" href="#">AUTUMN</a></li>
														</ul>
													</li>


												</ul>
										</li>

								<li class="nav-item" id="red">
									<a class="nav-link" id="red">SALE</a>
								</li>
							</ul>
								<ul class="navbar-nav ml-auto" id="nav-right">
								<li class="nav-item">
									<a class="nav-link">ACCOUNT</a>
								</li>
							 </ul>
						</div>
					</nav>

				</div>
			</div>



				<!-- IMAGE AND DESCRIPTION -->
			<div id="div-picture" class="row">
				<div class="col-lg-6" >
					<div id="container">
					<img class="fashion-photo" src="images/fashion.jpg">
					<div class="overlay">
						<h3>GET READY FOR SUMMER</h3>
						<p>WE HAVE PREPARED EVERYTHING FOR YOU!</p>
					</div>
					</div>
				</div>
				<div class="col-lg-6">
					<h1 class="info-text">THIS IS VAIMO STORE</h1>
					<h3 class="info-text">YOUR ONE-STOP FASHION DESTINATION</h3>
					<h6 class="info-text">Shop from over 850 of the best brands, including VAIMO's own label. Plus, get your daily fix of the freshest style, celebrity and music news.</h6>
				</div>
			</div>


			<!-- FAVOURITES -->

			<div id="div-favourites">
				<span id="favourites">
					OUR FAVOURITES
				</span>
			</div>


			<!-- PRODUCTS -->

			<div class="products">
				<?php
					sort($products)
				?>

						<ul>
							<?php $__empty_1 = true; foreach($products as $product): $__empty_1 = false; ?>
							<li>
								<img src="<?php echo e($product['image']); ?>" alt="">
									<p class="name"><?php echo e($product['title']); ?></p>
										<p class="price" style="font-weight: normal">
											<span class="price <?php if( $product['specialPrice']): ?> strike <?php endif; ?>">&euro;<?php echo e($product['price']); ?></span>
													 <?php if( $product['specialPrice']): ?>
											<span class="new-price" style="color: red">&euro;<?php echo e($product['specialPrice']); ?></span>
														<?php endif; ?>
										 </p>
											 <div class="button">
												<button class="btn">ADD TO CART</button>
											</div>
										</li>
								<?php endforeach; if ($__empty_1): ?>
										<p>no products in this category</p>
								<?php endif; ?>
					</ul>
				</div>

		</div>

</div>
	
	<!-- FOOTER -->
	<div class="row justify-content-md-center" style="background-color: #B5C2CA">
		<div id="footer">
			<div class="menu">
					<ul class="footer-menu">
						<li class="big-letters" style="padding-bottom: 10px">TOP CATEGORIES</li>
						<li>WOMEN</li>
						<li>MEN</li>
						<li>JUNIOR</li>
						<li>ACCESSORIES</li>
					</ul>
					<ul class="footer-menu">
						<li class="big-letters" style="padding-bottom: 10px">CUSTOMER SERVICE</li>
						<li>RETURNS</li>
						<li>SHIPPINGS</li>
						<li>ABOUT US</li>
						<li>CONTACT US</li>
					</ul>
			</div>
					<div class="subscribe">
						<p class="big-letters">NEWSLETTER SUBSCRIBE</p>
						<form action="<?php echo e(url('/newsletter/subscribe')); ?>" id="form-newsletter">
							<div class="form-text">
								<input id="subscribe" type="text" placeholder="Enter your email adress">
							</div>
							<div class="form-action" style="display: inline">
								<input type="submit" class="btn" id="btn-subscribe" value="SUBSCRIBE">
							</div>
						</form>
						<div id="validation-message" class="in-process"></div>
					</div>
		</div>
	</div>
	
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="script.js"></script>

</body>
</html>