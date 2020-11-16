<html>
<head>
  <title>Nee</title>
</head>

<body>
  <form action="index.php" method="post">
  <input type="text" name="name" placeholder="Zoekopdracht">
  <input type="submit" value="Zoek">
  </form>

  <?php
  if(!empty($_POST["name"])) {
    echo $_POST["name"];
  } else {
    echo "De zoekopdracht is: Zoekopdracht <br> Geen resultaat gevonden!";
  }
  ?>
</body>

</html>

<!-- opdracht 1
Een melding met daarin: 127.0.0.1 meld het volgende XSS voorbeeld

opdracht 2
De text invoert wordt in het blauw weergeven

opdracht 3
Met behulp van een stukje code -->
