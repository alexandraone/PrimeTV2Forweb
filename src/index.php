      <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
      <head>

          <meta charset="utf-8" content="PrimeTV2Forweb"/>
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
          <meta name="description" content=""/>
          <meta name="author" content=""/>

          <title>PrimeTV2ForWeb</title>

          <!-- Bootstrap core CSS -->
          <link href="../GUI/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

          <!-- Custom fonts for this template -->
          <link href="../GUI/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
          <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'/>
          <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>
          <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'/>

          <!-- Custom styles for this template -->
          <link href="../GUI/css/agency.min.css" rel="stylesheet"/>

          <!-- Style for uploadfile -->
          <link href="css/uploadFiles.css" rel="stylesheet"/>

          <script src="../jquery-3.2.1.min.js" type="text/javascript"></script>

          <!-- Run the program -->
           <script src="runProgram.js" type="text/javascript"></script> 

              <!-- Upload to server -->
           <script src="uploadToServer.js" type="text/javascript"></script> 

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

           <script type="text/javascript">

    //Show and hide mapfile depending on with reconciliation or without reconciliation
      $(document).ready(function() {
      $("#rbDef").click(function () {
        $("#divAlt").hide();
      });
      $("#rbAlt").click(function() {
        $("#divAlt").show();
      });
    }); 

      //Show options
      function showOption() {
        var option = document.getElementById("optionButton");
        if(option.innerHTML == "Select options") {
          option.innerHTML = "Close options";
          $('.options').show();
          $('#options').css("display", "inline-block");
        }
        else {
          option.innerHTML = "Select options";
          $('.options').hide();
        }

        }

      //Show font options
      function showFont() {
        var font = document.getElementById("fontButton");
        if(font.innerHTML == "Font options") {
          font.innerHTML = "Close font options";
          $('#fontOption').show();
        } else {
          font.innerHTML = "Font options";
          $('#fontOption').hide();
        }
      }


      //Show activate options
      function showActivate() {
        var activate = document.getElementById("activateButton");
        if(activate.innerHTML == "Activate options") {
          activate.innerHTML = "Close activate options";
          $('#activateOption').show();
        } else {
          activate.innerHTML = "Activate options";
          $('#activateOption').hide();
        }
  }

        //Show text input if textOnTop is selected
        function showTextInput() {
        var checked = document.getElementById("textOnTop").checked;
        //alert("checked=" + checked);
        if(checked) {
          $('#textInput').show();
      }
        else {
          $('#textInput').hide();
        }
    }

    // For reloading the page so the Example button works after going back with browser back button
    window.onpageshow = function(event) {
      if (event.persisted) {
        window.location.reload(); 
      }
    }
        </script>

          <section id="uploadFile">
                <div style="display: inline-block; margin: 100px;">
                <div style="padding: 0px 120px ">
                  <h2 class="section-heading text-uppercase">Upload files</h2>
                  <h3 class="section-subheading text-muted">Upload files in Newick format or test the program with example data. </h3>
      <button type="button" name="optionButton" id="optionButton" onclick="showOption();">Select options</button>
      </div>

      <form action="" method="post" enctype="multipart/form-data" id="uploadFilesID" target="formSending"> 
      <div id="divDef" style="padding:16px 16px;">
      <!-- Left-div -->
        <div style="display: inline-block; padding:100px 100px; " id="uploads">
        <div id="guesttreeId">
          <h5>SELECT YOUR GUEST TREE FILE </h5>
           <form action="" method="post" enctype="multipart/form-data">
                <input type="radio" name="inputRb" id="rbAlt" checked="checked" value="alt" /> Without reconciliation<br/>
                <input type="radio" name="inputRb" id="rbDef" value="def"/> With reconciliation<br/>
           </form>
          <input name="guesttree" type="file" id="guest"/>
          </div>

          <div id="arttreeId">
          <h5>SELECT YOUR HOST TREE FILE </h5>
          <input name="arttree" type="file" id="art"/>
          </div>

          <div id="divAlt">
            <h5>SELECT YOUR MAP FILE</h5>
            <input name="mapfile" type="file" id="mapfile"/>
          </div>

          
          <div id="runButton">
            <button type="button" class="btn btn-primary" id="btnRunProgram" name="btnRunProgram" onclick="runAll();">RUN PROGRAM!</button> 
          </div>
        </form>
        
          <div id="exampleData" style="margin: 20px 0px 0px 0px">
            <h6> Or try the program with  <button type="button" name="exampleButton" id="exampleButton" onclick= "runExampleProgram();">EXAMPLE DATA</button> </h6>
           
          </div>
        </div> <!-- End left-div-->

      <!-- right-div-->
      <div style="display: none; padding: 100px 0px;" class="options" id="options">
          <h5>OPTIONS FOR THE OUTPUT FILE </h5><br/>
          <h6>Select color: </h6>
            <select name="color" id="color" class="colorSelect">
              <option value="blue">Blue</option>
              <option value="kth">KTH</option>
              <option value="su">SU</option>
              <option value="grey">Grey</option>
              <option value="mono">Mono</option>
              <option value="yellow">Yellow</option>
            </select><br/><br/>
               <h6>Select extension: </h6>
            <select id="extension" name="extension" class="extentionSelect">
              <option value="svg">svg</option>
              <option value="pdf">pdf</option>
              <option value="png">png</option>
            </select><br/><br/>
              <fieldset>
              <div id="LGTcostDiv">
              <input type="checkbox" name="LGTcost" id="LGTcost" value="LGT cost"/>
              <label for="coding">Number of duplications and transfers used</label>
              </div>
            </fieldset>
            <div id="timeOption">
            <h6>Time options: </h6>
            <select name="time" id="time">
              <option value="noTimeScale">No time scale</option>
              <option value="hostedgesByTime">Annotate host edges by their time</option>
            </select>
            </div>
            <br/><br/>
             <button type="button" name="fontButton" id="fontButton" onclick="showFont();">Font options</button>
             <div id="fontOption" style="display: none;">
            <h6>Select guest tree font:</h6>
            <select name="guestFont" id="GuestFont">
              <option value="serif">Serif</option>
              <option value="sansSerif">Sans-serif</option>
              <option value="Purisa">Purisa</option>
              <option value="Sans">Sans</option>
              <option value="monospace">Monospace</option>
            </select>
              <h6>Select host tree font:</h6>
            <select name="hostFont" id="hostFont">
              <option value="serif">Serif</option>
              <option value="sansSerif">Sans-serif</option>
              <option value="Purisa">Purisa</option>
              <option value="Sans">Sans</option>
              <option value="monospace">Monospace</option>
            </select>
            </div>
             <br/><br/>
             <button type="button" name="activateButton" id="activateButton" onclick="showActivate();">Activate options</button>
             <div id="activateOption" style="display: none;">
            <fieldset>
              <div>
              <input type="checkbox" name="activateLegend" id="activateLegend" value="legend"/>
              <label for="coding">Activate the legend</label>
              </div>
              <div>
              <input type="checkbox" name="activateHeader" id="activateHeader" value="header"/>
              <label for="coding">Activate the header</label>
              </div>
              <div id="textOnTopDiv">
              <input type="checkbox" name="textOnTop" id="textOnTop" value="textOnTop" onclick="showTextInput();">
              <label for="coding">Include the text on top of the image</label>
              <div style="display: none;" id="textInput">
               <input type="text" name="textOnTopInput" id="textOnTopInput" value="Write text that will appear on top of the image"/>
               </div>
              </div>
            </fieldset>
          </div><!-- End right-div-->

        </div>
      </section>

             <!-- About page -->
        <section id="about">
        <header class="masthead" style="background-image: url('img/blommor.jpg')">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                  <h1 style="padding: 100px 100px 100px 100px; color: blue;"></h1>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
             <h1 style="padding: 100px 100px 20px 100px; color: black;">About primeTV2ForWeb</h1>
              <p>This web application is created as a degree project by Alexandra Onegård. It is a cooperation with Lars Arvestad.</p>
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
                          <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name."/>
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address."/>
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number."/>
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
