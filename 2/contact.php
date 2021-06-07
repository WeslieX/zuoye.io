<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Responsive Html5 Templates">
    
	
    <title>Kingfisher | Free Bootstrap Chocolate Templates</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Header-->
	<header class="sub-header">
		
		<div class="container text-center">
			<a class="site-branding" href="index.html">
				<h1 class="site-title">
					Kingfisher
				</h1>
				<p class="site-description">
					Vestibulum posuere molestie risus
				</p>
			</a><!-- .site-branding -->
		</div>
		
		<!--Navigation-->
		<div id="menu-wrapper">
			<nav id="menu" class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
								<div class="dropdown-menu">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="#">Login</a></li>
											<li><a href="#">Register</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="dropdown"><a href="archive.html" class="dropdown-toggle" data-toggle="dropdown">Category</a>
								<div class="dropdown-menu" style="margin-left: -203.625px;">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="#">Text 301</a></li>
											<li><a href="#">Text 302</a></li>
											<li><a href="#">Text 303</a></li>
											<li><a href="#">Text 304</a></li>
											<li><a href="#">Text 305</a></li>
										</ul>
										<ul class="list-unstyled">
											<li><a href="#">Text 306</a></li>
											<li><a href="#">Text 307</a></li>
											<li><a href="#">Text 308</a></li>
											<li><a href="#">Text 309</a></li>
											<li><a href="#">Text 310</a></li>
										</ul>
										<ul class="list-unstyled">
											<li><a href="#">Text 311</a></li>
											<li><a href="#">Text 312</a></li>
											<li><a href="#">Text 313</a></li>
											<li><a href="#">Text 314</a></li>
											<li><a href="#">Text 315</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="archive.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- /Section: intro -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		
		<!-----------------Content-------------------->
		<section class="box-content">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">	
						<h2>CONTACT US</h2>
						<div class="intro">Lorem ipsum dolor sit amet</div>
					</div>
				</div>
				<div class="row">
					<!--Start Map-->
					<div id="map" style="height: 450px;"></div>
					<!--End Map-->
					<div class="col-md-4 box-item">
						<h3>Contact Info</h3>
						<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
						<p>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</p>
						   <p>+6221 888 888 90 <br>
							+6221 888 88891</p>
						<p>info@yourdomain.com</p>
					</div>
					<div class="col-md-8">
						<h3>Contact Form</h3>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<form name="form1" method="post" action="contact.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message" style="height: 170px;"></textarea>
									</div>						
									<button type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
		
	<footer class="sub-footer">
		<div class="wrap-footer">
			<div class="container">
				<ul class="list-inline top-link link">
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Google +</a></li>
					<li><a href="#">Pinterest</a></li>
				</ul>
				<div class="copyright">
					<span>Copyright © 20xx - Designed by Zerotheme - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="js/bootstrap.min.js"></script>
	
	<script>
		$(function() {
			$('#menu-wrapper').height($("#menu").height());
			
			$('#menu').affix({
				offset: { top: $('#menu').offset().top }
			});
		});
	</script>
	
	 
	
</body>
</html>