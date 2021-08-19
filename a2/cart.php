<!DOCTYPE html>
<html lang='en'>

<?php
  require_once("tools.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("post-validation.php");

}
  $prices = readPrices();
  $subtotal = 0;
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


   <div id="cartform">
    
  <div id="cartcontainer">
    <h3>Contents:</h3>
  <?php if(isset($_SESSION['cart'])){
          for ($i = 0; $i < count($_SESSION['cart']); $i++){ 
            $array = array_keys($_SESSION['cart'][$i]); //return array of keys (only 1 key)
            $item = $array[0]; // this is name of item that we need
                               //probably a more elegant solution for this, but it works for now
            ?>

    <div id="cart">

    <p id="cartItem">
    <?php echo ucfirst($item);?>
    </p>
    <p>
    Variant: <?php echo ucfirst($_SESSION['cart'][$i][$item]['variant'])?>
    <br>
    Qty: x <?php echo ucfirst($_SESSION['cart'][$i][$item]['qty'])?>
    <br>
    Total: $<?php 
    $total = round($prices[$item][$_SESSION['cart'][$i][$item]['variant']] * $_SESSION['cart'][$i][$item]['qty'], 2);
    echo $total;
    $subtotal += $total;
    ?>
    </p>

  </div>
  
  <br>
    
  <?php }
  }  ?>

  <p id='subtotal'>Subtotal: $<?php echo $subtotal; ?></p>
  
</div>

<section id="custForm">
     <form action="cart.php" method="post">
      <p>First name: </p><br>
      <input type='text' pattern='[a-zA-z]+' name='fname' id='fname' required>
      <p>Last name: </p><br>
      <input type='text' pattern='[a-zA-z]+' name='lname' id='lname' required>
      <p>Email: </p><br>
      <input type='email' name='email' id='email' required>
      <p>Phone: </p><br>
      <input type='text' minlength='10' maxlength='15' pattern='[0-9]+' name='phoneno' id='phoneno' required>
      <p>Credit Card Number: </p><br>
      <input type='text' minlength = '16' maxlength='16' pattern='[0-9]+' name='creditcardno' id='creditcardno' required>
      <br><br><br>
      <button class='button' type='submit'>Place order</button>
     </form>
    </section>

  </div>

  </section>
 </main>

<?php
  bottomModule();
  debug();
?>

</html>