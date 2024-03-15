<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Weterynarz</title>
</head>

<body>
  <header>
    <h1>GABINET WETERYNARYJNY</h1>
  </header>

  <nav>
    <h2>PSY</h2>
    <?php
    $baza = mysqli_connect('localhost', 'root', '', 'weterynarz');

    $zapytanie = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE `rodzaj` = 1";
    $wynik = mysqli_query($baza, $zapytanie);

    while ($zwierze = mysqli_fetch_assoc($wynik)) {
      echo "<p>{$zwierze['id']}: {$zwierze['imie']} - {$zwierze['wlasciciel']}</p>";
    }

    mysqli_close($baza);
    ?>

    <h2>KOTY</h2>
    <?php
    $zapytanie = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE `rodzaj` = 2";
    $wynik = mysqli_query($baza, $zapytanie);

    while ($zwierze = mysqli_fetch_assoc($wynik)) {
      echo "<p>{$zwierze['id']}: {$zwierze['imie']} - {$zwierze['wlasciciel']}</p>";
    }

    mysqli_close($baza);
    ?>
  </nav>

  <main>
    <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
    <?php
    $baza = mysqli_connect('localhost', 'root', '', 'weterynarz');

    $zapytanie = "SELECT imie, telefon, szczepienie, opis FROM `zwierzeta`";
    $wynik = mysqli_query($baza, $zapytanie);

    while ($zwierze = mysqli_fetch_assoc($wynik)) {
      echo "<h3>{$zwierze['imie']}</h3>";
      echo "<p>Telefon właściciela: {$zwierze['telefon']}</p>";
      echo "<p>Ostatnie szczepienie: {$zwierze['szczepienie']}</p>";
      echo "<p>Informacje: {$zwierze['opis']}</p>";
      echo "<hr>";
    }

    mysqli_close($baza);
    ?>
  </main>

  <aside>
    <h2>WETERYNARZ</h2>
    <a href="logo.png"><img src="logo.png"></a>
    <p>Krzysztof Nowakowski, lekarz weterynarii</p>
    <h2>GODZINY PRZYJĘĆ</h2>
    <table>
      <tr>
        <th>Poniedziałek</th>
        <th>15:00 - 19:00</th>
      </tr>
      <tr>
        <th>Wtorek</th>
        <th>15:00 - 19:00</th>
      </tr>
    </table>
  </aside>
</body>

</html>
