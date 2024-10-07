<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas</title>
</head>
<body>
    <?php
    $a = 1; // 1 (verdadeiro) | 0 (falso)
    if($a == 1) {
        echo "O número é 1";
    } elseif($a == 2) {
        echo"O número é 2";
    } elseif($a == 3) {
        echo"O número é 3";
    } else {
        echo "É maior que 3 ou menor que 1";
    }
 //Tanto faz você usar o while com também pode usar o For tanto faz você decide o que quer usar depende do que você quer.
    echo "<h1> Estrutura de Repetição</h1>";
    echo "Repetição com While";
    while($a <= 10){
        echo"<br>Número: $a";
        $a++; // $a = $a + 1 ou $a += 1 os dois ~sao iguais o mesmo resultado
    }


    //$n = 0;
    echo "<h1>Repetição com For</h1>"; // tabuada
    for($n = 2; $n <= 10; $n++) {
        echo "<h3> Tabuada do $n</h3>";
        for ($i = 0; $i <= 10; $i++) {
        echo "<br>$n * $i = ".($n*$i);
        }
    }

    $carros = ['ka', 'Prisma', 'Corsa', 'Opala', 'Fusca'];// 0 até 4
    echo '<hr>';
    $x = 0;
    while($x < count($carros)){
        echo "<br>";
        echo $carros[$x];
        $x++;
    }

    echo "<hr>";
    for($x = 0; $x < count($carros); $x++){ //count significa que ele tá contando
        echo"<br>";
        echo $carros[$x];
    }

    echo"<hr>";
    foreach($carros as $car) { //para cada o foreach significa já os as significa como
        echo "<br>";
        echo $car;
    }

   // echo"<br>".$carros[1];
    ?>
</body>
</html>