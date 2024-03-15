<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Malarz</title>
</head>
<body>
<section id="main">
    <section id="baner"><h1><a href="index.html">Koszt farby</a></h1></section>
    <section id="lewy">
        <h3>Mieszamy czy wyceniamy?</h3>
        <a href="mieszamy.html">Mieszamy</a><br>
        <a href="cena.php">Wyceniamy</a>
    </section>
    <section id="prawy">
    <form action="cena.php" method="POST">

        <h3>Obliczanie na podstawie powierzchni zapotrzebowania na farbę</h3>
        Podaj powierzchnię:<input type="number" id="powierzchnia" name="powierzchnia"><br><br>
        <button type="button" onclick="Policz()">Policz JS</button>
        <input type="submit" value="Policz PHP">
        <br><br>
        <span id="output"></span><br>

        <?php
            $m2=@$_POST["powierzchnia"];
            $count=floatval($m2/4);
            $wynik=ceil($count);
            echo "Liczba jednolitych puszek farby potrzebnych do pomalowania wynosi: ".$wynik;
        ?>

    </form>
    </section>
    <footer>
        MALARZ<br>
        Stronę opracował: 00000000000
    </footer>
</section>
    <script src="script.js"></script>
</body>