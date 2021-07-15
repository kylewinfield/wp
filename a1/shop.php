<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime(" style.css"); ?>">
  <script src='../wireframe.js'></script>

  <link href="https://fonts.googleapis.com/css2?family=Aleo:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



</head>

<body>

  <header>
    <div id="top">
      <img id="logo" src="../../media/razor.png"alt="sblogo">
      <h1>SECRET BARBER</h1>
    </div>
</header>

  <nav>
    <div>
      <a href="index.php">Home</a>
      <a href="shop.php">Services</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <main>
    <article>
      <div id="servicehead">
      <h2>Services</h2>
      </div>
      <section id="cuts">

        <div id="everycut">

          <div class="cutsdivide">
            <img class="imgIcon" src="../../media/1930.png" alt="Scissors" width="150" height="150">
            
              <h3>Haircuts</h3>
              <p>
                Let Secret Barber cover your basic cuts, whether it be a full re-style or just a trim, our team of
                professionals has you covered.
              </p>

    
          </div>
          <div class="cutsdivide">
            <img class="imgIcon" src="../../media/3615156.png" alt="razor" width="150" height="150">
            
              <h3>Fades</h3>
              <p>
                When it comes to fades, we know just how important they are to you and we've got the secret
                for a perfect fade every time.
              </p>
            
          </div>
          <div class="cutsdivide">
             <img class="imgIcon" src="../../media/40648.png" alt="razor" width="150" height="170"> 
                        
              <h3>Shave</h3>
              <p>
                Shaving your beard can be a messy and disastrous procedure, we've all seen and heard the worst of it
                let the professionals handle it for you while you kick back and relax.
              </p>
            
          </div>
          <a href="products.php">
          <div class="cutsdivide", id="product">
            <img class="imgIcon" src="../../media/1122840.png" alt="hair product" width="150" height="150">
            
              <h3>Products</h3>
              <p>
                Everyone knows the secret to enhancing your hair game is good quality products, check our store
                to learn more!
              </p>
            
          </div>
        </a>
      </section>

    </article>
  </main>

  <footer>

    <section class="foot" , id="contact">
      <h2>CONTACT US</h2>
      <p><img id="email" src="../../media/2099199.png" alt="Email Icon" width="15" height="15">
        secret.barber@fakeemail.com</p>
      <p><img id="phone" src="../../media/597177.png" alt="Phone icon" width="15" height="15">
        +0123 456 789</p>

    </section>

    <div class="foot">&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Kyle Winfield, s3541867. Last modified
      <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.

      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
        Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </div>
  </footer>

</body>

</html>