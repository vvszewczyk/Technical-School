<!DOCTYPE html>

<head>
<title>Przychodnia</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body>
<form action="praca.php" method="POST">
    <section id="main">
<header><h2>Przychodnia</h2><header>

    <section id="first">
<br>Imię:<br> <input type="text" name="imie"><br>
Nazwisko:<br><input type="text" name="nazwisko"><br>
PESEL:<br><input type="number" name="pesel"><br>
Data wizyty:<br><input type="date" name="data"><br>
Godzina:<br><input type="time" name="godzina"><br><br>
</section>

<section id="second">
<br>Rodzaj wizyty:<br>
1) NFZ<input type="radio" name="wizyta" value="NFZ"><br>
2) Prywatna<input type="radio" name="wizyta" value="Prywatna"><br>
3) Abonament<input type="radio" name="wizyta" value="Abonament"><br><br>

Dodaj receptę   <input type="checkbox" name="recepta"><br><br>
                

Wybierz lekarza:
<select name="lekarz">
<option value="Dorian Wróblewski">Dorian Wróblewski</option>
<option value="Antoni Widz">Antoni Widz</option>
<option value="Jan Kornik">Jan Kornik</option>
<option value="Przemysław Wlaź">Przemysław Wlaź</option>
</select><br><br>

<input type="submit" value="Zarejestruj">
<input type="reset" name="reset" value="Wyczyść dane">
</form>


<p>
<?php 
$imie=@$_POST['imie'];
$nazwisko=@$_POST['nazwisko'];
$pesel=@$_POST['pesel'];
$data_w=@$_POST['data'];
$godzina=@$_POST['godzina'];
$rodzaj_w=@$_POST['wizyta'];
$recepta=@$_POST['recepta'];
$lekarz=@$_POST['lekarz'];

 if(empty($recepta))
    {
        $recepta='Nie';
    }
    else
    {
        $recepta='Tak';
    }




if($imie&&$nazwisko&&$pesel&&$data_w&&$godzina)//&&$pesel&&$data_w&&$godzina
{

   



echo "Rejestracja przebiegła pomyślnie.<br> Twoje dane oraz informacje na temat wizyty:<br> "."Imię: "
.$imie."<br>Nazwisko: "
.$nazwisko."<br>Numer PESEL: "
.$pesel."<br>Data wizyty: "
.$data_w."<br>Godzina wizyty: "
.$godzina."<br>Rodzaj wizyty: "
.$rodzaj_w."<br>Zawiera receptę: "
.$recepta."<br>Lekarz: "
.$lekarz;
}
else
{
    echo "Nie podano wystarczającej ilości informacji.";
};



?>
</section>
<footer>Numer kontaktowy: 603454322</footer>
</section>
</body>
<html>