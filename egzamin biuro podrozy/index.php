<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i urlopy</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0 auto;
        }
        header, footer {
            background-color: rgb(205, 92, 92);
            color: white;
            text-align: center;
            padding: 5px;
        }
        #lewy, #prawy {
            background-color: rgb(250, 235, 215);
            width: 25%;
            float: left;
            padding: 10px;
        }
        #srodkowy {
            justify-content: center;
            background-color: rgb(250, 235, 215);
            width: 50%;
            float: left;
            padding: 10px;
        }
        #dane {
            background-color: rgb(210, 180, 140);
            color: white;
            clear: both;
            padding: 10px;
        }
        h3 {
            text-align: center;
        }
        h3::first-letter {
            font-size: 150%;
        }
        img {
            height: 100px;
            padding: 7px;
        }
        img:hover {
            background-color: rgb(210, 180, 140);
	}
	table {
	width: 100%;
	}
	table, td {
	border: 1px solid black;
	border-collapse: collapse;
	text-align: left;
	padding: 5px;
	}
	</style>
</head>
<body>
	<header>
    	<h1>BIURO PODRÓŻY</h1>
	</header>
	<div id="lewy">
    		<h3>KONTAKT</h3>
    		<a href="mailto:biuro@wycieczki.pl?subject=Napisz do nas!">Napisz do nas</a>
    		<p>Telefon: 123123123</p>
	</div>
<div id="srodkowy">
    <h3>GALERIA</h3>

    <?php
    	$baza = new mysqli('localhost', 'root', '', 'egzamin3');
    	$baza->set_charset('utf8');
    	$zapytanie = "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis ASC";
    	$wynik = $baza->query($zapytanie);
    	while ($row = $wynik->fetch_assoc()) {
        	echo "<img src=\"{$row['nazwaPliku']}\" alt=\"{$row['podpis']}\" style=''>";
    	}
    ?>
</div>
<div id="prawy">
    <h3>PROMOCJE</h3>
    <table>
        <tr>
            <td>Jesień</td>
            <td>Grupa 4+</td>
            <td>Grupa 10+</td>
        </tr>
        <tr>
            <td>5%</td>
            <td>10%</td>
            <td>15%</td>
        </tr>
    </table>
</div>
<div id="dane">
    <h3>LISTA WYCIECZEK</h3>
    <?php
    $zapytanie = "SELECT id, dataWyjazdu, cel, cena FROM `wycieczki` WHERE dostepna = 1";
    $wynik = $baza->query($zapytanie);
    while ($row = $wynik->fetch_assoc()) {
        echo "<p>{$row['id']}. {$row['dataWyjazdu']}, {$row['cel']}, cena: {$row['cena']}</p>";
    }
    $baza->close();
    ?>
</div>
<footer>
    <p>Stronę wykonał: 00000000000</p>
</footer>
</body>
</html>