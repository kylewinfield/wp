<?php
 require_once("tools.php");

 //writes $_SESSION data to file with fputcsv()

 $orderDate = date("jS \of F Y");

 if( ($fp = fopen("orders.txt", "a")) && flock($fp, LOCK_EX) !== false ) {;

   for ($i = 0; $i < COUNT($_SESSION['cart']); $i++){
    $array = array_keys($_SESSION['cart'][$i]); //return array of keys (only 1 key)
    $item = $array[0];

    $orderArray = array (
      $orderDate, $_SESSION['custInfo']['fname'], $_SESSION['custInfo']['lname'], $_SESSION['custInfo']['email'],
      $_SESSION['custInfo']['email'], $_SESSION['custInfo']['phoneno'], $item ,$_SESSION['cart'][$i][$item]['variant'],
      $_SESSION['cart'][$i][$item]['qty']
    );
 
    fputcsv($fp, $orderArray);
    
   }

   flock($fp, LOCK_UN);
    fclose($fp);
 }

 //Generated receipt goes here:
 

 //unset($_SESSION['cart']); //reset cart and customer information after successful order
 //unset($_SESSION['custInfo'])
 debug();

/*

This page must be formatted differently to other website pages. It should:
  1) Be printer friendly
  2) Look like company branded letterhead
  3) Look as though it fits on an A4 page
  4) Use a modest amount of toner / ink when printing

*/
?>
