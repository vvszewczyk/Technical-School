<!DOCTYPE html>

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

<body>
    <?php
    $lowisko = $_POST["lowisko"];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $baza = new mysqli('localhost', 'root', '', 'wedkarstwo');
    $zap = "INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '2', '$lowisko', '$data', '$sedzia')";
    $baza->query($zap);
    $baza->close();
    ?>


</body>

</html>