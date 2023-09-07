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
		session_start();
include("config/connection.php");

?>
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.html">SHOP HOME</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
						
							<ul class="menu">
								<li><a href="Shop Home.php" >Home</a></li>
								<li><a href="Shop Add Product.php" class="active">Add Product</a></li>
								<li><a href="Shop View My Product.php">My Product</a></li>
								<li><a href="Shop View Orders.php">view Bookings</a></li>
								
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
		
	

<form method="POST" enctype="multipart/form-data">
				
				<table>
				<tr>
				<td>
					<label>Product  Name</label></td>
					<td><input type="text" name="product_title" ></td>
                 </tr>
                 <tr>
				<td>
					<label>Category Name</label></td>
					<td>
					<select name="cat_title" value=" "><?php $qry="select cat_title from categories";
					$rs=mysqli_query($conn,$qry);
					while($res=mysqli_fetch_array($rs))
					{
						echo"<option value='".$res['cat_title']."'>".$res['cat_title']."</option>";
					}
				?>
				 </select>
               </td>
					</tr>
                <tr>
                <td>
					<label>Subcategory Name</label></td>
					<td><select name="brand_title" value=" "><?php $qry="select brand_title from brands";
					$rs=mysqli_query($conn,$qry);
					while($res=mysqli_fetch_array($rs))
					{
						echo"<option value='".$res['brand_title']."'>".$res['brand_title']."</option>";
					}
						
				?>
				 </select>
					</td>
                </tr>
                <tr>
                <td>
					<label>Price</label></td>
					<td><input type="text" name="price" pattern="[0-9]+"></td>
                 </tr>
                 <tr>
					<td><label>Quantity</label></td>
					<td><input type="text" name="qty" ></td>
                 </tr>
				<tr>
					<td><label>Image</label></td>
					<td><input type="file" name="file" ></td>
                </tr>
                
				<tr>
					<td><label>Description</label></td>
					<td><input type="text" name="des" ></td>
                 </tr>
                 <tr>
					 <td><label>Key Word</label></td>
					<td><input type="text" name="key" ></td>
                 </td>
	</tr>
			<tr>
			<td>
				<input type="submit" value="Add" name="Add"/></td></tr>
					 <?php
			
			$i = $_SESSION['sid'];
					  if(isset($_REQUEST['Add']))
					  {  
					  	  $a=$_REQUEST['cat_title']; 
						  $qry="select * from categories where cat_title='$a'";
						  $rs=mysqli_query($conn,$qry);
						  $res=mysqli_fetch_array($rs);
						  $cid=$res['cat_id'];
						  $b=$_REQUEST['brand_title'];
						  $qry1="select * from brands where brand_title='$b'";
						  $rs1=mysqli_query($conn,$qry1);
						  $res1=mysqli_fetch_array($rs1);
						  $bid=$res1['brand_id'];
						  $c = $_REQUEST['product_title'];
						  $d=$_REQUEST['price'];
						  $e=$_REQUEST['des'];
						  $g = $_REQUEST['qty'];
						  $file = $_FILES['file'];
						  $file_name = $file['name'];
						  $file_type = $file ['type'];
						  $file_size = $file ['size'];
						  $file_path = $file ['tmp_name'];
						  $f = $_REQUEST['key'];
//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

if($file_name!="" && ($file_type="assets/prod_images/jpeg"||$file_type="assets/prod_images/png"||$file_type="assets/prod_images/gif")&& $file_size<=614400)

if(move_uploaded_file ($file_path,'assets/prod_images/'.$file_name))//"images" is just a folder name here we will load the file.

					 // $c=$_REQUEST['subcategory_name'];
					  	
					  //$target_dir = "img/";
                      //$target_file = $target_dir . basename($_FILES["file"]["name"]);
                      //move_uploaded_file($_FILES["file"]["name"], $target_file);
					  	
					  	
          				mysqli_query($conn,"insert into products(product_cat,product_brand,product_title,product_price,quantity,product_desc,product_image,product_keywords,shid) values('$cid','$bid','$c','$d','$g','$e','$file_name','$f','$i')");
			  			echo "<script>alert('successfully product added');</script>";
			  		  }	
					  ?>		
              </table>
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
				<p>© 2020 P-Bags. All rights reserved | Design by
					<a href="http://w3layouts.com/">P-Bags.</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer last -->

</body>

</html>


