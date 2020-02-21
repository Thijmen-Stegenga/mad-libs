<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="paniek.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon&display=swap" rel="stylesheet"> 
    <title>mad lips</title>
  </head>
  <body>

  <div class="center">

    <h1>Mad Libs</h1>
    <div class="menu">
      <a href="paniek.php">er heerst paniek...</a>
      <a href="onkunde.php">onkunde</a>
    </div>
    <div id="form" class="container">
      <h3>Er heerst paniek...</h3>

      <?php
          function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
}
      if (isset($_POST['submit'])) {

        $spijbel = test_input($_POST['spijbel']);
        $dier = test_input($_POST['dier']);
        $land = test_input($_POST['land']);
        $person = test_input($_POST['person']);
        $toy = test_input($_POST['toy']);
        $bezig = test_input($_POST['bezig']);
        $kopen = test_input($_POST['kopen']);
        $verveel = test_input($_POST['verveel']);


       ?>
       <p>Er heerst paniek in het koninkrijk <?php echo $land ?>. Koning <?php echo $spijbel ?> is ten einde raad en als koning <?php echo $spijbel ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $person; ?>.</p>
       <p>"<?php echo $person ?>! Het is een ramp! Het is een schande!"</p>
       <p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>
       <p>"Mijn <?php echo $dier ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $toy ?> voor hem gekocht!"</p>
       <p>"Majesteit, uw <?php echo $dier ?> komt vast vanzelf weer terug?"</p>
       <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezig ?> leren?"</p>
       <p>"Maar Sire, daar kunt u toch uw <?php echo $kopen ?> voor gebruiken."</p>
       <p>"<?php echo $person ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
       <p>"<?php echo $verveel ?>, Sire."</p>

     <?php } else { ?>
      <form class="" action="paniek.php" method="post">
        <p>welke dier zou je nooit als huisdier willen hebben?<input type="text" name="dier" value="" size="25"></p>

        <br>

        <p>Wie is de belangrijkste persoon in je leven?<input type="text" name="person" value="" size="25"></p>

        <br>

        <p>In welk land zou je graag willen wonen?<input type="text" name="land" value="" size="25"></p>

        <br>

        <p>Wat doe je als je je verveelt?<input type="text" name="verveel" value="" size="25"></p>

        <br>

        <p>Met welk speelgoed speelde je als kind het meest?<input type="text" name="toy" value="" size="25"></p>

        <br>

        <p>Bij welke docent spijbel je het liefst?<input type="text" name="spijbel" value="" size="25"></p>

        <br>

        <p>Als je € 100.00,- had, wat zou je dan kopen?<input type="text" name="kopen" value="" size="25"></p>

        <br>

        <p>Wat is je favoriete bezigheid?<input type="text" name="bezig" value="" size="25"></p>

        <br>

        <input class="submit" type="submit" name="submit" value="versturen">
      </form>

    <?php } ?>
    </div>
    <footer>
      Thijmen Stegenga - 2020
    </footer>
  </div>



  </body>

</html>