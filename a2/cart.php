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
  <br>

 <?php } ?>

  <!-- form goes here -->
  <section id="custForm">
     <form action="receipt.php" method="post">
      <p>First name: </p><br>
      <input type='text' name='fname' id='fname' required>
      <p>Last name: </p><br>
      <input type='text' name='lname' id='lname' required>
      <p>Email: </p><br>
      <input type='email' name='email' id='email' required>
      <p>Phone: </p><br>
      <input type='text' minlength='10' maxlength='15' pattern='[0-9]+' name='phoneno' id='phoneno' required>
      <p>Credit Card Number: </p><br>
      <input type='text' minlength = '16' maxlength='16' pattern='[0-9]+' name='creditcardno' id='creditcardno' required>
      <br><br><br>
      <button id ="custbutton" class='button' type='submit'>Place order</button>
     </form>
    </section>


  </section>
 </main>

<?php
  bottomModule();
  debug();
?>

</html>