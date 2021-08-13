<?php
  session_start();

// Put your PHP functions and modules here

function topModule(){
  $html = <<<"OUTPUT"
  <!DOCTYPE html>
  <html>
  <header>
    <div id="top">
      <img id="logo" src="../../media/razor.png" alt="sblogo">
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
    <a href="shop.php">Services</a>
    <a href="#contact"> Contact</a>
  </div>
</nav>
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
    <footer>

    <section class="foot" , id="contact">
     <h2>CONTACT US</h2>
     <p><img id="email" src="../../media/2099199.png" alt="Email Icon" width="15" height="15">
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




?>
