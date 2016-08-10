<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us | Holden New Homes</title>

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
    <header class="mid contact-us">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Contact Us</div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="brand-primary">Brad Holden</h2>
                    <h3><span class="fa fa-phone"></span> (469) 733-2723</h3>
                    <h4>14074 Willow Bend <br>Frisco, Texas 75035</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Buy a Home</h2>
                    <br>
                    <br>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Property Type</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option value="primary">Primary Residence</option>
                                    <option value="secondary">Second Home</option>
                                    <option value="investment">Investment Property</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-first-last-name">First and Last Name: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buy-first-last-name" placeholder="First and last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-email">Email Address: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buy-email" placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-phone">Phone Number: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buy-phone" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-contact">Please contact me via: </label>
                            <div class="col-sm-8" id="buy-contact">
                                <input type="radio" id="buy-contact-phone"> Phone
                                <input type="radio" id="buy-contact-email"> Email
                            </div>
                        </div>
                        <br>
                        <div class="form-group"> 
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Sell a Home</h2>
                    <br>
                    <br>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">I would like to sell </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option value="now">Now</option>
                                    <option value="one-month">Within one month</option>
                                    <option value="two-months">Within two months</option>
                                    <option value="three-months-or-more">Three months or more</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="sell-first-last-name">First and Last Name: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="sell-first-last-name" placeholder="First and last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="sell-email">Email Address: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="sell-email" placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="sell-phone">Phone Number: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="sell-phone" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="sell-contact">Please contact me via: </label>
                            <div class="col-sm-8" id="sell-contact">
                                <input type="radio" id="sell-contact-phone"> Phone
                                <input type="radio" id="sell-contact-email"> Email
                            </div>
                        </div>
                        <br>
                        <div class="form-group"> 
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
