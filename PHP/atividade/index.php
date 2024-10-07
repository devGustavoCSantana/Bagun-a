<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
        echo "<h1> Lista de Linguagem de Programação </h1>";
        $linguagem = ['PHP', 'JavaScript', 'MySQL'];
        echo'<hr>';
        $x = 0;
        while($x < count($linguagem)) {
            echo"<br>";
            echo $linguagem[$x];
            $x++;
        }   
        
        echo "<h1> Lista de Hobbies </h1>";
        $hobbies = ['Ler Livro', 'Assistir Série', 'Ouvir Música'];
        echo"<hr>";
        for($x = 0; $x < count($hobbies); $x++){
            echo"<br>";
            echo $hobbies[$x];
        }

        echo"<hr>";
        echo "<h1> Lista de profissões de TI </h1>";
        $profissoes = ['Front-End', 'Back-End', 'Mobile'];
        foreach($profissoes as $prof) {
            echo "<br>";
            echo $prof;
        }
    ?>
</body>
</html>