<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div id="baner">
        <h2 class="styl">Światowe rozgrywki piłkarskie</h2>
        <img src="boisko.png" alt="boisko">
    </div>

    <div>
        <?php
        require('connect.php');
        $zap = $baza->prepare("SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'");
        $zap->execute();
        $wynik = $zap->get_result();
        while ($row = $wynik->fetch_assoc()) {
            echo "<div class=\"match\">";
            echo "<h3>{$row['zespol1']} - {$row['zespol2']}</h3>";
            echo "<h4>{$row['wynik']}</h4>";
            echo "<p>w dniu: {$row['data_rozgrywki']}</p>";
            echo "</div>";
        }
        ?>
    </div>

    <div id="main"></div>

    <div id="left">
        <h2>Reprezentacja Polski</h2>
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy)</p>
        <form method="post" action="index.php">
            <input type="number" name="pozycja" min="1" max="4">
            <button type="submit">Sprawdź</button>
        </form>
        <ul>
            <?php
            if (isset($_POST['pozycja']) && $_POST['pozycja'] != "") {
                $zap = $baza->prepare("SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = ?");
                $zap->bind_param("i", $_POST['pozycja']);
                $zap->execute();
                $result = $zap->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo "<li>{$row['imie']} {$row['nazwisko']}</li>";
                }
                $baza->close();
            }
            ?>
        </ul>
    </div>

    <div id="footer">
        <img src="piłka.png" alt="piłkarz">
        <p>Autor: 00000000000</p>
    </div>
</body>

</html>
