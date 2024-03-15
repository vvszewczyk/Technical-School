<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="wzor.png" alt="wzór BMI">
        </div>
        <div id="baner">
            <h1>Oblicz swoje BMI</h1>
        </div>
    </header>
    <main>
        <section id="tabelaBMI">
            <table>
                <thead>
                    <tr>
                        <th>Interpretacja BMI</th>
                        <th>Wartość minimalna</th>
                        <th>Wartość maksymalna</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db = new mysqli('localhost', 'root', '', 'egzamin');
                        $query = $db->prepare("SELECT informacja, wart_min, wart_max FROM bmi");
                        $query->execute();
                        $result = $query->get_result();
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>{$row['informacja']}</td><td>{$row['wart_min']}</td><td>{$row['wart_max']}</td></tr>";
                        }
                        $db->close();
                    ?>
                </tbody>
            </table>
        </section>
        <section id="obliczBMI">
            <div id="lewy">
                <h2>Podaj wagę i wzrost</h2>
                <form action="bmi.php" method="post">
                    <label for="waga">Waga:</label>
                    <input type="number" id="waga" name="waga" min="1"><br>
                    <label for="wzrost">Wzrost w cm:</label>
                    <input type="number" id="wzrost" name="wzrost" min="1"><br>
                    <button type="submit">Oblicz i zapisz wynik</button>
                </form>
                <?php
                    if(isset($_POST['waga'], $_POST['wzrost'])) {
                        $waga = $_POST['waga'];
                        $wzrost = $_POST['wzrost'];
                        $bmi = $waga / pow($wzrost / 100, 2);
                        echo "Twoja waga: $waga kg; Twój wzrost: $wzrost cm<br>BMI wynosi: " . number_format($bmi, 2);

                        $bmi_id = ($bmi <= 18) ? 1 : (($bmi > 25) ? (($bmi <= 30) ? 3 : 4) : 2);
                        $dataPomiaru = date("Y-m-d");
                        $db = new mysqli('localhost', 'root', '', 'egzamin');
                        $query = $db->prepare("INSERT INTO wynik (bmi_id, data_pomiaru, wynik) VALUES (?, ?, ?)");
                        $query->bind_param("isd", $bmi_id, $dataPomiaru, $bmi);
                        $query->execute();
                        $db->close();
                    }
                ?>
            </div>
            <div id="prawy">
                <img src="rys1.png" alt="ćwiczenia">
            </div>
        </section>
    </main>
    <footer>
        <p>Autor: 00000000000 <a href="kwerendy.txt">Zobacz kwerendy</a></p>
    </footer>
</body>
</html>
