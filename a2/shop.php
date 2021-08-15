<!DOCTYPE html>
<html lang='en'>

<?php 
 require_once("tools.php");
 headModule();
 topModule();
 navModule();
 
?>

  <main>
    <article>
      <div id="servicehead">
      <h2>Shop</h2>
      </div>
      <section id="cuts">

        <div id="everycut">

        <a href="products.php?item=comb">
          <div class="cutsdivide">
            <img class="imgIcon" src="../../media/2303249.png" alt="Comb" width="150" height="150">
            
              <h3>Combs</h3>
              <p>
                High quality combs to suit your needs, untangling hair, evenly distribute your products,
                the comb is a versatile tool that every man needs.
              </p>

              
          </div>
        </a>
        <a href="products.php?item=trimmer">
          <div class="cutsdivide">
            <img class="imgIcon" src="../../media/3615156.png" alt="shaver" width="150" height="150">
            
              <h3>Trimmers</h3>
              <p>
                Trimming up has never been easier with our precise and quick shavers, easy to use 
                and perfect for everyday use.
              </p>
            
          </div>
        </a>
          <a href="products.php?item=razor">
           <div class="cutsdivide">
             <img class="imgIcon" src="../../media/40648.png" alt="razor" width="150" height="170"> 
                        
              <h3>Razors</h3>
              <p>
                Sometimes you just feel old school and doing things like our grandfathers did. Our razors are stylish,
                sharp and effective.
              </p>
            
           </div>
            </a>
          <a href="products.php?item=product">
          <div class="cutsdivide", id="product">
            <img class="imgIcon" src="../../media/1122840.png" alt="hair product" width="150" height="150">
            
              <h3>Products</h3>
              <p>
                Everyone knows the secret to enhancing your hair game is good quality products, check our range
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