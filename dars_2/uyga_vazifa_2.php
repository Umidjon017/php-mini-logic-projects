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
                            <li><a class="dropdown-divider" href="#">1-Matematik amallar</a></li>
                            <li><a class="dropdown-item" href="../dars_1/uyga_vazifa_1.php">Uyga vazifa-1</a></li>
                            <li><a class="dropdown-divider" href="#">2-PHP shart amallar</a></li>
                            <li><a class="dropdown-item" href="uyga_vazifa_2.php">Uyga vazifa-2</a></li>
                            <li><a class="dropdown-divider" href="#">3-PHP arraylar</a></li>
                            <li><a class="dropdown-item" href="../dars_3/uyga_vazifa_3.php">Uyga vazifa-3</a></li>
                            <li><a class="dropdown-divider" href="#">4-GET, POST, REQUEST</a></li>
                            <li><a class="dropdown-item" href="../dars_4/uyga_vazifa_4.php">Uyga vazifa-4</a></li>
                            <li><a class="dropdown-divider" href="#">5-SERVER requests</a></li>
                            <li><a class="dropdown-item" href="../dars_5/uyga_vazifa_5.php">Uyga vazifa-5</a></li>
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
        $card11 = "Oy raqamlari va nomi";
        $card12 = 3;

        $card2 = 'Misol 2';
        $card21 = "Katta va kichigini topuvchi";
        $card22 = 50;
        $card23 = 40;
        $card24 = 10;
        $card25 = "a = $card22, b = $card23, c = $card24";

        $card3 = 'Misol 3';
        $card31 = "Manfiy/musbatini topuvchi";
        $card32 = 10;
        $card33 = -5;
        $card34 = 1;
        $card35 = "a = $card32, b = $card33, c = $card34";

        $card4 = 'Misol 4';
        $card41 = "Tel nomer kodi -> Companiya?";
        $card42 = 33;

        $card5 = 'Misol 5';
        $card51 = "'a' - soni musbat/manfiymi?";
        $card52 = 10;
        $card53 = "a = $card52";

        $card6 = 'Misol 6';
        $card61 = "'a' - sonini 'b' marta chiqarish";
        $card62 = 10;
        $card63 = 3;
        $card64 = "a = $card52, b = $card63";

        $card7 = 'Misol 7';
        $card71 = "Maxsulot narxlari";
        $card72 = 1;
        $card73 = 1000;
        $card74 = 3;
        $card75 = "1 kg konfet = $card73 so'm";

        $card8 = 'Misol 8';
        $card81 = "Maxsulot narxlari";
        $card82 = 1;
        $card83 = 1000;
        $card84 = 0.3;
        $card85 = "1 kg konfet = $card73 so'm";

        $card9 = 'Misol 9';
        $card91 = "Karra jadvali";
        $card92 = 1;
        $card93 = 5;
        $card94 = 10;
        $card95 = "$card93 - karra-karra";

        $card10 = 'Misol 10';
        $card101 = "Juft va toq sonlar";
        $card102 = 1;
        $card103 = 11;

        $card1111 = 'Misol 11';
        $card111 = "Heading taglar";
        $card112 = 6;
        $card113 = 1;

        $card121 = 'Misol 12';
        $card122 = "Funcitons";

        $cardbt = "To'g'ri";
        $cardbf = "Noto'g'ri";
        #endregion
        ?>
        <section class="bs2">
            <div class="container">
                <h1 class="display-2">PHP shart amallar</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card11 . ':'; ?> </h5>
                                <p class="card-text"> <?= "$card12 - oy qaysi faslga tegishli?"; ?> <br>
                                    <?php if ($card12 == 1 || $card12 == 2 || $card12 == 12) {
                                        echo "$card12 - oy Qish oyi!";
                                    } elseif ($card12 == 3 || $card12 == 4 || $card12 == 5) {
                                        echo "$card12 - oy Bahor oyi!";
                                    } elseif ($card12 == 6 || $card12 == 7 || $card12 == 8) {
                                        echo "$card12 - oy Yoz oyi!";
                                    } elseif ($card12 == 9 || $card12 == 10 || $card12 == 11) {
                                        echo "$card12 - oy Kuz oyi!";
                                    } ?>
                                </p>
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
                                <p class="card-text"> <?= $card25; ?> </p>
                                <p class="card-text"> <?= "Qaysi biri eng katta/kichik son?"; ?> <br>
                                    <?php if ($card22 < $card23 && $card22 < $card24) {
                                        echo "'a' - eng kichik son";
                                    } elseif ($card23 < $card22 && $card23 < $card24) {
                                        echo "'b' - eng kichik son";
                                    } elseif ($card24 < $card22 && $card24 < $card23) {
                                        echo "'c' - eng kichik son";
                                    } elseif ($card22 > $card23 && $card22 > $card24) {
                                        echo "'a' - eng katta son";
                                    } elseif ($card23 > $card22 && $card23 > $card24) {
                                        echo "'b' - eng katta son";
                                    } elseif ($card24 > $card22 && $card24 > $card23) {
                                        echo "'c' - eng katta son";
                                    }  ?>
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
                                <p class="card-text"> <?= $card35; ?> </p>
                                <p class="card-text"> <?= "Nechta musbat/manfiy sonlar bor?"; ?> <br>
                                    <?php if ($card32 < 0 && $card33 < 0 && $card34 <0) {
                                        echo "manfiy sonlar: 'a', 'b', 'c'";
                                    } elseif ($card32 > 0 && $card33 > 0 && $card34 > 0) {
                                        echo "musbat sonlar: 'a', 'b', 'c'";
                                    } elseif ($card32 < 0 && $card33 > 0 && $card34 > 0) {
                                        echo "musbat sonlar: 'b', 'c' <br> manfiy son: 'a'";
                                    } elseif ($card32 > 0 && $card33 < 0 && $card34 > 0) {
                                        echo "musbat sonlar: 'a', 'c' <br> manfiy son: 'b'";
                                    } elseif ($card32 > 0 && $card33 > 0 && $card34 < 0) {
                                        echo "musbat sonlar: 'a', 'b' <br> manfiy son: 'c'";
                                    } elseif ($card32 > 0 && $card33 < 0 && $card34 < 0) {
                                        echo "musbat son: 'a' <br> manfiy sonlar: 'b', 'c'";
                                    } elseif ($card32 < 0 && $card33 > 0 && $card34 < 0) {
                                        echo "musbat son: 'b' <br> manfiy sonlar: 'a', 'c'";
                                    } elseif ($card32 < 0 && $card33 < 0 && $card34 > 0) {
                                        echo "musbat son: 'c' <br> manfiy sonlar: 'a', 'b'";
                                    } ?>
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
                                <p class="card-text"> <?= "$card42 kodi - Qaysi companiyaga tegishli?"; ?> <br>
                                    <?php switch ($card42) {
                                        case $card42 == 90 || $card42 == 91:
                                            echo "$card42 kodi - Beelinega tegishli!";
                                            break;
                                        case $card42 == 93 || $card42 == 94 || $card42 == 55:
                                            echo "$card42 kodi - Ucellga tegishli!";
                                            break;
                                        case $card42 == 95 || $card42 == 99:
                                            echo "$card42 kodi - Uzmobilega tegishli!";
                                            break;
                                        case $card42 == 97 || $card42 == 33:
                                            echo "$card42 kodi - USMga tegishli!";
                                            break;
                                        default:
                                            echo "$card42 - bunday kod bilan boshlanuvchi kompaniya mavjud emas!";
                                            break;
                                    } ?>
                                </p>

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
                                <p class="card-text"> <?= "$card53"; ?> <br>
                                    <?php if ($card52 % 2 == 1)
                                    {
                                        echo "$card52 - musbat toq son";
                                    } elseif ($card52 % 2 == 0 && $card52 != 0)
                                    {
                                        echo "$card52 - musbat juft son";
                                    } elseif ($card52 == 0) {
                                        echo "$card52 - aniqlanmadi";
                                    } ?>
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
                                <p class="card-text"> <?= "$card64"; ?> <br>
                                    <?php for ($i = 1; $i <= $card63; $i++) {
                                        echo $i . ' - '. "$card62; <br>";
                                    } ?>
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
                                <p class="card-text"> <?= "$card75"; ?> <br>
                                    <?php for ($i = 1; $i <= $card74; $i++) {
                                        echo $i . ' - '. $card73 * $i . " so'm <br>";
                                    } ?>
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
                                <p class="card-text"> <?= "$card85"; ?> <br>
                                    <?php for ($i = 0.1; $i <= $card84; $i+=0.1) {
                                        echo $i.' - '.$card83 * $i ."<br>";
                                    } ?>
                                </p>

                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 cal-9">
                        <div class="card" style="width: 16rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card9 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card91 . ':'; ?> </h5>
                                <p class="card-text"> <?= "$card95"; ?> <br>
                                    <?php
                                    $nat = 0;
                                    for ($i = $card92; $i <= $card94; $i++) {
                                        $nat = $card93 * $i;
                                        echo $card93 . ' x ' . $i . ' = ' . $nat . "<br>";
                                    }
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 cal-10">
                        <div class="card" style="width: 16rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card10 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card101 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    for ($i = $card102; $i <= $card103; $i++) {
                                        if ($i % 2 == 1)
                                        {
                                            echo $i . " - soni toq son <br>";
                                        }
                                        elseif ($i % 2 == 0)
                                        {
                                            echo $i . " - soni juft son <br>";
                                        }
                                    }
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card" style="width: 30rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1111 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card111 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    for ($i = 6; $i >= 1; $i--)
                                    {
                                        echo "<h$i> - Salom PHP. <h$i>";
                                    }
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 cal-12">
                        <div class="card" style="width: 16rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card121 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card122 . ':'; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    function daraja(int $n, $d)
                                    {
                                        if (gettype($n) == "string" || gettype($d) == "string")
                                        {
                                            return "String turidagi ma'lumotlar mavjud";
                                        }
                                        else {
                                            return pow($n, $d);
                                        }
                                    }
                                    echo daraja(3, 3);
                                    ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
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