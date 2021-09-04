<?php
  include_once("tools.php"); 
  topModule("OrbicoBiz - Members page");
  navContent();
?>


<main>
  <h1>Members Only Page</h1>
  
  <?php if(isset($_SESSION['user'])) { ?>
  <p><img src='website-under-construction.png' alt='Website Under Construction' /></p>
  <?php } else?>
  <p>This page is for members only</p>
</main>

<?php endModule(); ?>