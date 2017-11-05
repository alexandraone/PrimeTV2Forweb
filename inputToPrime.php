<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv-se" lang="sv-se">
<head>
<link rel="stylesheet" href="navbar.css"/>
<link rel="stylesheet" href="background.css"/>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="inputToPrime.js" type="text/javascript"></script>
<script src="runProgram.js" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript">
function popUpImage() {
  window.open("Output/tmp.pdf");
}

</script>

<ul class="navbar">
  <li><a href="index.php">Home</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">How to</a></li>
  <li><a href="inputToPrime.php">Start program</a></li>
</ul>

<div style="padding:0 16px;">
  <h2>Input to primeTV2Forweb</h2>

  Input can be in two ways, either default input: <code> &lt;guest tree&gt; [&lt;host tree&gt;] [&lt;options&gt;] </code><br/>
 or alternative input: <code>&lt;gene tree&gt; &lt;species tree&gt; &lt;map file&gt; [&lt;options&gt;] </code> 

 <form action="" method="post" enctype="multipart/form-data">
  <input type="radio" name="inputRb" id="rbDef" checked="checked" value="def"/> Default input<br/>
  <input type="radio" name="inputRb" id="rbAlt" value="alt" /> Alternative input<br/>
</form>

<!-- Används för att form inte ska redirecta till filePath.php -->
<iframe name="formSending" id="formIframe" style="display: none;"></iframe>

<form action="filePath.php" method="post" enctype="multipart/form-data" id="uploadFilesID" target="formSending">
<div id="divDef" style="padding:0 16px;">
  <h3>Select your guesttree file </h3>
  <input name="guesttree" type="file" id="guest"/>

  <h3>Select your arttree file </h3>
  <input name="arttree" type="file" id="art"/>
</div>

<div id="divAlt" style="padding:0 16px;">
  <h3>Select your mapfile file</h3>
  <input name="mapfile" type="file" id="mapfile"/>
</div>
<input type="submit" name="uploadFiles" value="Upload files" style="padding: 10 10px; margin: 16 16px; background: white"/>
<button type="button" name="btnRunProgram" style="padding: 10 10px; margin: 16 16px; background: white" 
      onclick="runProgram()">Run program!</button> 
<img src="Output/tmp.pdf" style="max-width: 200px; max-height: 200px; width: auto; height: auto;" onclick="popUpImage()"></img>
</form>
</div>
</body>
</html>