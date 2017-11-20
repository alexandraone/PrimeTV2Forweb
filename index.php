    <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PrimeTV2ForWeb</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
        <!-- Run the program with example guesttree and hosttree -->
        <script src="runExampleProgram.js" type="text/javascript"></script>
      </head>

      <body id="page-top"> 

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">PrimeTV2ForWeb</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#uploadFile">Upload files</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Header -->
        <header class="masthead">
          <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in">Reconcilation of trees</div>
              <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#uploadFile">START</a>
            </div>
          </div>
        </header>

         <!-- Upload file -->
         <script type="text/javascript">

  //Direct to output side
    function render() {
      window.location.href="render.php";
    }

  // For reloading the page so the Example button works after going back with browser back button
  window.onpageshow = function(event) {
    if (event.persisted) {
      window.location.reload() 
    }
  }
      </script>

        <section id="uploadFile">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Upload files</h2>
                <h3 class="section-subheading text-muted">Upload files in Newick format or test the program with example data.</h3>
            <form action="" method="post" enctype="multipart/form-data">
              <input type="radio" name="inputRb" id="rbDef" checked="checked" value="def"/> With reconciliation<br/>
              <input type="radio" name="inputRb" id="rbAlt" value="alt" /> Without reconciliation<br/>
    </form>

    <!-- Används för att form inte ska redirecta till filePath.php -->
    <iframe name="formSending" id="formIframe" style="display: none;"></iframe>

    <form action="filePath.php" method="post" enctype="multipart/form-data" id="uploadFilesID" target="formSending">
    <div id="divDef" style="padding:0 16px;">
    <input type="radio" name="testForm" id="testForm" checked="checked"/> Test Form<br/>
      <h3>Select your guest tree file </h3>
      <input name="guesttree" type="file" id="guest"/>

      <h3>Select your host tree file </h3>
      <input name="arttree" type="file" id="art"/>
    </div>

    <div id="divAlt" style="padding:0 16px;">
      <h3>Select your map file</h3>
      <input name="mapfile" type="file" id="mapfile"/>
    </div>
    <input type="submit" name="uploadFiles" value="Upload files" style="padding: 10 10px; margin: 16 16px; background: white"/>

    <button type="button" name="btnRunProgram" style="padding: 10 10px; margin: 16 16px; background: white" 
          onclick="runProgram();">Run program!</button> 
    </form>
    <h2> Or try the program with example data: </h2>
    <button type="button" name="exampleButton" onclick="runExampleProgram();">Example data</button>
          </div>
           </div>
            </div>
        </section>


    </div>
          </div>
        </section>


        <!-- test about -->
           <!-- Page Header -->
      <section id="about">
      <header class="masthead" style="background-image: url('img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1 style="padding: 100px 100px 100px 100px;">About primeTV2ForWeb</h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p>This program is created by Alexandra Onegård as a degree project, along with Lars Arvestad as supervisior and who is the one that created the original program primeTV.</p>
          </div>
        </div>
      </div>
      </section>

        <!-- Contact -->
        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase" style="color: #000">Contact Us</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                      <div id="success"></div>
                      <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
