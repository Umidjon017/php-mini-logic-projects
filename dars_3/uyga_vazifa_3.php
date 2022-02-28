<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uyga vazifa | PHP shart amallar</title>
        <!--  Bootstrap CSS link  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../index.css">
    </head>
    <body class="body2">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><h1> <?= 'PHP darslari' ?></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vazifalar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-divider" href="#">1-dars</a></li>
                            <li><a class="dropdown-item" href="../dars_1/uyga_vazifa_1.php">Uyga vazifa-1</a></li>
                            <li><a class="dropdown-divider" href="#">2-dars</a></li>
                            <li><a class="dropdown-item" href="../dars_2/uyga_vazifa_2.php">Uyga vazifa-2</a></li>
                            <li><a class="dropdown-divider" href="#">3-dars</a></li>
                            <li><a class="dropdown-item" href="uyga_vazifa_3.php">Uyga vazifa-3</a></li>
                            <li><a class="dropdown-divider" href="#">4-dars</a></li>
                            <li><a class="dropdown-item" href="../dars_4/uyga_vazifa_4.php">Uyga vazifa-4</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container-fluid">
        <!-- Card -->
        <?php
        $li1 = 'Bosh sahifa';
        $li2 = 'menu 1';
        $li3 = 'menu 2';
        $li4 = 'menu 3';
        $li5 = 'menu 4';

        #region RULES FOR CARD
        $card1 = 'Misol 1';
        $card2 = "Arraylar yig'indisi";
        $card12 = [1, 2, 3, 4, 5];

        $card20 = 'Misol 2';
        $card21 = "Assosiative array";
        $card22 = [
            'name' => 'Umidjon',
            'age' => 22,
            'address' => 'Andijon'
        ];

        $card3 = 'Misol 3';
        $card31 = "Arrayni ichidan 'n' tasini chiqarish";
        $card32 = [1, 2, 3, 4, 5, 6];

        $card4 = 'Misol 4';
        $card41 = "Arrayni juft/toq qiymatlarini chiqarish";
        $card42 = [1, 2, 3, 4, 5, 6, 7, 8];

        $card5 = 'Misol 5';
        $card51 = "Array qiymatlarining yig'indisini topish";
        $card52 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $card6 = 'Misol 6';
        $card61 = "Assosiative arrayni ekranga chiqarish";
        $card62 = [
            'name' => 'Umidjon',
            'age' => '22',
            'address' => 'Andijon',
            'study' => 'University'
        ];

        $card7 = 'Misol 7';
        $card71 = "Arraydan tasodifiy so'zni chiqarish";
        $card72 = [
            '1' => "Kam gapir, ko'p eshit!",
            '2' => "Ko'p gap, eshakka yuk!",
            '3' => "Vatanni sevmoq imondandir!",
            '4' => "Qush inida ko'rganini qiladi!",
            '5' => "Albatta ochiq chehralik ham sadaqadir!",
            '6' => "Amallar niyyatga bog'liqdir!",
            '7' => "Atrofingdagilarni qanchalik o'sishi, sening muvaffaqiyatingni ham belgilaydi!",
            '8' => "So'rab o'rgangan olim, orlanib so'ramagan o'ziga zolim!",
            '9' => "Toma-toma daryo bo'lur!",
            '10' => "Aql yoshdamas, boshda!",
        ];

        $card8 = 'Misol 8';
        $card81 = "Arraydan tasodifiy rasmni chiqarish";
        $card82 = [
            '1' => '../images/1.jpg',
            '2' => '../images/2.jpeg',
            '3' => '../images/3.jpg',
            '4' => '../images/4.jpg',
            '5' => '../images/5.jpg',
            '6' => '../images/6.jpg',
            '7' => '../images/7.jpg',
            '8' => '../images/8.PNG',
            '9' => '../images/9.jpg',
            '10' => '../images/10.jpg',
        ];

        $cardbt = "To'g'ri";
        $cardbf = "Noto'g'ri";
        #endregion
        ?>
        <section class="bs2">
            <div class="container">
                <h1 class="display-2">PHP arraylar</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card2 . ':'; ?> </h5>
                                <p class="card-text"> <?= "Arrayning o'rta arifmetiki?"; ?> <br>
                                    <?php
                                    echo "<pre>";
                                    print_r($card12);
                                    echo "</pre>";
                                    $sum = 0;
                                    for ($i = 0; $i < count($card12); $i++)
                                    {
                                        $sum += $card12[$i];
                                    }
                                    echo $sum / count($card12);
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card6 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card61 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    echo "<pre>";
                                    foreach ($card62 as $key => $val)
                                    {
                                        echo $key .' : '. $val ."<hr>";
                                    }
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card3 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card31 . ':'; ?> </h5>
                                <p class="card-text"> <?= print_r($card32); ?> <br>
                                    <?php
                                    echo "<pre>";
                                    print_r(array_slice($card32, 1, 3));
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card4 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card41 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    echo "<pre>";
                                    for ($i = 0; $i < count($card42); $i++)
                                    {
                                        if ($i % 2 == 0) {
                                            echo "<h6 style='color: blue'>$card42[$i] - Toq sonlar</h6>";
                                        }
                                        elseif ($i % 2 == 1) {
                                            echo "<h6 style='color: black'>$card42[$i] - Juft son</h6>";
                                        }
                                    }
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card5 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card51 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    $sum = 0;
                                    echo "<pre>";
                                    for ($i = 0; $i < count($card52); $i++)
                                    {
                                        $sum += $card52[$i];
                                    }
                                    echo $sum;
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card20 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card21 . ':'; ?> </h5>
                                <p class="card-text"> <?= "Assosiative Array"; ?> <br>
                                    <?php
                                    echo "<pre>";
                                    print_r($card22['address']);
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card7 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card71 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    shuffle($card72);
                                    echo "<pre>";
                                    print_r($card72[0]);
                                    //                                                print_r($card72[random_int(1,10)]);
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card8 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card81 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    echo "<pre>";
                                    echo "<img style='width:250px' src='". $card82[random_int(1,10)] ."'>";
                                    echo "</pre>";
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Card -->
    </div>


    <!--  Bootstrap JS link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>