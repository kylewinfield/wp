<?php

if (!isset($item)){
  $item = 'z'; //needed for validation on pages that aren't products.php
}

if(isset($_POST[$item])){

   if ($_POST[$item]['qty'] > 0 && $_POST[$item]['qty'] < 101){
     $_SESSION['cart'][] = $_POST; 
     $message ="Successfully added items to cart!";
    }
    else{
      $message = "Error: Please enter quantity between 0-100";
    }
    echo "<div class= 'errorMsg'>";
    echo $message;
    echo "</div>";

    //echo $_SESSION['cart'][0]['comb']['variant']; <- can access cart info like this
    //$_SESSION['cart'][0]['comb']['qty'] ;   <- and this
    //for cart, maybe can match variants and just add qty's when adding $_POST data to $_SESSION ?
}
else{

  $fnameError = 'Error: Please enter a valid first name.';
  $lnameError = 'Error: Please enter a valid last name.';
  $emailError = 'Error: Please enter valid email address.';
  $phonenoError= 'Error: Please enter a valid phone number.';
  $creditcardnoError= 'Error: Please enter a valid credit card number.';

  $errorsFound = false;


  if (isset($_POST['fname'])) {
    if(!preg_match('/^[a-z][A-Z]+$/', $_POST['fname'])){

      $errorsFound = true;
      $errorMessage = $fnameError;
    }
    
  }

  if (isset($_POST['lname'])){
    if(!preg_match('/^[a-z][A-Z]+$/', $_POST['lname'])){

      $errorsFound = true;
      $errorMessage = $lnameError;
    }

  }

  if(isset($_POST['email'])){

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errorsFound = true;
      $errorMessage = $emailError;
    }
  }

  if(isset($_POST['phoneno'])){
    if(!preg_match('/^[0-9]{15}+$/', $_POST['phoneno']))
    {
      $errorsFound = true;
      $errorMessage = $phonenoError;
    }

  }

  if(isset($_POST['creditcardno'])){
    if(!preg_match('/^[0-9]{16}+$/', $_POST['creditcardno']))
    {
      $errorsFound = true;
      $errorMessage = $creditcardnoError;
    }

  }

  if($errorsFound == false){

    $_SESSION['custInfo'][]= $_POST;
    header("Location: receipt.php");

  }
  else{
    echo "<div class= 'errorMsg'>";
    echo $errorMessage;
    echo "</div>";
  }
}
 
?>
