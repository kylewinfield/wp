<?php

/*
Tip: In files that need to perform POST processing, include this file with this code:

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("post-validation.php");
}
*/

  $firstname = '';
  $firstnameError = '';

  if (isset($_POST['firstname'])) {
    // ... your code here ...
  }
  
  if(isset($_POST['qty'])){

     if ($_POST['qty'] > 0 && $_POST['qty'] < 101){
       $_SESSION['cart'][] = $_POST; 
       $message ="Successfully added items to cart!";
      }
      else{
        $message = "Error: please enter quantity between 0-100";
      }
      echo "<div class='main'><h3>";
      echo $message;
      echo "</h3></div>";
  
  }

 //for cart, maybe can match variants and just add qty's when adding $_POST data to $_SESSION ?
?>
