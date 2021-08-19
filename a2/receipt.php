<!DOCTYPE html>
<html lang='en'>

<?php
 require_once("tools.php");
 headModule();

 $prices = readPrices();
 $total = 0;

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

 //Generate receipt: 
?>
<body id="receipt">
 <main>
   
   <h1><a href="index.php">Underground Barber</a></h1> 
   
   <div id="contents">
     <div id="orderdate">
      <h2>Order date: <?php echo $orderDate ?></h2>
     </div>
					<table cellspacing: 0px;>
              
						<tr id="tablenames">
							 <td ><h2>Item</h2></td>
               <td ><h2>Variant</h2></td>
						   <td ><h2>Qty</h2></td>
							 <td ><h2>Subtotal</h2></td>
					  </tr>
          
              <?php  

          for ($i = 0; $i < count($_SESSION['cart']); $i++){ 
             $array = array_keys($_SESSION['cart'][$i]); //return array of keys (only 1 key)
             $item = $array[0]; // this is name of item that we need
                                
            $subtotal = round($prices[$item][$_SESSION['cart'][$i][$item]['variant']] * $_SESSION['cart'][$i][$item]['qty'], 2);
             $total += $subtotal;
            ?>
            
					<tr >
						<td class="receiptdata"><p> <?php echo ucfirst($item) ?> </p></td>
            <td class="receiptdata"><p> <?php echo ucfirst($_SESSION['cart'][$i][$item]['variant']) ?> </p></td>
						<td class="receiptdata"><p> <?php echo $_SESSION['cart'][$i][$item]['qty'] ?> </p></td>
						<td class="receiptdata"><p> $ <?php echo $subtotal ?> </p></td>
					</tr>

            <?php } ?>

					<tr id="receiptTotal">
						<td></td>
            <td></td>
						<td ><h2>Total</h2></td>
						<td ><h2>$ <?php echo $total ?></h2></td>
					</tr>

				</table>
   </div>
  </main>

</body>

 <!-- Customer information -->
<footer>
  <div id="clientDetails">
      <h2>Client contact:</h2>
      <h3>Name: </h3><?php echo ucfirst($_SESSION['custInfo']['fname'])?> <?php echo ucfirst($_SESSION['custInfo']['lname'])?>
      <h3>Email: </h3><?php echo $_SESSION['custInfo']['email'] ?>
      <h3>Phone: </h3><?php echo $_SESSION['custInfo']['phoneno'] ?>
   </div>

</footer>

<?php
 unset($_SESSION['cart']); //reset cart and customer information after successful order
 unset($_SESSION['custInfo']);
 debug();

?>
</html>
