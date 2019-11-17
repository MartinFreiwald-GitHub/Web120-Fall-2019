<!doctype html>
<html lang="en"><head>
     <title>(Martin Freiwald): WEB120 Portal Website</title>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/questionair_form.css">
 </head>
 <body>
     <header>
      <h1>Martin Freiwald: WEB120 Porthole</h1>
          <nav class="topnav" id="myTopnav">
            <a href="index.php"><p>Welcome</p></a>
            <a href="big/index.html"><p>BIG</p></a>
            <a href="aia.php"><p>AIA</p></a>
            <a href="flowchart.php"><p>Flowchart</p></a>
            <a href="fp/index.php"><p>Final Project</p></a>
            <a href="contact.php"><p>Contact - Martin Freiwald</p></a>
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