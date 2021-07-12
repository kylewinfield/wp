<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>

    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">


  </head>

  <body>

    <header>
      <div>
        <h1>Secret Barber -icon-</h1>
      </div>
    </header>

    <nav>
      <div>
        <a href="index.php">Home</a>
        <a href="shop.php">Services</a>
        <a>Contact</a>
      </div>
    </nav>

    <main>
      <article>
        <div class="main">
       
          <h2>A SECRET TO THE WORLD</h2>
          <p>
            Let your curiosity get the best of you and find your way to Secret Barber, 
            where the hidden tricks of the trade are implemented to give you a personally
            crafted barber experience.
          </p>

          <img id="img1" src="../../media/arthur-humeau-Twd3yaqA2NM-unsplash.jpg" 
          alt= "Man getting beard shaved" width="500" height="400"> 

          </div>

          <div class="main">
          <h2>CUTS</h2>
          <p>
          
          </p>
        </div>

        <div class="main">
          <h2>WHAT OUR CUSTOMERS HAVE TO SAY</h2>
          <p>
          
          </p>
        </div>

        <div class="main", id="contact">
          <h2>CONTACT US</h2>
          <p><img id="email" src="../../media/2099199.png" alt="Email Icon" width="15" height="15">
            secret.barber@fakeemail.com</p>
          <p><img id="phone" src="../../media/597177.png" alt="Phone icon" width="15" height="15">
            +0123 456 789</p>
 
        </div>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Kyle Winfield, s3541867. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
