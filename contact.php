<?php
// set some variables'
if(isset($_POST['submit'])){
$emailFrom = "admin@meetraspa.com";
$emailTo = "np.teku@gmail.com";
$subject = "Message from website";
// grab the data being passed from the method="post" in the HTML form
// and hold it in a variable
$fname     = Trim(stripslashes($_POST['fname']));
$lname     = Trim(stripslashes($_POST['lname'])); 
$fullname  = $fname.' '.$lname;
$email     = Trim(stripslashes($_POST['email'])); 
$phone     = Trim(stripslashes($_POST['phone'])); 
$message   = Trim(stripslashes($_POST['message']));



// prepare email body text
$body = "";
$body .= "Name: ";
$body .= $fullname;
$body .= "\n";
// prepare email body text
$body .= "email: ";
$body .= $email;
$body .= "\n";
// prepare email body text
$body .= "Phone: ";
$body.= $phone;
$body.= "\n";

$body .= "Message: ";
$body .= $message ;
$body .= "\n";

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");

// send the user to the thank you webpage
$thankYou="<p>Thank you <strong>$fname</strong> your message has been sent.</p>";?>
		   <div class="alert alert-success">
          			<?php	echo $thankYou; ?>
					 </div><?php
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Meetra Spa" content="Get Your EyeBrows Done">
    <meta name="author" content="Tek Nepal">
    <link rel="icon" href="images/favicon.ico">

    <title>Meetra's Spa</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href='http://wpdir.dev/test/wp-content/uploads/pagelines/compiled-css-core-1397389995.css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/heroic-features.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
<!-- NAVBAR
================================================== -->
<style>
    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>
  <body>
  <div class="container">
  <div class="header">
    <ul class="nav nav-pills pull-right">
      <li class="active"></li>
      <li></li>
      <li></li>
    </ul>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.html">Meetra Spa</a> </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="location.html">Location</a></li>
            <li class="dropdown">
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right nav-pills">
            <li>
            <a href="https://www.facebook.com/pages/Meetras-Spa/262127737283503" class="btn btn-social-icon btn-facebook">
                <i class="fa fa-facebook"></i>
            </a>
            </li>
            <li>
            <a href="https://plus.google.com/107358180213861763305/about?gl=us&hl=en" class="btn btn-social-icon btn-google-plus">
                <i class="fa fa-google-plus"></i>
            </a>
            </li>
                            <li>
            <a href="http://instagram.com/meetra007" class="btn btn-social-icon btn-instagram">
                <i class="fa fa-instagram"></i>
            </a>
            </li>
                            <li>
            <a href="http://www.yelp.com/biz/meetra-spa-rochester" class="btn btn-social-icon btn-github">
                <i class="fa fa-github"></i>
            </a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
   </nav>

      </div>
    </div>

  <div class="container test">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="#">
                    <fieldset>
                        <legend class="text-center formheader">Please fill out the form below</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="fname" autofocus required type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="lname"  required autocomplete="off"  type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email"  required  type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" required type="tel" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 1 business days." rows="7"></textarea>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <div class="col-md-12 text-center">
                                <div class="g-recaptcha" style="width:100%" data-sitekey="6LeOnf8SAAAAAEG7v3FAEWRxzSy-s4oVkI8SGHw-"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">Send!</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

 <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Meetra Spa &middot; <a href="www.meetraspa.com">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="https://nas.teknepal.com">By Tek Nepal</a></p></p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="docs/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
