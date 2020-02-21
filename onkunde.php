<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="paniek.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon&display=swap" rel="stylesheet"> 
    <title id="'mad">mad libs</title>
  </head>

  <body id="background">
  <div class="center">
    <h1 id="head">Mad Libs</h1>

    <div class="menu">
      <a href="paniek.php">er heerst paniek...</a>
      <a href="onkunde.php">onkunde</a>
    </div>
    <div id="form" class="container">

      <h3 id="onkunde">Onkunde</h3>

      <?php
          function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
          }
      ?>
      <?php
      if (isset($_POST['submit'])) {

      $kunnen = test_input($_POST['kunnen']);
      $schiet = test_input($_POST['schiet']);
      $vakantie = test_input($_POST['vakantie']);
      $getal = test_input($_POST['getal']);
      $eigenschap = test_input($_POST['eigenschap']);
      $worst = test_input($_POST['worst']);
      $komen = test_input($_POST['komen']);

       ?>
       <p>Er zijn veel mensen die niet kunnen <?php echo $kunnen ?>. Neem nou <?php echo $schiet ?>. Zelfs met de hulp

        van een <?php echo $vakantie ?> of zelfs <?php echo $getal ?> kan <?php echo $schiet ?> niet <?php echo $kunnen ?>. Dat heeft niet te maken met

        een gebrek aan <?php echo $eigenschap ?>, maar met een te veel aan <?php echo $worst ?>. Te veel <?php echo $worst ?>

        leidt tot <?php echo $komen ?> en dat is niet goed als je wilt <?php echo $kunnen ?>. Helaas voor <?php echo $schiet ?>.</p>

     <?php } else { ?>
      <form action="onkunde.php" method="post">
        <div class="form-group">
          <label for="kunnen">Wat zou je graag willen kunnen?</label>
          <input type="text" name="kunnen" id="kunnen" class="form-control" value="" size="25"> 
        </div>

        <br>

        <div class=" form-group">
          <label for="schiet">Met welke persoon kun je goed opschieten?</label>
          <input type="text" class="form-control" id="schiet" name="schiet" value="" size="25"> 
        </div>

        <br>

        <div class="form-group">
          <label for="getal">Wat is je favoriete getal?</label>
          <input type="text" name="getal" id="getal" class="form-control" value="" size="25"> 
        </div>

        <br>

        <div class="form-group">
          <label for="vakantie">Wat heb je altijd bij je op vakantie gaat?</label>
          <input type="text" class="form-control" id="vakantie" name="vakantie" value="" size="25"> 
        </div>

        <br>

        <div class="form-group">
          <label for="eigenschap">Wat is je beste persoonlijke eigenschap?</label>
          <input type="text" class="form-control" id="eigenschap" name="eigenschap" value="" size="25">
        </div>

        <br>

        <div class="form-group">
          <label for="worst">Wat is je slechtste persoonlijke eigenschap?</label>
          <input type="text" class="form-control" id="worst" name="worst" value="" size="25">
        </div>

        <br>

        <div class="form-group">
        <label for="komen">Wat is het ergste dat je kan overkomen?</label>
        <input type="text" class="form-control" id="komen" name="komen" value="" size="25">
        </div>

        <br>
        <input class="submit" type="submit" name="submit" value="versturen">

      </form>

    <?php } ?>
    </div>
    <footer class="Thijmen">Thijmen Stegenga - 2020</footer>
  </div>
  </body>
</html>