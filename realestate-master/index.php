<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MUSA" >
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Home management system</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:purple;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:purple;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://localhost:8080/final1/index.html" class="smoothScroll"><b><font color="white">Home</font></b></a></li>
			<li> <a href="#contact" class="smoothScroll"> <b><font color="white">Contact</font></b></a></li>
			
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

		<div class="container" id="register" name="register">
			<div class="row">
			<br>
				<hr>
				<br>
				<br>
				
				<div class="">
					<center><h1>Register With Us Now</h1>
					<p>We value our clients and we offer the best services regarding home properties</p></center>
					<p>

                       <center>
						<form class="" role="form" action="register.php" method="POST">
							<div class="col-lg-10">
						      <input type="text" class="form-control" id="text1" placeholder="Enter Your Full Name" required="required" name="fname">
						    </div>
						    <br>
						    <br>
						    <div class="col-lg-10">
						      <input type="number" class="form-control" id="text1" placeholder="Enter Your Phone Number" required="required" name="phone">
						    </div>
						    <br>
						    <br>
						    <div class="col-lg-10">
						      <input type="email" class="form-control" id="text1" placeholder="Enter Your Email Address" required="required" name="email">
						    </div>
						    <br>
						    <br>
						     <div class="col-lg-10">
						    <tr>
                            <td>Select Your Gender:</td>
                            <td>
                                <select name="gender" required="required">
                                    <option> Select Gender </option>
                                    <option> Male </option>
                                    <option> Female </option>
                                </select>
                            </td>
                        </tr>
                    </div>
                            <br>
						    <br>
                             <div class="col-lg-10">
						      <input type="text" class="form-control" id="text1" placeholder="Enter Username You Wish To Use" required="required" name="username">
						    </div>
						    <br>
						    <br>
						     <div class="col-lg-10">
						      <input type="text" class="form-control" id="text1" placeholder="Enter Your Location" required="required" name="location">
						    </div>
						    <br>
						    <br>
						     <div class="col-lg-10">
						      <input type="password" class="form-control" id="text1" placeholder="Enter Password You Will Use For Login" required="required" name="password">
						    </div>
                            <br>
						    <br>
                        </tr>
						 
						  <div class="form-group">
						    <div class="col-lg-10">
						      <button type="submit" name="submit" class="btn btn-success">REGISTER</button>
						    </div>
						  </div>
					   </form><!-- form -->
						
					</p>
				</div><!-- col -->
		
			</div><!-- row -->
		
		</div><!-- container -->

<div class="container" id="login" name="login">
			<div class="row">
			<br>
				<h1 class="centered">LOGIN NOW</h1>
				<hr>
				<br>
				<br>
				
				<div class="">
					<p>Login and Book Your Preferred Property Now</p></center>
					<p>
						<form class="" role="form" action="account.php" method="POST">
						  
						  <div class="col-lg-10">
						      <input type="text" class="form-control" id="text1" placeholder="Enter Username" name="username">
						    </div>
						    <br>
						    <br>
						     <div class="col-lg-10">
						      <input type="password" class="form-control" id="text1" placeholder="Enter Password" name="password">
						    </div>
						    <br>
						    <br>
						  <div class="form-group">
						    <div class="col-lg-10">
						      <center><button type="submit" name="log" class="btn btn-success">LOGIN</button></center>
						    </div>
						    <center><a href="forgot_pass.php"><u>Forgot Password?</u></a></center>
						  </div>
					   </form><!-- form -->
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Thank You</h3>
					<p>Thankyou for having an interest in this website.. Always keep in touch.</p>
				</div><!-- col -->

			</div><!-- row -->
		
		</div><!-- container -->

		<div id="footerwrap">
			<div class="container">
				<h4>Created With Love by <a href="https://www.facebook.com/blairt94/">ANUSHA</a> - Copyright 2020</h4>
			</div>
			<li> <a href="adminlogin.php" class="smoothScroll"><font color="red"><b><font color="white">Administrator</font></b></font></a></li>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		
    <script type="text/javascript" src="assets/js/jquery-func.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	
  </body>
</html>
