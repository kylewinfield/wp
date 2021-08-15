<!DOCTYPE html>
<html lang='en'>

<?php 
 require_once("tools.php");
 headModule();
 topModule();
 navModule();
 
 if ($_GET['item'] == 'comb'){
  $html = <<<"OUTPUT"
  <!DOCTYPE HTML>
  <html>
  <main>
    <article>

      <div id="producthead">
        <h2>Combs</h2>
      </div>

      <section class="main" , id="products">

        <div id="productcontainer">

           <h3>All-purpose Comb</h3><img src="../../media/allpurposecomb.png" alt="Hair comb">
           <p>
             The 'one-size fits all' approach to combs. Combines a fine-tooth and wide-tooth
             comb into one on each side. If there's no comb in your home this is what you need.
             <br><br><br>
             Price: $20
           </p>
      

           <h3>Fine-tooth comb</h3><img src="../../media/finecomb.png" alt="fine-tooth hair comb">
            <p>
             Comb with teeth spaced close together, ideal for use with thin hair.
             <br><br><br>
             Price: $20 
            </p>
            
           
           <h3>Wide-tooth comb</h3><img src="../../media/widecomb.png" alt="wide-tooth hair comb">
           <p>
            Comb with teeth spaced widely, ideal for use with thicker hair or getting the tangles out
            of your hair. Material description?
            <br><br><br>
             Price: $20
           </p>
      
        </div>
        
        <div id="purchase">
        <h3>Select cut and quantity for purchase:</h3>

        <form action='' method='post' target=''>
          <input type='hidden' name='service' value='combs'>
          <section class="radio", id="combRadio">
            <input type="radio" id="allpurpose" name='variant' value='All purpose'>
            <label for="allpurpose">
              <p>All-purpose</p>
            </label>
            <input type="radio" id="finetooth" name='variant' value='Fine-tooth'>
            <label for="finetooth">
              <p>Fine-tooth</p>
            </label>
            <input type="radio" id="widetooth" name='variant' value='Wide-tooth'>
            <label for="widetooth">
              <p>Wide-tooth</p>
            </label>
          </section>
          <p>
            Select quantity: 
            <button class="button" type="button" onclick="decrementQuantity('product')">-</button>
            <input type='text' name='qty' id='product' oninput="inputRangeCheck('product')" required>
            <button class="button" type="button" onclick="incrementQuantity('product')">+</button>
          </p>

          <button class="button" type="submit">Buy</button>
        </form>

      </div>

      </section>

    </article>
  </main>
  </html>
  OUTPUT;
  echo $html;

}
else if($_GET['item'] == 'shaver'){

}
else if($_GET['item'] == 'razor'){

}
else if ($_GET['item'] == 'product'){
  $html = <<<"OUTPUT"
  <!DOCTYPE HTML>
  <html>
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

        <form action='' method='post' target=''>
          <input type='hidden' name='service' value='products'>
          <section class="radio">
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
            <button class="button" type="button" onclick="decrementQuantity('product')">-</button>
            <input type='text' name='qty' id='product' oninput="inputRangeCheck('product')" required>
            <button class="button" type="button" onclick="incrementQuantity('product')">+</button>
          </p>

          <button class="button" type="submit">Buy</button>
        </form>

      </div>

      </section>

    </article>
  </main>
  </html>
  OUTPUT;
  echo $html;
}
else {
  header("Location: shop.php");
};
?>

  

<?php 
  bottomModule();
  debug();
  ?>

</html>