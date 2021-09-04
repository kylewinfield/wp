<?php
  include_once("tools.php"); 
?>

<!DOCTYPE html>
<html lang='en'>

  <?php topModule("OrbicoBiz - Welcome!"); 
   navContent();
   ?>

    <main>
      <h1>Home Page</h1>
      <h2>Order Form</h2>
      
      <form method="post" id="order">
        <p class="formRow">
          <label class="formCell" for="name">Name</label> 
          <input type="text" pattern='[a-zA-z]+' name="name" id="name" required> 
        </p>

        <p class="formRow">
          <label class="formCell" for="email">Email</label> 
          <input type="email" name="email" id="email" required> 
        </p>

        <p class="formRow">
          <label class="formCell" for="mobile">Mobile</label>
         <input type="tel"  name="mobile" id="mobile" required> 
        </p>

        <p class="formRow">
          <label class="formCell" for="address">Address</label> 
          <input type="text" name="address" id="address" required>
         </p>

         <p class="formRow">
           <label class="invis">. </label>
          <input type="checkbox" id="remember" onclick="rememberMe()">
          <label for ="remember"> Remember me</label> <br><br>

         </p>

        <p class="formRow">
         <label class="invis">. </label>
         <input type="submit" value="Complete order (disabled)" disabled> 
        </p>

     </form>
     <script> fillFields();</script>

    </main>
 
    <?php endModule(); ?>