		<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
		<head>

		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <title>PrimeTV2ForWeb</title>

		    <!-- Bootstrap core CSS -->
		    <link href="../GUI/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		    <!-- Custom fonts for this template -->
		    <link href="../GUI/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		    <!-- Custom styles for this template -->
		    <link href="../GUI/css/agency.min.css" rel="stylesheet">

		    <!-- Style for output image -->
		    <!-- <link href="outputImage.css" rel="stylesheet"> -->

		    <script src="../jquery-3.2.1.min.js" type="text/javascript"></script>
		  </head>

		  <body id="page-top">

		    <!-- Navigation -->
		    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		      <div class="container">
		        <a class="navbar-brand js-scroll-trigger" href="index.php">PrimeTV2ForWeb</a>
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		          Menu
		          <i class="fa fa-bars"></i>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarResponsive">
		          <ul class="navbar-nav text-uppercase ml-auto">
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="index.php#uploadFile">Upload files</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="index.php#about">About</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
		            </li>
		          </ul>
		        </div>
		      </div>
		    </nav>

		    <!-- How to -->
		    <section id="output">
		      <h1>Output from PrimeTV2ForWeb</h1>
		     <p style="text-align: center;"><img id="imageOutput" width="818" height="1220" src='<?php  $file = "Output/tmp.svg";
		    if(file_exists($file)) { echo $file; }
		     ?>'>
		     </img></p>
		    </section>


		    <!-- Footer -->
		    <footer>
		      <div class="container">
		        <div class="row">
		          <div class="col-md-4">
		            <span class="copyright">Copyright &copy; PrimeTV2ForWeb 2017</span>
		          </div>
		          <div class="col-md-4">
		            <ul class="list-inline social-buttons">
		              <li class="list-inline-item">
		                <a href="https://github.com/alexandraone/PrimeTV2Forweb">
		                  <i class="fa fa-github"></i>
		                </a>
		              </li>
		            </ul>
		          </div>
		        </div>
		      </div>
		    </footer>

		 

		    <!-- Bootstrap core JavaScript -->
		    <script src="../GUI/vendor/jquery/jquery.min.js"></script>
		    <script src="../GUI/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		    <!-- Plugin JavaScript -->
		    <script src="../GUI/vendor/jquery-easing/jquery.easing.min.js"></script>

		    <!-- Contact form JavaScript -->
		    <script src="../GUI/js/jqBootstrapValidation.js"></script>
		    <script src="../GUI/js/contact_me.js"></script>

		    <!-- Custom scripts for this template -->
		    <script src="../GUI/js/agency.min.js"></script>
		  

		  </body>

		</html>
