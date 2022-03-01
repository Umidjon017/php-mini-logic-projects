<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uyga vazifa | Matematik operatorlar</title>
        <!--  Bootstrap CSS link  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../index.css">
    </head>
    <body class="body">

    <?php
    $li1 = 'Bosh sahifa';
    $li2 = 'menu 1';
    $li3 = 'menu 2';
    $li4 = 'menu 3';
    $li5 = 'menu 4';
    ?>

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
                            <li><a class="dropdown-divider" href="#">1-Matematik amallar</a></li>
                            <li><a class="dropdown-item" href="uyga_vazifa_1.php">Uyga vazifa-1</a></li>
                            <li><a class="dropdown-divider" href="#">2-PHP shart amallar</a></li>
                            <li><a class="dropdown-item" href="../dars_2/uyga_vazifa_2.php">Uyga vazifa-2</a></li>
                            <li><a class="dropdown-divider" href="#">3-PHP arraylar</a></li>
                            <li><a class="dropdown-item" href="../dars_3/uyga_vazifa_3.php">Uyga vazifa-3</a></li>
                            <li><a class="dropdown-divider" href="#">4-GET, POST, REQUEST</a></li>
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

    <!-- Card -->
    <div class="container-fluid">
        <?php

        #region RULES FOR CARD
        $card1 = 'Misol 1';
        $card11 = "Qo'shish amali";
        $card12 = 15;
        $card13 = "O'n besh + o'n besh = O'ttiz";

        $card2 = 'Misol 2';
        $card21 = 'Ayrish amali';
        $card22 = 15;
        $card23 = "O'ttiz - o'n besh = O'n besh";

        $card3 = 'Misol 3';
        $card31 = "Ko'paytirish amali";
        $card32 = 15;
        $card33 = "Ikki yuz yigirma besh";

        $card4 = 'Misol 4';
        $card41 = "Bo'lish amali";
        $card42 = 15;
        $card43 = "O'n besh / o'n besh = 1";

        $card5 = 'Misol 5';
        $card51 = "Katta sonni ifodalash";
        $card52 = 15;
        $card53 = 25;
        $card54 = 35;
        $card55 = "a < b && b < c";

        $card6 = 'Misol 6';
        $card61 = "Kichik sonni ifodalash";
        $card62 = 15;
        $card63 = 25;
        $card64 = 35;
        $card65 = "a > b || b < c";

        $card7 = 'Misol 7';
        $card71 = "Kvadratning peremetri aniqlansin";
        $card72 = "P = 4 * tomon -> 5";
        $card73 = 5;

        $card8 = 'Misol 8';
        $card81 = "Kvadratning yuzi aniqlansin";
        $card82 = "S = a * a -> 5";
        $card83 = 5;

        $card9 = 'Misol 9';
        $card91 = "To'g'ri tortburchakning yuzi va perimetri aniqlansin";
        $card92 = "(S = a * b, P = 2 * ( a + b )";
        $card93 = 10;
        $card94 = 5;
        $card95 = null;

        $card101 = 'Misol 10';
        $card102 = "a = 2, a<sup>2</sup>, a<sup>4</sup>, a<sup>8</sup>, a<sup>16</sup>";
        $card103 = 2;

        $cardbt = "To'g'ri";
        $cardbf = "Noto'g'ri";
        #endregion

        ?>


        <section class="bs2">
            <div class="container">
                <h1 class="display-2">Matematik amallar</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card11 . ':'; ?> </h5>
                                <p class="card-text"> <?= '15 + 15 = ?'; ?> <br> <?= $card12 + $card12; ?> </p>
                                <p class="card-text"> <?= $card13; ?> </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card2 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card21 . ':'; ?> </h5>
                                <p class="card-text"> <?= '30 - 15 = ?'; ?> <br> <?= ($card12 * 2) - $card12; ?> </p>
                                <p class="card-text"> <?= $card23; ?> </p>
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
                                <p class="card-text"> <?= '15 * 15 = ?'; ?> <br> <?= pow($card12, 2); ?> </p>
                                <p class="card-text"> <?= $card33; ?> </p>
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
                                <p class="card-text"> <?= '15 / 15 = ?'; ?> <br> <?= pow($card12, 0); ?> </p>
                                <p class="card-text"> <?= $card43; ?> </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card5 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card51 . ':'; ?> </h5>
                                <p class="card-text"> <?= "a = $card52, b = $card53, c = $card54"; ?> <br> <?= $card52 < $card53 && $card53 < $card54; ?> </p>
                                <p class="card-text"> <?= $card55; ?> </p>
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
                                <p class="card-text"> <?= "a = $card62, b = $card63, c = $card64"; ?> <br> <?= $card62 > $card63 || $card63 < $card64; ?> </p>
                                <p class="card-text"> <?= $card65; ?> </p>
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
                                <p class="card-text"> <?= $card72; ?> </p>
                                <?php $card73 = $card73 * 4;?>
                                <p class="card-text"> <?= "P = 4 * 5 = $card73"; ?> <br></p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card8 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card81 . ':'; ?> </h5> <br>
                                <p class="card-text"> <?= $card82; ?> </p>
                                <?php $card83 = $card83 * 5;?>
                                <p class="card-text"> <?= "S = 5 * 5 = $card83"; ?> <br></p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card9 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card91 . ':'; ?> </h5>
                                <p class="card-text"> <?= $card92; ?> </p>
                                <?php $card95 = $card93 * $card94;?>
                                <p class="card-text"> <?= "S=10*5= $card95, P=2*(10+5)= 30"; ?> <br></p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card101 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card102 . ':'; ?> </h5> <br>
                                <?php $card102 = pow($card103, 2);?>
                                <p class="card-text d-inline-block">
                                    <?= "2<sup>2</sup> = $card103";?>,
                                </p>
                                <?php $card103 = pow($card103, 2);?>
                                <p class="card-text d-inline-block">
                                    <?= "2<sup>4</sup> = $card53";?>,
                                </p>
                                <?php $card103 = pow($card103, 2);?>
                                <p class="card-text d-inline-block">
                                    <?= "2<sup>8</sup> = $card103";?>,
                                </p>
                                <?php $card103 = pow($card103, 2);?>
                                <p class="card-text">
                                    <?= "2<sup>16</sup> = $card103";?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /Card -->


    <!--  Bootstrap JS link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>