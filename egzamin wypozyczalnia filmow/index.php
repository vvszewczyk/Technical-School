<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>Video On Demand</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="s1">
    <h1>Internetowa wypożyczalnia filmów</h1>
  </header>

  <section class="s2">
    <h2>Kategorie filmów</h2>
    <table>
      <tr>
        <th>Kryminał</th>
        <th>Horror</th>
        <th>Przygodowy</th>
      </tr>
      <tr>
        <td>20</td>
        <td>30</td>
        <td>20</td>
      </tr>
    </table>
  </section>

  <section class="zap1">
    <h3>Polecamy</h3>
    <?php
    require("connect.php");

    $ids = [18, 22, 23, 25];  // Array for recommended film IDs

    $zap = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (" . implode(',', $ids) . ")";
    $wynik = $baza->query($zap);

    while ($row = $wynik->fetch_array()) {
      echo "<div class='d1'>
                <h4>$row[1]</h4>
                <img src='$row[3]' alt='film'>
                <p>$row[2]</p>
              </div>";
    }

    mysqli_close($baza);
    ?>
  </section>

  <section class="zap2">
    <h3>Filmy fantastyczne</h3>
    <?php
    require("connect.php");

    $zap2 = "SELECT id, nazwa, zdjecie, opis FROM produkty WHERE Rodzaje_id=12";
    $wynik2 = $baza->query($zap2);

    while ($row = $wynik2->fetch_array()) {
      echo "<div class='d2'>
                <h4>$row[1]</h4>
                <img src='$row[2]' alt='film'>
                <p>$row[2]</p>
              </div>";
    }

    mysqli_close($baza);
    ?>
  </section>

  <footer class="footer">
    <form action="index.php" method="post">
      Usuń film nr.:
      <input type="number" name="liczba" id="liczba" required>
      <input type="submit" value="Usuń film">
    </form>
    <?php
    require("connect.php");

    if (isset($_POST["liczba"])) {
      $liczba = (int)$_POST["liczba"];  // Cast to integer

      $zap3 = "DELETE FROM produkty WHERE id=$liczba";
      $baza->query($zap3);
    }

    mysqli_close($baza);
    ?>
    Stronę wykonał:
    <a href="mailto:a@poczta.com">00000000000</a>
  </footer>
</body>

</html>
