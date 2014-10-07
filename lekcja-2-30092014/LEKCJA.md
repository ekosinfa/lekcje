Hej,

Tradycyjnie do soboty wieczorem, robicie dla siebie nie dla mnie, jak się spóźnicie nie obrażę się.
(Tylko wyślijcie maila jak skończycie bo nie sprawdzam tego codziennie)

Do wszystkich:

1. Mam problem z czytaniem waszego kodu, chodzi o formatowanie. Pogadamy sobie o tym na najbliższej lekcji, w międzyczasie proszę używajcie:

http://beta.phpformatter.com/

Wklejamy, klikamy format, kopiujemy sformatowane.

2. Zastosujcie powyższe na zadaniu z modulo.

3. Pogadamy jeszcze o elseif, przypomnienie dla mnie.
Albo sami czytajcie:
http://php.net/manual/en/control-structures.elseif.php

4. Jak ktos ma ochotę trochę poczytać o formatowaniu, poniżej linki do dwóch standardów;

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md

Po angielsku, i tak wam to powiem na lekcji, dla chętnych

5. Dobra, zadanie właściwe:

Program liczący średnią ważoną, a następnie wyświetlający ocenę końcową.

Liczymy średnią ważoną.
Tablica ze średnimi:

https://github.com/ekosinfa/lekcja-2-30092014/blob/master/oceny.php

Średnią ważoną pewnie znacie, a jak nie to tu jest przypomnienie:

http://www.math.edu.pl/srednia-wazona

i zaokrąglamy ją do 2 miejsc po przecinku funkcją round:

http://php.net/manual/en/


Ocenę końcową wyświetlamy według następującej zasady:

Jeżeli końcówka jest większa lub równa .61, np. 4.61 to dajemy ocenę wyżej, tzn np. 5.
Jeżeli jest poniżej to zostawiamy jak jest, tzn za 3.25 dajemy 3.

Jak będziecie mieć pytania to pytajcie, mogłem coś pominąć.


Kuba: Te else w twoim kodzie modulo są tam niepotrzebne, wywal je i zobacz, że kod nadal będzie działał prawidłowo.

Pozdrawiam,
Marcin
