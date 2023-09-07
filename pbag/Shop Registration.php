<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Registeration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Registration / Login form Responsive Widget, Login forms,Flat Pricing tables,Flat Drop downs  Sign up Web forms, Login sign up Responsive web Forms," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom CSS -->
<link href="Login/css/style4.css" rel='stylesheet' type='text/css' />
<!-- font CSS --><!--
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">-->
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<!--font CSS-->
<script src="Login/js/jquery2.0.3.min.js"></script>
</head>
<body class="dashboard-page">
	<?php
include("config/connection.php");

?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>SHOP REGISTRATION</h2>
					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>REGISTRATION</h3>
									</div>
									<div class="form-body form-body-info">
										<form data-toggle="validator" action="#" method="post">
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="cname" placeholder="Shop Name" required="">
												
											</div>
			
											
											<input type="text" class="form-control" id="inputName" name="district" placeholder="District" required="">
											<input type="text" class="form-control" id="inputName" name="location" placeholder="Location" required="">
											<input type="text" class="form-control" id="inputName" name="mobile" placeholder="Mobile" required="">
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											
											<input type="text" class="form-control" id="inputName" name="regno" placeholder="Registration No" required="">
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="Password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
														I have read and accept terms of use.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" name="submit" class="btn btn-primary disabled">Submit</button>
											</div>
										</form>
										<?php
					  if(isset($_REQUEST['submit']))
					  {
						  	$cname=$_REQUEST['cname'];
					  		$district=$_REQUEST['district'];
					  		$location=$_REQUEST['location'];
					  		$email=$_REQUEST['Email'];
						    $mobile=$_REQUEST['mobile'];
					  		$regno=$_REQUEST['regno'];
						    $password=$_REQUEST['Password'];
					  					  $qry="insert into shop_reg(shop,district,city,phone,email,reg_no,password,status) values('$cname','$district','$location','$mobile','$email','$regno','$password','Registered')";
					//  echo "saved";
						  echo $qry;
					 		mysqli_query($conn,$qry);
					 		$qry="insert into login values('$email','$password','Shop')";
					  		mysqli_query($conn,$qry);
							echo "<script>alert('Registration completed successfully');
							window.location = (\"index.php\")
							</script>";
					 
					  }
					  
					  ?>	
									</div>
								</div>
							</div>
							
							
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2020 P-Bags . All Rights Reserved . Design by <a href="about.html" target="_blank">P-Bags</a></p>
		</div>
		<!-- //footer -->
		<!-- input-forms -->
		
		
		<script type="text/javascript" src="Login/js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="Login/js/validator.min.js"></script>
		<!--//validator js-->
</body>
</html>
