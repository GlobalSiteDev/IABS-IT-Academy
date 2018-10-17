<!DOCTYPE html>
<html>
<head>
  <title>Bus schedule</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Bohdan">
  <meta name="description" content="Bus schedule">
  <meta name="keywords" content="Bogdana, Primiske">
</head>
<body>
<header>
<!-- Navbar -->
<nav id="navbar">
  <a href="#">HOME</a>
  <a href="#schedule" style="color: red">CATCH THE BUS!</a>
  <a href="#content">ABOUT US</a>
  <a href="#contact">CONTACT</a> 
</nav>
<!-- End of navbar -->
</header>
<!-- Video background -->
<section id="video-content">
  <h1>O<span id="letter">N</span>  TH<span id="letter">E</span> BU<span id="letter">S</span></h1>
  <p id="homep">Just choose your bus stop and you'll see when the next bus will arive!</p>
  <video autoplay muted loop id="video">
    <source src="images/bus_stop.mp4" type="video/mp4">
  </video>
</section>
<!-- End of video background -->
<div class="hr"></div>
<!-- Schedule section -->
<section id="schedule">
  <h1 style="text-shadow: black 0 0 5px;">Choose your departure point</h1>
    <form action="index.php#schedule" method="get">
    <input class="button" type="submit" name="bogdana" value="Bogdana station"/>
    <input class="button" id="sbutton" type="submit" name="primiske" value="Primiske station"/>
    </form>
  <div id="res">Next bus will arive at 
    <?php 
if (isset($_GET['bogdana'])) 
    include 'bogdana.php';
elseif (isset($_GET['primiske'])) 
    include 'primiske.php';
else
  echo "...";
    ?>
  </div>
</section>
<!-- End of Schedule section -->
<div class="hr"></div>
<!-- About us section -->
<section id="content">
  <h1>About us</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
</section>
<!-- End of About us section -->
<div class="hr"></div>
<!-- Contact form -->
<section class="container" id="contact">
  <div id="text">
    <p>CONTACT US</p>
  </div>
  <form action="index.php#contact" method="post"> 
    <input name="name" type="text" class="feedback-input" placeholder="Name" />   
    <input name="email" type="text" class="feedback-input" placeholder="Email" />
    <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
    <input class="button" name="submit" type="submit" value="SUBMIT"/>
  </form>
  <?php
  include 'contact.php';
  ?>
</section>
<!-- End of Contact form -->
<footer id="footer">
  <div class="content">
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  </div>
</footer>
</body>
</html>