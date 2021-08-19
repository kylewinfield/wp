<?php
  session_start();

// Put your PHP functions and modules here


function headModule(){
  $html = <<<"OUTPUT"
  <!DOCTYPE HTML>
  <html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime('style.css'); ?>">
  <script src='../wireframe.js'></script>
  <script src='script.js'></script>

  <link href="https://fonts.googleapis.com/css2?family=Aleo:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

 </head>
 </html>
 OUTPUT;
 echo $html;
}

function topModule(){
  $html = <<<"OUTPUT"
  <!DOCTYPE html>
  <html>
  <body>
  <header>
    <div id="top">
      <img id="logo" src="../../media/razor.png" alt="sblogo" >
      <h1>SECRET BARBER</h1>
    </div>
  </header>
  <html>
  OUTPUT;
  echo $html;
}

function navModule(){
  $html = <<<"OUTPUT"
  <!DOCTYPE HTML>
  <html>
  <nav>
  <div>
    <a href="index.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="#contact"> Contact</a>
  </div>
  </nav>
  <html>
 OUTPUT;
 echo $html;
}

function cartModule(){
  $html = <<<"OUTPUT"
  <!DOCTYPE HTML>
  <html>
  <div id="cartbuttoncontainer">
  <a href="cart.php">
  <div class="button" id="cartButton">
   <span>Cart</span>
   <img id="carticon" src="../../media/1170678.png" alt="cart icon" width="60" height="60">
   
  </div>
  </a>
  </div>
  <html>
 OUTPUT;
 echo $html;
}

function dateGen(){

   $theDate = date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
   return $theDate;
}

function bottomModule(){
 $date = dategen();
 $html = <<<"OUTPUT"
    <!DOCTYPE HTML>
    <html>
    </body>
    <footer>

    <section class="foot" , id="contact">
     <h2>CONTACT US</h2>
     <p><img id="emailicon" src="../../media/2099199.png" alt="Email Icon" width="15" height="15">
       secret.barber@fakeemail.com</p>
     <p><img id="phone" src="../../media/597177.png" alt="Phone icon" width="15" height="15">
       +0123 456 789</p>

    </section>

    <div class="foot" , id="disclaimer">&copy;
     <script>
       document.write(new Date().getFullYear());
     </script> Kyle Winfield, s3541867. Last modified
     $date
     
     <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
       Programming course at RMIT University in Melbourne, Australia.</div>
     <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
     </div>
     </footer>
     <html>
    OUTPUT;
    echo $html;
  
}


function debug(){
  
   echo "<div id='debug'><p>SESSION contents: <br>";
   print_r($_SESSION);
   echo "</p><p>POST contents: <br>";
   print_r($_POST);
   echo "</p></div>";
}

//use json_encode($prices); to get JS version of prices.
// SEPERATED BY "", IF PARAMTER USE ''
function readPrices(){

  $filename = "prices.txt";
 
    if( ($fp = fopen($filename,'r')) && flock($fp, LOCK_SH) ) {
      if (($headings = fgetcsv($fp, 0, ",")) !== false) {
        while ( $cells = fgetcsv($fp, 0, ",") ) {
          for ($x=1; $x<count($cells); $x++)
            $priceData[$cells[0]][$cells[1]]=$cells[$x];
        }
      }
      flock($fp, LOCK_UN);
      fclose($fp);
      return $priceData;
   }
     
}



?>
