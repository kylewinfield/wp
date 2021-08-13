<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>

  <link href="https://fonts.googleapis.com/css2?family=Aleo:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <?php require_once("tools.php")?>


</head>

<body>
<?php 
 topModule();
 navModule();
?>

  <main>
    <article>
      <section class="main" , id="intro">

        <h2>A SECRET TO THE WORLD</h2>

        <img id="img1" src="../../media/arthur-humeau-Twd3yaqA2NM-unsplash.jpg" alt="Man getting beard shaved" width="500"
          height="400">
        <p>
          Let your curiosity get the best of you and find your way to Secret Barber,
          where the hidden tricks of the trade are implemented to give you a personally
          crafted barber experience.
        </p>

      </section>




      <section class="main">
        <h2>OPENING HOURS</h2>

        <div id="hours">
          <p>Monday: 8am - 4pm</p>
          <p>Tuesday: 8am - 7pm</p>
          <p>Wednesday: 8am - 4pm</p>
          <p>Thursday: 8am - 7pm</p>
          <p>Saturday: 7am - 2pm</p>
          <p>Sunday: Closed</p>
        </div>

      </section>

      <section class="main" , id="customer">
        <h2>WHAT OUR CUSTOMERS HAVE TO SAY</h2>
        <div id="quotes">
          <p>"A great customer service and I'm so happy with my new cut."</p>
          <p>"Secret Barber is my new go to barber, the staff there are very welcoming and friendly."</p>
          <p>"These guys were extremely helpful when I needed to change up my look, love the guys there!"</p>
        </div>
      </section>

    </article>
  </main>

  <?php bottomModule()?>

</body>

</html>