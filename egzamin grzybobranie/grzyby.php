<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styl5.css">
  <title>Grzybobranie</title>
</head>

<body>
  <section id="miniatura">
    <a href="borowik.jpg">
      <img src="borowik-miniatura.jpg" alt="Grzybobranie">
    </a>
  </section>

  <section class="title">
    <h1>Idziemy na grzyby!</h1>
  </section>

  <?php
  $baza = new mysqli("localhost", "root", "", "dane2");
  if ($baza->connect_error) {
    die("Błąd połączenia: " . $baza->connect_error);
  }
  ?>

  <section class="main">
    <?php
    $sql = "SELECT nazwa_pliku, potoczna FROM grzyby";
    $result = $baza->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo '<img src="' . $row["nazwa_pliku"] . '" title="' . $row["potoczna"] . '">';
    }
    ?>
  </section>

  <section class="main2">
    <h2>Grzyby jadalne</h2>
    <?php
    $sql = "SELECT nazwa, potoczna FROM grzyby WHERE jadalny=1";
    $result = $baza->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo "<p>" . $row["nazwa"] . " (" . $row["potoczna"] . ")</p>";
    }
    ?>

    <h2>Polecamy do sosów</h2>
    <?php
    $sql = "SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa 
            FROM grzyby 
            INNER JOIN rodzina ON grzyby.rodzina_id=rodzina.id 
            WHERE grzyby.potrawy_id=1";
    $result = $baza->query($sql);
    echo "<ol>";

    while ($row = $result->fetch_row()) {
      echo "<li>" . $row[0] . " (" . $row[1] . "), rodzina " . $row[2] . "</li>";
    }

    echo "</ol>";
    $baza->close();
    ?>
  </section>

  <section class="footer">
    <p>Autor: 00000000000</p>
  </section>
</body>

</html>
