<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> 
    <title>Odloty samolotów</title>
</head>

<body>
    <div class="s1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div class="s2"><img src="logo.png" alt="logotyp"></div>
    <div class="main">
        <table>
            <tr>
                <th>LP.</th>
                <th>NUMER REJSU</th>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>STATUS</th>
            </tr>
            <?php
            require('connect.php');

            $qrr = mysqli_query($conn, 'SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC');

            while ($V = mysqli_fetch_assoc($qrr)) {
                echo "<tr>";
                echo "<td>".$V['id']."</td>";
                echo "<td>".$V['nr_rejsu']."</td>";
                echo "<td>".$V['czas']."</td>";
                echo "<td>".$V['kierunek']."</td>";
                echo "<td>".$V['status_lotu']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="pobierz">
        <a href="samolot.png">Pobierz obraz</a>
    </div>
    <div id="cookie">
        <p>
            <?php
            include ('cookie.php');
            ?>
        </p>
    </div>
    <footer>Autor: 00000000000</footer>
</body>

</html>
