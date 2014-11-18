<?php 

$baseCodeURL = "http://design.backcountry.com/sites/bike/projects/base-code/";
$projectJS = "js/project.js";


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title><?php echo $projectTitle; ?></title>
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/reset.css" />
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/webfonts.css" />
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/grid.css" />
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/screen.css" />
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/flexslider.css" />
<link rel="stylesheet" href="<?php echo $projectCSS; ?>" />
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/easyzoom.css" />
<link rel="stylesheet" href="<?php echo $baseCodeURL; ?>css/fonts-style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo $baseCodeURL; ?>js/jquery.competitive.js"></script>
<script src="<?php echo $baseCodeURL; ?>js/jquery.new_pdp.js"></script>
<script src="<?php echo $baseCodeURL; ?>js/flexslider.js"></script>
<script src="<?php echo $baseCodeURL; ?>js/jquery.elevatezoom.js"></script>
<script src="<?php echo $baseCodeURL; ?>js/easyzoom.js"></script>
<script src="<?php echo $baseCodeURL; ?>js/jquery.easing.1.3.js"></script>

</head>
<body>
<header>
	<section class="global-promotion">
	<div class="container">
		<a href="#" class="global-promotion-close"><img src="http://www.competitivecyclist.com/images/competitivecyclist/icon-16/close-promo.png?1372896401" alt="" /></a href="#">
		<a href="#" class="banner">
			<strong>20% off Apparel &amp; Accessories</strong>
			Use promo code TDF20
			<u>Shop Now</u>
		</a>
	</div>
</section>	

<menu>
	<div class="container">
		<div style="float:left;">
			<a href="#">Free Shipping on orders over $50</a>
		</div>
		<div style="float:right; margin-right: -8px;">
			<a href="#">Nathan Smith</a> /
			<a href="#">Order Status</a> /
			<a href="#"><img src="<?php echo $baseCodeURL; ?>img/layout/chat.png" />contact</a> /
			<a href="#">1.888.276.7130</a> 
		</div>
	</div>
</menu>	

<nav>
	<div class="container">
		<section class="brand"><a href=""></a></section>
		<section class="search">
	<form action="search" method="post">
		<input type="text" placeholder="Search bikes, clothing &amp; more..." />
		<input type="submit" value="" />
	</form>
</section>		<section class="flyouts">
			<ul class="primary-wrapper">
				<li class="primary">
					<a href="category" class="category">Bikes</a>
				</li>
				<li class="primary">
					<a href="#" class="category">Men</a>
				</li>
				<li class="primary">
					<a href="#" class="category">Women</a>
				</li>
				<li class="primary">
					<a href="#" class="category">Components</a>
				</li>
				<li class="primary">
					<a href="#" class="category">Accessories</a>
				</li>
				<li class="primary">
					<a href="sale" class="category sale">Sale</a>
				</li>
				<li class="primary">
					<a href="#" class="category">Learn</a>
				</li>
			</ul>
		</section>
		<section class="cart">
	<a href="cart" class="cart-main"><span>3</span><img src="<?php echo $baseCodeURL; ?>img/layout/cart-2.png" /></a>
</section>	</div>
</nav>	
</header>

