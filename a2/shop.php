<!DOCTYPE html>
<html lang='en'>

<?php 
 require_once("tools.php");
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }
 headModule();
 topModule();
 navModule();
 
?>

  <main>
    <article>
      <div id="servicehead">
      <h2>Services</h2>
      </div>
      <section id="cuts">

        <div id="everycut">

        <a href="products.php?service=haircut">
          <div class="cutsdivide">
            <img class="imgIcon" src="../../media/1930.png" alt="Scissors" width="150" height="150">
            
              <h3>Haircuts</h3>
              <p>
                Let Secret Barber cover your basic cuts, whether it be a full re-style or just a trim, our team of
                professionals has you covered.
              </p>

              
          </div>
        </a>
        <a href="products.php?service=fade">
          <div class="cutsdivide">
            <img class="imgIcon" src="../../media/3615156.png" alt="razor" width="150" height="150">
            
              <h3>Fades</h3>
              <p>
                When it comes to fades, we know just how important they are to you and we've got the secret
                for a perfect fade every time.
              </p>
            
          </div>
        </a>
          <a href="products.php?service=shave">
           <div class="cutsdivide">
             <img class="imgIcon" src="../../media/40648.png" alt="razor" width="150" height="170"> 
                        
              <h3>Shave</h3>
              <p>
                Shaving your beard can be a messy and disastrous procedure, we've all seen and heard the worst of it
                let the professionals handle it for you while you kick back and relax.
              </p>
            
           </div>
            </a>
          <a href="products.php?service=product">
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

  <?php 
  bottomModule();
  debug();
  ?>

</html>