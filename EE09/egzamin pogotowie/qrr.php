<?php
$zapytanie = "INSERT INTO zgloszenia VALUES (null,$zespol,$dyspozytor,$adres,0,CURRENT_TIME()";
$wynik = $baza->query($zapytanie);

while ($row = $wynik->fetch_assoc()) {
    $zespol = $_POST["zespol"];
    $dyspozytor = $_POST["dyspozytor"];
    $adres = $_POST["adres"] . '"';
}

mysqli_close($baza);
header("Location: /index.php");
exit();
?>