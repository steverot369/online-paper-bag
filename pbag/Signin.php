<!DOCTYPE html>
<head>
<title>P-Bags</title>
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
						<h2>P-Bags</h2>
					</div>						
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Login Here</h3>
										</div>
										<div class="form-body form-body-info">
											<form  action="#" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" name="email" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="terms1" data-error="Before you wreck yourself" required="">
																Remember me
															</label>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
														<button type="submit" class="btn btn-primary" name="submit">Login</button>
													</div>
													<!-- <button>go back<a href="index.php"></a></button> -->
													<?php
					  session_start();
													
					  if(isset($_REQUEST['submit']))
					  {
					  		$email=$_REQUEST['email'];
					  		$password=$_REQUEST['password'];
					 		$qry="select * from login where username='$email' and password='$password'";
					 		$res=mysqli_query($conn,$qry);
					 		$data=mysqli_fetch_assoc($res);
					 		$_SESSION["email"]=$email;
					 		$type=$data['usertype'];
					// echo $status;
					//echo $type;
					   		$res1=mysqli_query($conn,"select count(*) as cnt from login where username='$email' and password='$password'");
							 $data1=mysqli_fetch_assoc($res1);
							 $qray="select * from shop_reg where email='$email'";
								$res11=mysqli_query($conn,$qray);
								$da=mysqli_fetch_assoc($res11);
					 		if($type=="Customer")
					 		{
                     				$_SESSION['username']=$email;
									$qry2="select * from cust_reg where email='$email' and password='$password'";
					 				$res2=mysqli_query($conn,$qry2);
									$rs2=mysqli_fetch_array($res2);
									$_SESSION['uid'] = $rs2['cid'];
									$_SESSION['name'] = $rs2['cname'];
					 				header("Location:Customer Home.php");				
					 		}
							else if($type=='Admin')
					 		{
					 				header("Location:Admin Home.php");
					 		}
						  	else if($type=='P-Bags')
					 		{
									$_SESSION['username']=$email;
									$qry2="select * from P-Bags_reg where email='$email' and password='$password'";
					 				$res2=mysqli_query($conn,$qry2);
									$rs2=mysqli_fetch_array($res2);
									$_SESSION['cid'] = $rs2['clid'];
									$_SESSION['name'] = $rs2['clname'];
					 				header("Location:P-Bags Home.php");
					 		}
						    else if($type=='Shop' && $da['status']=='Accept')
					 		{
								
									$_SESSION['username']=$email;
									$qry2="select * from shop_reg where email='$email' and password='$password'";
					 				$res2=mysqli_query($conn,$qry2);
									$rs2=mysqli_fetch_array($res2);
									$_SESSION['sid'] = $rs2['sid'];
									$_SESSION['name'] = $rs2['shop'];
					 				header("Location:Shop Home.php");
					 		}
					 		else 
					 		{
					 			echo "<script>alert('invalid username or password')</script>";
					 		}
					  }
					  
					  ?>
												
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</div>
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
			<p>© 2020 P-Bags . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">P-Bags</a></p>
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
