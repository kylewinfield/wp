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
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <?php require_once("tools.php")?>

</head>

<body>

<?php topModule();
navModule();
?>

  <main>
    <article>

      <div id="producthead">
        <h2>Products</h2>
      </div>

      <section class="main" , id="products">

        <div id="productcontainer">

           <h3>Immortal Hair Wax</h3><img src="../../media/hairwax.jpg" alt="hair wax">
           <p>
             Delivers unbelievable bulkiness, 
             extra ordinary texture with its formula defying the gravity. 
             Makes hair emphasized not causing any oily look thanks to its structure containing wax. 
             A very scientific mix of essences defies the human understanding of scent. 
             Easy to apply thanks to its creamy structure.
           </p>

           <h3>Barbasol Shaving Cream</h3><img src="../../media/shavingcream.jpg" alt="shaving cream">
           <p>
             Formulated for every man, Barbasol Original Shaving Cream has been an American standard and 
             tradition in shaving for nearly 100 years. The premium Close Shave® formula, 
             with quality ingredients, produces a rich, thick lather and exceptional razor glide. 
             Barbasol Shaving Cream gives you the confidence that comes from a close, comfortable shave.
            </p>
           
           <h3>Proraso Beard Oil</h3><img src="../../media/beardoil.jpg" alt="beard oil">
           <p>
            The Proraso Beard Oil Wood & Spice is a nourishing oil that smoothes and tames unruly beards, 
            while lightly hydrating the skin underneath to prevent dryness and flakiness. 
            The Proraso Wood & Spice Beard Oil refreshes, moisturises, and protects using natural ingredients 
            like Macademia Oil to promote healthy beard growth and prevent breakages.
           </p>
      
        </div>
        
        <div id="purchase">
        <h3>Select product and quantity for purchase:</h3>

        <form action='https://titan.csit.rmit.edu.au/~e54061/wp/testproduct.php' method='post' target='_blank'>
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
          <p>
            Select quantity: 
            <button class="button" type="button">+</button>
            <button class="button" type="button">-</button>
            <input type='number' name='qty' min='1' max='100' required />
          </p>

          <button class="button" type="submit">Buy</button>
        </form>

      </div>

      </section>

    </article>
  </main>

  <?php bottomModule()?>

</body>

</html>