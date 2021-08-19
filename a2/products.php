<!DOCTYPE html>
<html lang='en'>

<?php 
 require_once("tools.php");
 $item = $_GET['item'];
 $prices = readPrices();

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require("post-validation.php");
}

 headModule();
 topModule();
 navModule();
 
 //'pill' radio selection boxes need to be required still
 
 if ($_GET['item'] == 'comb'){

  ?>
  <main>
   
     <article>

      <div id="producthead">
       <h2>Combs</h2>
      </div>

      <?php cartModule();?>

      <section class="main" , id="products">

        <div id="productcontainer">

           <h3>All-purpose Comb</h3><img src="../../media/allpurposecomb.png" alt="Hair comb">
           <p>
             The 'one-size fits all' approach to combs. Combines a fine-tooth and wide-tooth
             comb into one on each side. If there's no comb in your home this is what you need.
             <br><br><br>
             Price: $ <?php echo $prices[$item]['allpurpose']; ?>
           </p>
      

           <h3>Fine-tooth comb</h3><img src="../../media/finecomb.png" alt="fine-tooth hair comb">
            <p>
             Comb with teeth spaced close together, ideal for use with thin hair.
             <br><br><br>
             Price: $ <?php echo $prices[$item]['finetooth']; ?>
            </p>
            
           
           <h3>Wide-tooth comb</h3><img src="../../media/widecomb.png" alt="wide-tooth hair comb">
           <p>
            Comb with teeth spaced widely, ideal for use with thicker hair or getting the tangles out
            of your hair. 
            <br><br><br>
             Price: $ <?php echo $prices[$item]['widetooth']; ?>
           </p>
      
        </div>
        
        <div id="purchase">
        <h3>Select variant and quantity for purchase:</h3>

        <form action='products.php?item=<?php echo $item?>' method='post'>
        
          <section class="radio", id="combRadio">
            <input type="radio" id="allpurpose" name='<?php echo $item?>[variant]' value='allpurpose' required>
            <label for="allpurpose">
              <p>All- purpose</p>
            </label>
            <input type="radio" id="finetooth" name='<?php echo $item?>[variant]' value='finetooth' required>
            <label for="finetooth">
              <p>Fine-tooth</p>
            </label>
            <input type="radio" id="widetooth" name='<?php echo $item?>[variant]' value='widetooth' required>
            <label for="widetooth">
              <p>Wide-tooth</p>
            </label>
          </section>
          <p>
            Select quantity: 
            <button class="button" type="button" onclick='decrementQuantity("<?php echo $item?>", 
            <?php echo json_encode($prices);?>)'>-</button>
            <input type='text' name='<?php echo $item?>[qty]' id='<?php echo $item?>' oninput='inputRangeCheck("<?php echo $item?>", 
            <?php echo json_encode($prices);?> )' required>
            <button class="button" type="button" onclick='incrementQuantity("<?php echo $item?>", 
            <?php echo json_encode($prices);?>)'>+</button>
          </p>
          <p>SubTotal: $ <span id="subtotal">0.00</span></p>
          
          <button class="button" type="submit">Add to cart</button>
          
        </form>
      </div>

      </section>

    </article>
  </main>
  <?php  
}
else if($_GET['item'] == 'trimmer'){
  ?>
  <main>
    <article>

      <div id="producthead">
        <h2>Trimmers</h2>
      </div>

      <?php cartModule();?>

      <section class="main" , id="products">

        <div id="productcontainer">

           <h3>Multigroom Trimmer</h3><img src="../../media/trimmer.png" alt="Multigroom Trimmer">
           <p>
             A professional trimmer that offers precision, durability and performance. Comes with 10 guide combs,
             charger and storage pouch. A must-have kit for anyone maintaining their facial hair.
             <br><br><br>
             Price: $ <?php echo $prices[$item]['multigroom'] ?>
           </p>
      

           <h3>Stubble trimmer</h3><img src="../../media/stubletrim.png" alt="Struble trimmer">
            <p>
             A great trimmer to keep your face clean from stuble. This stuble trimmer is lightweight and
             easy to run over your face first thing in the morning.
             <br><br><br><br>
             Price: $ <?php echo $prices[$item]['stubble'] ?> 
            </p>
            
           
           <h3>Travel trimmer</h3><img src="../../media/traveltrim.png" alt="Travel trimmer">
           <p>
            The perfect travel companion to keep you looking sharp while you're on the go.
            <br><br><br><br><br>
             Price: $ <?php echo $prices[$item]['travel'] ?>
           </p>
      
        </div>
        
        <div id="purchase">
        <h3>Select variant and quantity for purchase:</h3>

        <form action='products.php?item=<?php echo $item?>' method='post'>
  
          <section class="radio", id="trimRadio">
            <input type="radio" id="multigroom" name='<?php echo $item?>[variant]' value='multigroom' required>
            <label for="multigroom">
              <p>Multigroom</p>
            </label>
            <input type="radio" id="stuble" name='<?php echo $item?>[variant]' value='stuble' required>
            <label for="stuble">
              <p>Stuble</p>
            </label>
            <input type="radio" id="travel" name='<?php echo $item?>[variant]' value='travel' required>
            <label for="travel">
              <p>Travel</p>
            </label>
          </section>
          <p>
            Select quantity: 
            <button class="button" type="button" onclick='decrementQuantity("<?php echo $item?>", <?php echo json_encode($prices);?>)'>-</button>
            <input type='text' name='<?php echo $item?>[qty]' id='<?php echo $item?>' oninput='inputRangeCheck("<?php echo $item?>", <?php echo json_encode($prices);?> )' required>
            <button class="button" type="button" onclick='incrementQuantity("<?php echo $item?>", <?php echo json_encode($prices);?>)'>+</button>
          </p>
          <p>SubTotal: $ <span id="subtotal">0.00</span></p>

          <button class="button" type="submit">Add to cart</button>
        </form>

      </div>

      </section>

    </article>
  </main>
 <?php 
}
else if($_GET['item'] == 'razor'){

  ?>
 
  <main>
    <article>

      <div id="producthead">
        <h2>Razors</h2>
      </div>

      <?php cartModule();?>

      <section class="main" , id="products">

        <div id="productcontainer">

           <h3>Straight Razor</h3><img src="../../media/straightrazor.png" alt="Straight razor">
           <p>
             This razor features a polished handle with a 3/9" stainless steel blade. It is a professional grade straight
             razor with a hardened blade for the ultimate shaving experience.
             Comes in either Black, wooden or silver handle.
             <br><br><br>
             Price: $ <?php echo $prices[$item]['black'];?>
           </p>
      
        </div>
        
        <div id="purchase">
        <h3>Select variant and quantity for purchase:</h3>

        <form action='products.php?item=<?php echo $item?>' method='post'>
          <section class="radio", id="razorRadio">
            <input type="radio" id="black" name='<?php echo $item?>[variant]' value='black' required>
            <label for="black">
              <p>Black</p>
            </label>
            <input type="radio" id="wooden" name='<?php echo $item?>[variant]' value='wooden' required>
            <label for="wooden">
              <p>Wooden</p>
            </label>
            <input type="radio" id="silver" name='<?php echo $item?>[variant]' value='silver' required>
            <label for="silver">
              <p>Silver</p>
            </label>
          </section>
          <p>
            Select quantity: 
            <button class="button" type="button" onclick='decrementQuantity("<?php echo $item?>", <?php echo json_encode($prices);?>)'>-</button>
            <input type='text' name='<?php echo $item?>[qty]' id='<?php echo $item?>' oninput='inputRangeCheck("<?php echo $item?>", <?php echo json_encode($prices);?> )' required>
            <button class="button" type="button" onclick='incrementQuantity("<?php echo $item?>", <?php echo json_encode($prices);?>)'>+</button>
          </p>
          <p>SubTotal: $ <span id="subtotal">0.00</span></p>

          <button class="button" type="submit">Add to cart</button>
        </form>

      </div>

      </section>

    </article>
  </main>

 <?php 
}
else if ($_GET['item'] == 'product'){

  ?>

  <main>
    <article>

      <div id="producthead">
        <h2>Products</h2>
      </div>

      <?php cartModule();?>

      <section class="main" , id="products">

        <div id="productcontainer">

           <h3>Immortal Hair Wax</h3><img src="../../media/hairwax.jpg" alt="hair wax">
           <p>
             Delivers unbelievable bulkiness, 
             extra ordinary texture with its formula defying the gravity. 
             Makes hair emphasized not causing any oily look thanks to its structure containing wax. 
             A very scientific mix of essences defies the human understanding of scent. 
             Easy to apply thanks to its creamy structure.
             <br><br>
             Price: $ <?php echo $prices[$item]['hairwax']?>
           </p>

           <h3>Barbasol Shaving Cream</h3><img src="../../media/shavingcream.jpg" alt="shaving cream">
           <p>
             Formulated for every man, Barbasol Original Shaving Cream has been an American standard and 
             tradition in shaving for nearly 100 years. The premium Close Shave® formula, 
             with quality ingredients, produces a rich, thick lather and exceptional razor glide. 
             Barbasol Shaving Cream gives you the confidence that comes from a close, comfortable shave.
             <br><br>
             Price: $ <?php echo $prices[$item]['shavingcream']?>
            </p>
           
           <h3>Proraso Beard Oil</h3><img src="../../media/beardoil.jpg" alt="beard oil">
           <p>
            The Proraso Beard Oil Wood & Spice is a nourishing oil that smoothes and tames unruly beards, 
            while lightly hydrating the skin underneath to prevent dryness and flakiness. 
            The Proraso Wood & Spice Beard Oil refreshes, moisturises, and protects using natural ingredients 
            like Macademia Oil to promote healthy beard growth and prevent breakages.
            <br><br>
            Price: $ <?php echo $prices[$item]['beardoil']?>
           </p>
      
        </div>
        
        <div id="purchase">
        <h3>Select variant and quantity for purchase:</h3>

        <form action='products.php?item=<?php echo $item?>' method='post'>
          <section class="radio">
            <input type="radio" id="hairwax" name='<?php echo $item?>[variant]' value='hairwax' required>
            <label for="hairwax">
              <p>Hair wax</p>
            </label>
            <input type="radio" id="shavingcream" name='<?php echo $item?>[variant]' value='shavingcream' required>
            <label for="shavingcream">
              <p>Shaving cream</p>
            </label>
            <input type="radio" id="beardoil" name='<?php echo $item?>[variant]' value='beardoil' required>
            <label for="beardoil">
              <p>Beard oil</p>
            </label>
          </section>
          <p>
            Select quantity: 
            <button class="button" type="button" onclick='decrementQuantity("<?php echo $item?>", <?php echo json_encode($prices);?>)'>-</button>
            <input type='text' name='<?php echo $item?>[qty]' id='<?php echo $item?>' oninput='inputRangeCheck("<?php echo $item?>", <?php echo json_encode($prices);?> )' required>
            <button class="button" type="button" onclick='incrementQuantity("<?php echo $item?>", <?php echo json_encode($prices);?>)'>+</button>
            
          </p>
          <p>SubTotal: $ <span id="subtotal">0.00</span></p>

          <button class="button" type="submit">Add to cart</button>
        </form>

      </div>

      </section>

    </article>
  </main>
 
 <?php 
}
else {
  header("Location: shop.php");
}
  
  bottomModule();
  debug();
  
 ?>

</html>