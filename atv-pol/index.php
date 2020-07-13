<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require 'classes.php';

    $h1 = new Homem();
    $h2 = new Homem();
    $h3 = new Homem();
    $c4 = new Cao(); 
    $c5 = new Cao();
    $c6 = new Cao();
    $g7 = new Gato();
    $g8 = new Gato();
    $g9 = new Gato();
    $h10 = new Homem();

    $arr = [$c4, $g8, $h10, $g9, $h3, $h1, $c5, $h2, $g9, $g7];
    for($i = 0; $i < count($arr); $i++){
        $v = $arr[$i];
        $v->falar();
    }
    
    ?>
</body>
</html>