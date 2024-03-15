<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_1.css">
    <title>Wędkujemy</title>
</head>

<body>
    <header class="Portalwed">
        <h2>Portal dla wędkarzy</h2>
    </header>
    <main>
        <article>
            <h1>Ryby drapieżne naszych wód</h1>
        </article>
        <section>
            <img src="ryba.jpg" alt="Sum" class="ryba">
            <p><a href="kwerendy.txt" class="kwerenda-link">Pobierz kwerendy</a></p>

            <?php
            $baza = new mysqli('localhost', 'root', '', 'bazaryby');
            $sql = "SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
            $wynik = $baza->query($sql);
            while ($wiersz = $wynik->fetch_assoc()) {
                echo "<li>{$wiersz['nazwa']}, występowanie: {$wiersz['wystepowanie']}</li>";
            }
            ?>
        </section>
    </main>

    <footer>
        <h4>Autor: 00000000000</h4>
    </footer>
</body>
</html>
