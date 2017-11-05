		<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
		<head>

		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <title>PrimeTV2ForWeb</title>

		    <!-- Bootstrap core CSS -->
		    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		    <!-- Canvas -->
		    <link href="css/imageCanvas.css" rel="stylesheet">

		    <!-- Custom fonts for this template -->
		    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		    <!-- Custom styles for this template -->
		    <link href="css/agency.min.css" rel="stylesheet">

		    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		    <!-- Show/hide file input -->
		    <script src="inputToPrime.js" type="text/javascript"></script>
		    <!-- Run the program -->
		    <script src="runProgram.js" type="text/javascript"></script>
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
		              <a class="nav-link js-scroll-trigger" href="index.php#howto">How to</a>
		            </li>
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
		    <section id="howto">
		      <h1>Output from PrimeTV2ForWeb</h1>
		     <canvas id="imageCanvas" width="1018" height="1420" style="width: 1018px; height: 1420px; background-image:url(
		      '<?php  $file = "Output/tmp.pdf";
		    if(file_exists($file)) { echo $file; }
		     ?>')">
		     </canvas>
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
		    <script src="vendor/jquery/jquery.min.js"></script>
		    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		    <!-- Plugin JavaScript -->
		    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		    <!-- Contact form JavaScript -->
		    <script src="js/jqBootstrapValidation.js"></script>
		    <script src="js/contact_me.js"></script>

		    <!-- Custom scripts for this template -->
		    <script src="js/agency.min.js"></script>
		  

		  </body>

		</html>
