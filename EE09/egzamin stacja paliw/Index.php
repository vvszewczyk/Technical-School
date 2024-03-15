<!doctype html>
<html lang="pl">
<head>
    <title>Nasza stacja paliw</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="main">
        <header>
            <h2>Witamy na stacji paliw!</h2>
        </header>

        <div id="content">
            <aside>
                <a href="Index.php"> <img src="home.png" alt="Strona główna"></a>
                <a href="kalkulacja.html"><img src="znak.png" alt="Kalkulacja"></a>
            </aside>
            <div id="right">
                <img src="samochod.png" alt="grafika: samochod">
            </div>
        </div>

        <section id="calculator">
            <form action="Index.php" method="POST">
                <h2>Oblicz ile litrów musisz zatankować</h2>
                <label for="dystans">dystans do przejechania w km:</label>
                <input type="number" id="dystans" name="dystans"><br>
                <label for="spalanie">spalanie samochodu w l/100km:</label>
                <input type="number" id="spalanie" name="spalanie"><br>
                <button type="button" onclick="Oblicz()">OBLICZ JS</button>
                <input type="submit" value="OBLICZ PHP"><br>
                <span id="output"></span>
                <?php
                if(isset($_POST['dystans']) && isset($_POST['spalanie'])) {
                    $km = $_POST['dystans'];
                    $paliwo = $_POST['spalanie'];
                    $wynik = ($km / 100) * $paliwo;
                    echo "<br>Potrzebujesz: ".$wynik." litrów paliwa";
                }
                ?>
            </form>
        </section>

        <footer>
            <div>
                <a href="kwerendy.txt">Tu pobierzesz zapytania</a>
            </div>
            <div>
                Stronę opracował: 0000000000
            </div>
        </footer>
    </main>
    <script src="script.js"></script>
</body>
</html>
