<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>P-Bags</title>
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
								
								<li><a href="Customer View Profile.php" class="active">Profile</a></li>
								
								<li><a href="Customer Buy Product.php">Shopping</a></li>
								<li><a href="Customer View Buy Product.php">Purchased</a></li>
							
							
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
	<div class="gallery py-5" id="gallery">
		<div class="container py-lg-5">				
				<form id="form1" name="form1" method="post" action="">
  <?php 
		session_start();
   		$res=mysqli_query($conn,"select * from cust_reg where email='".$_SESSION["username"]."'");
		$data=mysqli_fetch_assoc($res);
 		$id=$data["cid"];
  		$fname=$data["cname"];
		$email=$data["email"];
		$phno=$data["mobile"];
  		$address=$data["address"];
  		$district=$data["district"];
  		$pin=$data["pincode"];
  // $target_dir = "img/";
//$target_file = $target_dir . basename($_FILES["Photo"]["name"]);
//move_uploaded_file($_FILES["Photo"]["name"], $target_file);
//$pic=$_FILES["Photo"]["name"];
  		if (isset($_REQUEST["Update"]))
  		{
			$fname=$_REQUEST["cname"];
			$email=$_REQUEST["email"];
			$phno=$_REQUEST["PhoneNo"];
			$address=$_REQUEST["address"];
			$district=$_REQUEST["district"];
  			$pin=$_REQUEST["pincode"];
  			mysqli_query($conn,"update cust_reg set cname='$fname' ,email='$email' ,mobile= '$phno' ,address= '$address' , district= '$district' ,pincode= '$pin' where email='$email'");
		}
  ?>
  <h2>VIEW/UPDATE YOUR PROFILE</h2>
  <table width="333" border="1">
    <tr>
      <td width="150">CustomerID</td>
      <td><?php echo $id ?></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><input type="text" name="cname" value="<?php echo $fname ?>"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" value="<?php echo $email ?>"/></td>
    </tr>
    <tr>
      <td>Mobile</td>
     <td><input type="text" name="PhoneNo" value="<?php echo $phno ?>"/></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="address" value="<?php echo $address ?>"/></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input type="text" name="district" value="<?php echo $district ?>"/></td>
    </tr>
    <tr>
      <td>Pincode </td>
      <td><input type="text" name="pincode" value="<?php echo $pin ?>" /></td>
	  </tr>
  </table>
  <label>
  <input name="Update" type="submit" id="Update" value="Update" style="outline: none;
    border: none;
    background: #745EC5;
    color: #fff;
    padding: 0.8em 0;
    width: 120px;
    text-align: center;
    font-size: 1em;
    -webkit-transition: .5s all;
    font-family: 'OpenSans-Regular'" />
  </label>
  <?php
  if(isset($_REQUEST["v1"]))
  {
     $res=mysqli_query($conn,"select * from cust_reg where email='".$_SESSION["username"]."'");
$data=mysqli_fetch_assoc($res);
 $id=$data["CustomerID"];
  }
  ?>

</form>



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
						<h2><a href="index.html">P-Bags</a></h2>
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
				<p>© 2019 P-Bags. All rights reserved | Design by
					<a href="http://w3layouts.com/">P-Bags.</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer last -->

</body>

</html>


