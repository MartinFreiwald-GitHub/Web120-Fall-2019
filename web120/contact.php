<!doctype html>
<html lang="en"><head>
     <title>Devine Precious Stone Company</title>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/nav.css">
 </head>
 <body>
     <header>
     <h1><a href="brians.php">Devine Precious Stone Company Contact</a></h1>
    <header>
     <nav>
     <ul class="topnav" id="myTopnav">
       <li><a href="brians.php"><p>Home</p></a></li>
       <li><a href="gems.php"><p>Gems</p></a></li>
       <li><a href="diamonds.php"><p>Diamonds</p></a></li>
       <li><a href="precious_stones.php"><p>Precious Stones</p></a></li>
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

    $toAddress = "helmvrechtbrian7@gmail.com";  //place your/your client's email address here
    $toName = "Brian"; //place your client's name here
    $website = "www.mileagegrinder.com/web120/brians.html";  //place NAME of your client's website

    echo loadContact('simple.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>

     <footer>
      <p><small>© 2019 by <a href="contact.php">Contact - US </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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