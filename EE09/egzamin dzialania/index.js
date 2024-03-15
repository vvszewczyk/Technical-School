f = (x) => {
    let a = parseInt(document.getElementById("i1").value);
    let b = parseInt(document.getElementById("i2").value);
    let wynik;

    if (isNaN(a) || isNaN(b)) {
        wynik = "Proszę uzupełnić obie liczby!";
    } else if (x === 4 && b === 0) {
        wynik = `Nie wolno dzielić przez 0!`;
    } else {
        switch(x) {
            case 1:
                w = a + b;
                break;
            case 2:
                w = a - b;
                break;
            case 3:
                w = a * b;
                break;
            case 4:
                w = a / b;
                break;
            default:
                wynik = "Nieznana operacja";
        }

        wynik = `Wynik działania wynosi → ${wynik}`;
    }
    document.getElementById("o1").value = wynik;
}
