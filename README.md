# Calcula a distancia entre dois pontos

Com base em dois pontos inserido no maps como a figura abaixo:

![alt tag](https://github.com/Fredrumond/distancia-entre-dois-pontos/blob/master/pontos%20do%20maps.png)


Ele ja calcula a distancia entre os pontos retornando: **75,22m** 

![alt tag](https://github.com/Fredrumond/distancia-entre-dois-pontos/blob/master/resultado%20do%20maps.png)

Então com base no artigo encontrando no blog [PASTA1.XLS](http://pasta1xls.blogspot.com.br/2009/05/como-calcular-distancia-entre.html?m=1) passei a formula que chega no resultado para o PHP que você pode conferir [clicando aqui](https://github.com/Fredrumond/distancia-entre-dois-pontos/blob/master/distancia.php).

#Formula
**Obs:** ``$n = 6371`` é o raio da Terra em **quilômetros**, caso você precise trabalhar com a unidade **milhas** o número é **3959** ou precise de qualquer outra unidade de distância é esse número que deverá ser substituído
````
$n = 6371;
$calculaDistancia = $n * (acos(cos(pi()*(90-$p2Lat)/180)*cos((90-$p1Lat)*pi()/180)+sin((90-$p2Lat)*pi()/180)*sin((90-$p1Lat)*pi()/180)*cos(($p1Lon-$p2Lon)*pi()/180)));
