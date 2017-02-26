<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Holden New Homes</title>

	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Lora|Lato:100,300,400,700' rel='stylesheet' type='text/css'>

	<!-- Theme CSS -->
	<link href="css/agency.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top" class="index">

	<?php include('navigation.php'); ?>

	<!-- Header -->
	<header class="full">
		<div class="container">
			<cms:editable name="intro_text" type="richtext">	
			<div class="intro-text">
				<div class="intro-heading">We Know Real Estate</div>
				<div class="intro-lead-in">Full-service residential real estate brokerage specializing in new homes</div>
				<a href="contact-us.php" class="btn btn-xl">Contact Us</a>
			</div>
			</cms:editable>
		</div>
	</header>


	<cms:editable name="spacer" type="richtext">	
	<aside class="spacer text-center">
		<h1>Call Us Today! (469) 733-2723</h1>
		<p>Holden New Homes is a Frisco, Texas full-service residential real estate brokerage specializing in new homes in Frisco, Plano, Allen, Prosper and McKinney. Our special relationships with builders and developers allow us to pass their best pricing and incentives to our clients.  With over 13 years of experience in Collin County and the DFW Metroplex, Holden New Homes knows Real Estate!</p>
	</aside>
	</cms:editable>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="embed-responsive embed-responsive-16by9">
					    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/41ZQsptVLk4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="featured-communities" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Featured Communities</h2>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 portfolio-item">
					<div class="embed-responsive embed-responsive-16by9">
					    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ceNYx3og3tE" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="portfolio-caption">
						<h4>For more text RICHWOODS to (469)733-2723</h4>
					</div>
				</div>
				<div class="col-sm-4 portfolio-item">
					<img src="/img/neighborhoods/lexington.jpg" class="img-responsive">
					<div class="portfolio-caption">
						<h4>For more on Lexington in Frisco click <a href="https://updatefrisco.com/2015/09/02/announcing-lexington-in-frisco-a-new-gated-community-with-shaddock-homes-k-hovnanian-homes-khov-toll-brothers-and-landon-signature-series-homes/" target="_blank">here</a></h4>
					</div>
				</div>
				<div class="col-sm-4 portfolio-item">
					<img src="/img/neighborhoods/edgestone.jpg" class="img-responsive">
					<div class="portfolio-caption">
						<h4>For more on Edgestone in Frisco click <a href="https://updatefrisco.com/2015/08/28/edgestone-at-legacy-in-frisco-announced-by-developer-hines-for-2016/" target="_blank">here</a></h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Featured Cities Section -->
	<section id="featured-cities">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Featured Cities</h2>
					<br><br><br>
					<ul class="list-unstyled">
		                <li id="frisco"><a href="https://updatefrisco.com/category/frisco-homes-2/">Frisco, TX</a></li>
				<li id="plano"><a href="https://updatefrisco.com/category/plano-homes-2/">Plano, TX</a></li>
				<li id="mckinney"><a href="https://updatefrisco.com/category/mckinney-homes/">McKinney, TX</a></li>
				<li id="allen"><a href="https://updatefrisco.com/category/allen-homes/">Allen, TX</a></li>
				<li id="prosper"><a href="https://updatefrisco.com/category/prosper-homes/">Propser, TX</a></li>
		            </ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Testamonials Section -->
	<section id="testamonials" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<cms:editable name="testamonial" type="richtext">	
				<div class="testamonial col-md-8 col-md-offset-2">
					<div class="testamonial-image"><img src="/img/testamonials/lee_family.jpg"></div>
					<div class="testamonial-caption">
						<p>"Brad was very responsive, and he went over and above to find us a great home in Frisco in just one day. And he's down-to-earth: 0% pretense, 100% professional."</p>
						<h4>Mike & Kelly Lee</h4>
					</div>
				</div>
				</cms:editable>
			</div>
		</div>
	</section>

	<!-- Featured Home Section 
	<section id="featured-home">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2>Featured Home</h2>
					<br><br>
					<div class="embed-responsive embed-responsive-16by9">
					    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ceNYx3og3tE" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Clients Aside -->
	<aside class="clients">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2>Recommended Businesses</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="http://updatefrisco.com/" target="_blank">
						<img src="img/logos/update-frisco-logo.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="http://candysdirt.com/" target="_blank">
						<img src="img/logos/candys-dirt-logo.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="http://revolvingmindmedia.com/" target="_blank">
						<img src="img/logos/revolving-mind-media-logo.png" class="img-responsive img-centered" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="http://www.thenannyagencyinc.com/" target="_blank">
						<img src="img/logos/nanny-agency-logo.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>
			</div>
		</div>
	</aside>

	<?php include('footer.php'); ?>

	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<!-- Theme JavaScript -->
	<script src="js/agency.min.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>
