<?php

    $son = 20000005.6;

    function nf($value, $decimals = 2) {
        return number_format($value, $decimals, '.', ',');
    }

    echo nf($son) . '<br>' . '<br>';

    $son25 = 25;
    echo sqrt($son25) . '<br>' . '<br>'; // Ildiz olib beradi.

    $son256 = 25.6;
    echo round($son256) . '<br>' . '<br>'; // Sonni yaxlitlab beradi,

    $son251 = 25.1;
    echo ceil($son251) . '<br>' . '<br>'; // Sonni yaxlitlaganda yuqorisini oladi.

    $son252 = 25.2;
    echo floor($son252) . '<br>' . '<br>'; // Sonni yaxlitlaganda pastini oladi,

    $son25 = 25;
    echo pow($son25, 2) . '<br>' . '<br>'; // Bunda sonni darajaga ko'tarib beradi.

    $son25 = 25;
    echo pow($son25, 1 / 2) . '<br>' . '<br>'; // Bunda sonni ildizga olib beradi.

    echo random_int(0, 100) . '<br>' . '<br>';

    echo random_bytes($son25) . '<br>' . '<br>';

    $son1 = 10;
    $son1++;
    $son1++;
    $son1+= 2;
    echo $son1 . '<br>' . '<br>';
    $son1-= 2;
    echo $son1 . '<br>' . '<br>';
    echo ++$son1 . '<br>' . '<br>';

?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <div class="container-fluid">
        <a href="dars_1/uyga_vazifa_1.php" class="btn btn-primary">Uyga vazifa 1</a>
        |
        <a href="dars_2/uyga_vazifa_2.php" class="btn btn-primary">Uyga vazifa 2</a>
        |
        <a href="dars_3/uyga_vazifa_3.php" class="btn btn-primary">Uyga vazifa 3</a>
        |
        <a href="dars_4/uyga_vazifa_4.php" class="btn btn-primary">Uyga vazifa 4</a>
        |
        <a href="dars_5/uyga_vazifa_5.php" class="btn btn-primary">Uyga vazifa 5</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
