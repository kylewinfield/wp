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
      <img id="logo" src="../../media/razor.png">
      <h1>SECRET BARBER</h1>
    </div>
  </header>

  <nav>
    <div>
      <a href="index.php">Home</a>
      <a href="shop.php">Services</a>
      <a href="#contact"> Contact</a>
    </div>
  </nav>

  <main>
    <article>

      <section class="main" , id="products">


        <img src="../../mediahairwax.jpg">
        <img src="../../mediashavingcream.jpg">
        <img src="../../mediabeardoil.jpg">


        
        <form action='' method='get' target='_blank'>
          <input type='hidden' name='service' value='products'>
          <section id="radio">
            <input type="radio" id="hairwax" name='variant' value='Hair wax'>
            <label for="hairwax">
              <p>Hair wax</p>
            </label>
            <input type="radio" id="shavingcream" name='variant' value='Shaving cream'>
            <label for="shavingcream">
              <p>Shaving cream</p>
            </label>
            <input type="radio" id="beardoil" name='variant' value='Beard Oil'>
            <label for="beardoil">
              <p>Beard oil</p>
            </label>
          </section>
          <p>Select quantity: <input type='number' name='qty' min='1' max='100' required /></p>
          <button type="submit">Buy</button>
        </form>
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

    <div class="foot" , id="disclaimer">&copy;
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