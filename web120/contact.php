<!doctype html>
<html lang="en"><head>
     <title>(Martin Freiwald): WEB120 Portal Website</title>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/nav.css">
 </head>
 <body>
     <header>
      <h1>Martin Freiwald: WEB120 Portal</h1>
          <nav> 
              <ul class="topnav" id="myTopnav">
                <li><a href="index.php">Welcome</a></li>
                <li><a href="big/index.php">Big</a></li>
                <li><a href="aia.php">AIA</a></li>
                <li><a href="flowchart.php">Flowchart/Layout</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="contact.php">Contact - Martin Freiwald</a></li>
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
              </ul>
          </nav>
     </header>
    
<main class="wrapper">
     
  <h1>Contact Me</h1>


<?php
    /*
      * Below are 2 different forms to be re-used       
      * 
      * Only use one at a time, comment out the other!       
      *
      */

    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "MartinFreiwald708@gmail.com";  //place your/your client's email address here
    $toName = "Martin"; //place your client's name here
    $website = "www.mileagegrinder.com/web120";  //place NAME of your client's website

    echo loadContact('simple.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>

     <footer>
      <p><small>© 2019 by <a href="contact.php">Contact (Martin Freiwald) </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->   
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script> 
</body>
</html>