<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>P-Bag</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Skin Beauty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
	<?php
include("config/connection.php");

?>
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.html">CUSTOMER HOME</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<ul class="menu">
								<li><a href="Customer Home.php" >Home</a></li>
								
								<li><a href="Customer View Profile.php" >Profile</a></li>
							
								<li><a href="Customer Buy Product.php">Shopping</a></li>
								<li><a href="Customer View Buy Product.php" class="active">Purchased</a></li>
								
								<li><a href="index.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->
	<!-- page details -->
	
	<!-- //page details -->

	<!-- gallery -->
	<b><h2>VIEW PURCHASE DETAILS</h2></b>
	<div class="gallery py-5" id="gallery">
		<div class="container py-lg-5">	
						
				<div class="row" >
						<div class="col-md-2" style="border-style: solid;"><b>Order ID</b></div>
						<div class="col-md-2" style="border-style: solid;"><b>Product Name</b></div>
						<div class="col-md-2" style="border-style: solid;"><b>Product Price</b></div>
						<div class="col-md-2" style="border-style: solid;"><b>Quantity</b></div>
						<div class="col-md-2" style="border-style: solid;"><b>Status</b></div>
					</div>
				<?php 
					session_start();
					$uid=$_SESSION['uid'];
					$res=mysqli_query($conn,"SELECT * FROM customer_order WHERE uid='$uid'");
	  				while($data=mysqli_fetch_assoc($res))
					{
						$oid = $data['id'];
						$pid=$data['pid'];
						$product_title=$data['p_name'];
						$product_price=$data['p_price'];
						$qty=$data['p_qty'];
						$status=$data['p_status'];
					
						echo "
					<div class='row' >
						<div class='col-md-2' style='border-style: solid;'>$oid</div>
						<div class='col-md-2' style='border-style: solid;'>$product_title</div>
						<div class='col-md-2' style='border-style: solid;'>$product_price</div>
						<div class='col-md-2' style='border-style: solid;'>$qty</div>
						<div class='col-md-2' style='border-style: solid;'>$status</div>
					</div>
				";
					}
				?>
				
				
				

			



</div>
	</div>
	<!-- popup-->
	<div id="gal1" class="popup-effect animate">
		<div class="popup">
			<img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="popup-effect animate">
		<div class="popup">
			<img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="popup-effect animate">
		<div class="popup">
			<img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="popup-effect animate">
		<div class="popup">
			<img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="popup-effect animate">
		<div class="popup">
			<img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="popup-effect animate">
		<div class="popup">
			<img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal7" class="popup-effect animate">
		<div class="popup">
			<img src="images/g7.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal8" class="popup-effect animate">
		<div class="popup">
			<img src="images/g8.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal9" class="popup-effect animate">
		<div class="popup">
			<img src="images/g9.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery -->

	<!-- footer -->
	<footer class="footer-w3ls py-5">
		<div class="container py-sm-4">
			<div class="row">
				<div class="col-lg-3 col-sm-6 agileinfo_footer_grid">
					<!-- logo -->
					<div class="logo-2 mb-sm-4 mb-3">
						<h2><a href="index.html">P-Bag</a></h2>
					</div>
					<!-- //logo -->
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col-lg-3 col-sm-6 agileinfo_footer_grid mt-sm-0 mt-5">
					<h4 class="mb-sm-5 mb-4">Recent Articles</h4>
					<ul class="list-unstyled">
						<li>
							<span class="fa fa-angle-double-right mr-2"></span> Ut enim ad minima ven aiam</li>
						<li>
							<span class="fa fa-angle-double-right mr-2"></span> Fugiat nulla pariatur
						</li>
						<li>
							<span class="fa fa-angle-double-right mr-2"></span> Olor in repreh enderit</li>
						<li>
							<span class="fa fa-angle-double-right mr-2"></span>Duis aute irure dolor</li>
					</ul>
				</div>
				
				<div class="col-lg-3 col-sm-6 agileinfo_footer_grid mt-lg-0 mt-5">
					<h4 class="mb-sm-5 mb-4">Address</h4>
					<ul class="list-unstyled">
						<li>
							<span class="fa fa-map-marker mr-2"></span> 738 Diamond Road, New York</li>
						<li>
							<span class="fa fa-envelope mr-2"></span>
							<a href="mailto:info@example.com">info@example.com</a>
						</li>
						<li>
							<span class="fa fa-phone mr-2"></span> (0123) 0111 111 222</li>
						<li>
							<span class="fa fa-clock-o mr-2"></span>Everyday 9:00-17:00</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- footer last -->
	<div class="newsletter-main text-center py-md-5 py-4">
		<div class="container">
			<a href="#home" class="move-top text-center"></a>
			<!-- newsletter -->
			
			<!-- //newsletter -->
			<!-- copyright -->
			<div class="w3agile_footer_copy mt-sm-5 mt-4">
				<p>
					<a href="78788">P-Bag.</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer last -->

</body>

</html>


