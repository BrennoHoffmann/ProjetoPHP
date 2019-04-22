<?php
$nome = "Brenno";
$idade = 19;
$array = ["Brenno", "Hoffmann"];
$array1 = ["nome"=>"Brenno"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo $nome;
    echo $array1["nome"];
    echo var_dump($array);
    ?>
</body>
</html>