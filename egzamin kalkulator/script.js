function Dodawanie()
{
    var liczba1= liczbaA.value;
    liczba1=parseFloat(liczba1);
    var liczba2= liczbaB.value;
    liczba2=parseFloat(liczba2);
    var wynikd= liczba1+liczba2;
    
    output.innerHTML= "Wynik: "+wynikd;
}
function Odejmowanie()
{
    var liczba1= liczbaA.value;
    var liczba2= liczbaB.value;
    var wynikd= liczba1-liczba2;
    output.innerHTML= "Wynik: "+wynikd;
}
function Mnozenie()
{
    var liczba1= liczbaA.value;
    var liczba2= liczbaB.value;
    var wynikd= liczba1*liczba2;
    output.innerHTML= "Wynik: "+wynikd;
}
function Dzielenie()
{
    var liczba1= liczbaA.value;
    var liczba2= liczbaB.value;
    var wynikd= liczba1/liczba2;
    output.innerHTML= "Wynik: "+wynikd;
}
function Potega()
{
    var liczba1= liczbaA.value;
    var liczba2= liczbaB.value;
    var wynikd=Math.pow(liczba1, liczba2);
    output.innerHTML= "Wynik: "+wynikd;
}