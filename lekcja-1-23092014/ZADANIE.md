###Zadanie 1 - 99 butelek soku jabłkowego (ehh, demoralizacja)


Rozwiązanie zapisujemy w pliku butelki_sok.php w swoim repozytorium.

Napisz program który wydrukuje tekst poniższej piosenki używając petli while lub for i instrukcji warunkowych:
```
99 butelek soku jabłkowego na ścianie, 99 butelek soku.
Weż jedną i podaj dalej, 98 butelek soku na ścianie.

98 butelek soku jabłkowego na ścianie, 98 butelek soku.
Weż jedną i podaj dalej, 97 butelek soku na ścianie.

97 butelek soku jabłkowego naa ścianie, 97 butelek soku.
Weż jedną i podaj dalej, 96 butelek soku na ścianie.

[...](Tak samo aż do 1 butelki, pomijamy odmianę, może być "3 butelek")

1 butelka soku jabłkowego na ścianie, 1 butelka soku.
Weż jedną i podaj dalej, nie ma więcej butelek soku na ścianie.

Nie ma więcej butelek soku na ścianie, nie ma więcej butelek soku. 
Idź do sklepu i kup więcej, 99 butelek soku na scianie.
```

Dodatkowe informacje:

1. Składnia pętli for:
```
    <?php
    for(wykonywana na początku instrukcja, ustawienie zmiennej na jakąś liczbę;warunek zakończenia;instrukcja wykonywana po każdym przejściu pętli){
        //Tu w środku kod do wykonania
    }
    ?>
```
2. Składnia pętli while:
```
    <?php
    while(warunek zakończenia){
        //Tu w środku kod do wykonania
    }
    ?>
```

3. W cudzysłowach w wartościach zmiennych można uzywać polskich znaków (skopiujcie po prostu powyższy tekst)

4. Do zrobienia "entera" uzywamy 
     <br>
5. Można uzywać także \r\n jako znaku entera (w ideone). Jest to "symbol" z linii komend, a <br> jest interpretowane przez przeglądarkę.

    
###Zadanie 2 - Wstaw operatory

Wstaw odpowiednie operatory, aby wyrażenia były prawdziwe (Zastąp [operator]).
Dwa ostatnie przykłady mają dwa różne operatory.
Rozwiązanie zapisujemy w pliku operatory.txt w swoim repozytorium.

Listy operatorów:

http://php.net/manual/pl/language.operators.comparison.php
http://php.net/manual/pl/language.operators.logical.php

1. true to 1
2. false to 0

Wyrażenie 1:
```
2 [operator] 2

2 [operator] 5

true [operator] true

false [operator] true

false [operator] true
```
###Zadanie 3 - Napisz program sumujący elementy tablicy (pętla foreach)

Rozwiązanie zapisujemy w pliku suma_foreach.php w swoim repozytorium.

Składnia foreach:
http://pl1.php.net/manual/en/control-structures.foreach.php

1. Dostarczona tablica(kopiujemy do kodu)
```
    $liczby = array(
        '2',
        '3',
        '45',
        '6',
        '8',
        '9',
        '2',
        '5',
        '8',
        '2',
        '6',
        '1'
    );
```
2. Wynik musi zostać zapisany w zmiennej `$wynik` i wyświetlony.

