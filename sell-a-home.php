<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sell a Home | Holden New Homes</title>

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
    <header class="mid sell-a-home">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Sell a Home</div>
            </div>
        </div>
    </header>

	<cms:editable name="body" type="richtext">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
		    <p>Everyone knows that the internet is KING now for both buying and selling a home. We at Holden New Homes feel that these are the most important factors to consider to sell your home the FASTEST we can at the HIGHEST price! Here they are:</p>
                    <ol>
			<li>Price it right! – Depending on your current needs, we will give you our opinion on what pricing will work the best for you. Many sellers overprice their home because they feel what they have added gives the home more value (wood floors, built-ins, granite counter-tops, etc.) and try to add that to the price. This does help significantly by selling it faster!</li>
                        <li>Pictures – Our photographer is by far the best! Specializing in architecture, your home will be shot at 4 feet high and each room will have three pictures taken (high light, portrait and low light) then all merged together on the computer for a stunning image.</li>
			<li>Timing – Whether its June or December, we have almost perfected the specific day and time to list homes to maximize the opportunities for a buyer.</li>
                    </ol>
                    <p>With these and other experienced Marketing Techniques it greatly helps eliminate the hassle, anxiety and uncertainty of selling a home. Be real. Look at the numbers. And be okay with what the numbers show is happening in your area. If that doesn’t work, then hold off and sell your home later. You have to be happy.</p>
                </div>
            </div>
        </div>
    </section>
	</cms:editable>

	<cms:editable name="body_gray" type="richtext">
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="img/sell-a-home/marketing-tools.jpg">
                </div>
                <div class="col-md-6">
                    <h3>Marketing Syndication Partners</h3>
                    <p>Syndication of any product, especially listed homes, is becoming one of the fastest growing advertising mediums on the Internet today.</p>
                    <p>giving listings maximum exposure online makes perfect sense and Holden New Homes has partnered with Point2 Agent, which currently has the largest syndication network in the real estate industry, with new partners being added frequently.</p>
                    <p>The have included some of the highest trafficked search sites on the internet!</p>
                </div>
            </div>
        </div>
    </section>
	</cms:editable>

	<cms:editable name="body_bottom" type="richtext">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Set Yourself Apart</h3>
                    <p>Teaming with Holden New Homes and our Partners allows your Property to have the Highest number of Syndication Partners Available (35+) and more being included all the time, Holden New Homes Provides you with a Competitive Edge above other Real Estate Professionals. Syndication gives you an Advantage that is clear to Buyers in Todays Market considering over 90% of all Purchases begin Online.</p>
                </div>
            </div>
        </div>
    </section>
	</cms:editable>

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
