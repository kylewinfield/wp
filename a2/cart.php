<!DOCTYPE html>
<html lang='en'>

<?php
  require_once("tools.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("post-validation.php");
    $prices = readPrices();
}

  headModule();
  topModule();
  navModule();
  //cart info + form and checkout button
  // need location to navigate to cart page. maybe in a module ?

  ?>
  <main>
      <div id="carthead">
       <h2>Cart</h2>
      </div>

    <section class = "main" id="cartbg">
    
    <!-- form goes here -->
    

  
  <?php if(isset($_SESSION['cart']))
  for ($i = 0; $i < count($_SESSION['cart']); $i++){ 
    $array = array_keys($_SESSION['cart'][$i]); //return array of keys (only 1 key)
    $item = $array[0]; // this is name of item that we need
    ?>

   
  <div id="cart">

    <p id="cartItem">
    <?php echo ucfirst($item);?>
    </p>
    <p>
    Variant: <?php echo ucfirst($_SESSION['cart'][$i][$item]['variant'])?>
    <br>
    Qty: x <?php echo ucfirst($_SESSION['cart'][$i][$item]['qty'])?>
    </p>

  </div>

 <?php } ?>
 
  

  </section>
 </main>

<?php
  bottomModule();
  debug();
?>

</html>