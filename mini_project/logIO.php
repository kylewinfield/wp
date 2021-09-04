<?php
    session_start();

    $users = [
    'Alice' => 'passwordA',
    'Bob' => 'passwordB',
    'Carol' => 'passwordC',
    ];

    // checks if user is being referred from another page
    if(isset($_SERVER["HTTP_REFERER"])){
      //checks if user was already logged in
      if (isset($_SESSION['user'])) {
       //logs user out
       unset($_SESSION['user']);

      } 
      else {
        
        //check if fields were set
      if(isset($_POST["username"]) & isset($_POST['password'])){

        //checks if username is in $users
       if(isset($users[$_POST['username']])){

        //checks if user password is correct
         if($users[$_POST['username']] == $_POST['password']){

          //logs user in
           $_SESSION['user']['name'] = htmlentities($_POST['username'], ENT_QUOTES);
        }
       }
      }
     }
     header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    //if user navigates here without refferal, sends to index
    header("Location: index.php");


   ?>