function Oblicz()
{
var km=dystans.value;
var fuel=spalanie.value;
var wynik=(km/100)*fuel;

output.innerHTML="Potrzebujesz: "+ wynik +" litrów paliwa";
}