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

  if(!isset($item)){
    $item = 'n'; // may be needed for using post-validation on cart.php
  }
  
  if(isset($_POST[$item])){

     if ($_POST[$item]['qty'] > 0 && $_POST[$item]['qty'] < 101){
       $_SESSION['cart'][] = $_POST; 
       $message ="Successfully added items to cart!";
      }
      else{
        $message = "Error: please enter quantity between 0-100";
      }
      echo "<div class='main'><h3>";
      echo $message;
      echo "</h3></div>";
  
      //echo $_SESSION['cart'][0]['comb']['variant']; <- can access cart info like this
      //$_SESSION['cart'][0]['comb']['qty'] ;   <- and this
  }

 //for cart, maybe can match variants and just add qty's when adding $_POST data to $_SESSION ?
?>
