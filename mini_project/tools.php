<?php 
  session_start();

  function topModule($title) {

   $html = <<<"OUTPUT"
     <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>$title</title>

     <link type="text/css" rel="stylesheet" href="wireframe.css">
     <link type="text/css" rel="stylesheet" href="style.css">

     <script src='script.js'></script>

     </head>
     <body>

     <div id="topContainer">
     <header>
      <!-- Image sourced and adapted from www.rmit.edu.au for educational purposes only -->
      <img src='orbicobiz-logo.png' alt='Orbicobiz Logo' height="100px"/>OrbicoBiz
     </header>
    OUTPUT;
    echo $html;
  }
function navContent() {
  if(isset($_SESSION['user'])) {

 // return the "logged in" version of the nav menu as a string

   $name = $_SESSION['user']['name'];
   $html = <<<"OUTPUT"

    <nav>
      <div id="loggedInAs">Logged in as $name </div>

      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./members.php">Members</a></li>
        <li><form action="logIO.php" method="post"><input type="submit" value="Logout"></form></li>
      </ul>

      </div>
    </nav>
    </div>
    OUTPUT;
    echo $html;

  } else {

  // return the "not logged in" version of the nav menu as a string

   $html = <<<"OUTPUT"

    <nav>
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./members.php">Members</a></li>
        <li><button type ="button" onclick="toggleLogin()"> Login</button></li>
      </ul>
      <div id="loginToggle">
         <form action="logIO.php" method="post">
           <input type="text" name="username" id="username">
           <input type="password" name="password" id="username">
           <input type="submit" value="Submit">
          </form>

     </div>
   </nav>
   </div>
   OUTPUT;
   echo $html;
    
  }
}

  

  function endModule() {
    $html = <<<"OUTPUT"
     </main>

     <footer>
       Footer Content
     </footer>

     </body>

     </html>  
    OUTPUT;
    echo $html;
  }

?>
