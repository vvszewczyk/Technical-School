<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Pogotowie ratunkowe</title>
</head>

<body>
    <?php require('connect.php') ?>
    <div id="zdjecie">
        <img src="pogot.png" alt="pogotowie">
    </div>
    <div id="baner2">
        <h2>Pogotowie Ratunkowe</h2>
    </div>
    <div id="baner3">
        <p>Kontakt:<br> 123 123 123</p>
    </div>
    <div class="main">
        <h2>Dodaj nowe zgłoszenie</h2>
        <form method="post" action="qrr.php">
            <?php include('qrr.php') ?>
            Numer zespołu ratowniczego:
            <input type="number" name="zespol" name="zespol">
            Numer dyspozytora:
            <input type="number" name="dyspozytor" id="dyspozytor">
            Adres:
            <input type="text" size="100" name="adres" id="adres">
            <input type="reset" value="WYCZYŚĆ">
            <input type="submit" value="ZGŁOŚ">
        </form>
    </div>
    <div id="foo">
        <h4>Numery alarmowe</h4>
        <ul>
            <li>999</li>
            <li>112</li>
        </ul>
    </div>
    <div id="foot">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="footer">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>

</html>