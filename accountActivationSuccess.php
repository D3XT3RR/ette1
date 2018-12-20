<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ETTE</title>

	  <!-- FlexBox -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="style/w3.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/passwdReset.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">
  
</head>

<body>
	<header>
    <div class="header"> 
      <div class="auto"> 
        <div class="menu">
          <a href="/" class="logo">
            <div class="blue">E</div>
            <div class="red">TT</div>
            <div class="blue">E</div>
          </a>
        </div>
      </div>
    <div id="search" class="auto">
      
    </div>
  </header>

  <section>
    <div class=" container auto">
        <div id="reshead"> Twoje konto zostało aktywowane. Możesz się już zalogować!</div> 
    </div>
  </section>

  <?php
include "php/footer.php";
include "php/modal.php";
?>





<!-- PHP -->



</body>
</html>