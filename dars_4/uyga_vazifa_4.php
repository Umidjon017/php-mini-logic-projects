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
                            <li><a class="dropdown-item" href="../dars_2/uyga_vazifa_2.php">Uyga vazifa-2</a></li>
                            <li><a class="dropdown-divider" href="#">3-PHP arraylar</a></li>
                            <li><a class="dropdown-item" href="../dars_3/uyga_vazifa_3.php">Uyga vazifa-3</a></li>
                            <li><a class="dropdown-divider" href="#">4-GET, POST, REQUEST</a></li>
                            <li><a class="dropdown-item" href="uyga_vazifa_4.php">Uyga vazifa-4</a></li>
                            <li><a class="dropdown-divider" href="#">5-SERVER requests</a></li>
                            <li><a class="dropdown-item" href="../dars_5/uyga_vazifa_5.php">Uyga vazifa-5</a></li>
                            <li><a class="dropdown-divider" href="#">6 - PHP Upload files</a></li>
                            <li><a class="dropdown-item" href="../dars_6/uyga_vazifa_6.php">Uyga vazifa-6</a></li>
                            <li><a class="dropdown-divider" href="#">7 - Regular Expressions</a></li>
                            <li><a class="dropdown-item" href="../dars_7/uyga_vazifa_7.php">Uyga vazifa-7</a></li>
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

        $card1 = 'Misol 1';
        $card11 = "USD -> UZS";

        $card2 = 'Misol 2';
        $card21 = "Registration form";

        $card3 = 'Misol 3';
        $card31 = "Addition form <br> The first part <br> <br> (num1 + num2) * (num3 + num4) ";

        $card4 = 'Misol 4';
        $card41 = "Sonlarni arifmetik amallarga solish";

        $card5 = "Misol 5";
        $card51 = "Saytning stillarini sozlang";

        $card6 = "Misol 6";
        $card61 = "Mahsulotlar ro'yxati";
        $card62 = "Kitoblar ro'yxati:";
        $card63 = "Telefonlar ro'yxati:";
        $card64 = "Nechta kitob sotib olmoqchisiz?";
        $card65 = "Nechta telefon sotib olmoqchisiz?";

        $cardbt = "To'g'ri";
        $cardbf = "Noto'g'ri";
        ?>
        <section class="bs2">
            <div class="container">
                <h1 class="display-2">PHP GET, POST, REQUEST</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card11; ?> </h5>
                                <p class="card-text">
                                <form action="uyga_vazifa_4.2.php" method="post">
                                    <input type="number" name="usd" class="form-control">
                                    <input type="submit" name="s1" value="Send" class="btn btn-success mt-2 mb-3"> <br>
                                    <label class="form-label">UZS -> USD</label>
                                    <input type="number" name="uzs" class="form-control">
                                    <input type="submit" name="s2" value="Send" class="btn btn-success mt-2">
                                </form>
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
                                <h5 class="card-subtitle mb-2"> <?= $card21; ?> </h5>
                                <p class="card-text">
                                <form action="uyga_vazifa_4.3.php" method="get">
                                    <input type="text" name="fname" class="form-control mb-3" placeholder="Your name">
                                    <input type="text" name="sname" class="form-control mb-2" placeholder="Your second name">
                                    <label>Your gender: </label> <br>
                                    <input type="radio" name="gender" class="form-check-input" value="male">
                                    <label for="male" class="form-check-label">Male</label> <br>
                                    <input type="radio" name="gender" class="form-check-input" value="female">
                                    <label for="female" class="form-check-label">Female</label>
                                    <input type="text" name="country" class="form-control mt-2 mb-3" placeholder="Your country">
                                    <input type="text" name="village" class="form-control" placeholder="Your village">
                                    <input type="submit" name="s1" value="Send" class="btn btn-success mt-2">
                                </form>
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
                                <h5 class="card-subtitle mb-2"> <?= $card31; ?> </h5>
                                <p class="card-text">
                                <form action="uyga_vazifa_4.4.php" method="get">
                                    <input type="number" name="num1" class="form-control mb-3" placeholder="Your first number">
                                    <input type="number" name="num2" class="form-control" placeholder="Your second number">
                                    <input type="submit" name="s1" value="Submit" class="btn btn-success mt-2">
                                </form>
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
                                <h5 class="card-subtitle mb-2"> <?= $card41; ?> </h5>
                                <p class="card-text">
                                <form action="uyga_vazifa_4.php" method="post">
                                    <input type="number" name="num1" class="form-control mb-3" placeholder="Your first number">
                                    <select name="amallar">
                                        <option value="plus" name="plus">+</option>
                                        <option value="minus" name="minus">-</option>
                                        <option value="multiply" name="multiply">*</option>
                                        <option value="divide" name="divide">/</option>
                                        <?php
                                        $num1 = $_POST['num1'];
                                        $num2 = $_POST['num2'];
                                        $num_plus = $num1 + $num2;
                                        $num_minus = $num1 - $num2;
                                        $num_multiply = $num1 * $num2;
                                        $num_divide = $num1 / $num2;
                                        ?>
                                    </select>
                                    <input type="number" name="num2" class="form-control mt-3" placeholder="Your second number">
                                    <input type="submit" name="s1" value="Resolve" class="btn btn-success mt-2 mb-2"> <br>
                                    <input type="text" name="sum" class="form-control" value="
                                        <?php
                                    function isIsset()
                                    {
                                        return isset($_POST['num1']) && !empty($_POST['num1']) && isset($_POST['num2']) && !empty($_POST['num2']);
                                    }
                                    if (isIsset()) {
                                        if ($_POST['amallar'] == 'plus')
                                        {
                                            echo $num_plus;
                                        }
                                        elseif ($_POST['amallar'] == "minus")
                                        {
                                            echo $num_minus;
                                        }
                                        elseif ($_POST['amallar'] == "multiply")
                                        {
                                            echo $num_multiply;
                                        }
                                        elseif ($_POST['amallar'] == "divide")
                                        {
                                            echo $num_divide;
                                        }
                                    }
                                    ?>
                                    ">
                                </form>
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
                                <h5 class="card-subtitle mb-2"> <?= $card51; ?> </h5>
                                <p class="card-text">
                                <form action="uyga_vazifa_4.5.php" method="post">
                                    <input type="text" name="height" class="form-control mb-3" placeholder="Height of web-page in 'rem'">
                                    <input type="text" name="width" class="form-control mb-3" placeholder="Width of web-page in 'rem'">
                                    <input type="color" name="color" class="form-control mb-3">
                                    <label>Position: </label> <br>
                                    <input type="radio" name="position" class="form-check-input" value="left">
                                    <label class="form-check-label">Left</label>
                                    <input type="radio" name="position" class="form-check-input" value="center">
                                    <label class="form-check-label">Center</label>
                                    <input type="radio" name="position" class="form-check-input" value="right">
                                    <label class="form-check-label">Right</label>
                                    <input type="text" name="title" class="form-control mt-2 mb-3" placeholder="The title of web-page">
                                    <input type="number" name="year" class="form-control mb-3" placeholder="The year of web-page">
                                    <input type="text" name="author" class="form-control" placeholder="The author of web-page">
                                    <input type="submit" name="s1" value="Send" class="btn btn-success mt-2">
                                </form>
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
                                <h5 class="card-subtitle mb-2"> <?= $card61; ?> </h5>
                                <p class="card-text">
                                <div>
                                    <a href="uyga_vazifa_4.php?kitob=rus_tili&kitob2=ingliz_tili&kitob3=ona_tili">Kitoblar ro'yxati</a> <br>
                                    <a href="uyga_vazifa_4.php?telefon=redmi&telefon2=samsung&telefon3=iphone">Telefonlar ro'yxati</a>
                                </div>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                <?php
                #region KITOB
                    if (isset($_GET['kitob'])) : ?>
                    <?php
                    {
                        $kitob_rus_tili = $_GET['kitob'];
                        $kitob_ingliz_tili = $_GET['kitob2'];
                        $kitob_ona_tili = $_GET['kitob3'];
                    }
                    ?>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= "$card62"; ?></h3>
                                <h5 class="card-subtitle mb-2"> </h5>
                                <p class="card-text">
                                <div>
                                    <a href="uyga_vazifa_4.php?kitob=rus_tili&kitob2=ingliz_tili&kitob3=ona_tili&kitob_rus=rus_tili_haqida"> <?= $kitob_rus_tili?></a>
                                    <br>
                                    <a href="uyga_vazifa_4.php?kitob=rus_tili&kitob2=ingliz_tili&kitob3=ona_tili&kitob_ing=ingliz_tili_haqida"> <?= $kitob_ingliz_tili?></a>
                                    <br>
                                    <a href="uyga_vazifa_4.php?kitob=rus_tili&kitob2=ingliz_tili&kitob3=ona_tili&kitob_ona=ona_tili_haqida"> <?= $kitob_ona_tili?></a>
                                </div>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['kitob_rus'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Rus tili kitobi"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card64; ?> </h5>
                                    <p class="card-text">
                                    <div>
                                        <form action="" method="get">
                                            <input type="number" name="book_amount" class="form-control mb-3" placeholder="How many books?">
                                            <input name="book_price" class="form-control mb-3" value="<?= $pri = 25000;?>" readonly>
                                            <input type="submit" name="cal_rus" class="btn btn-success" value="Calculate">
                                        </form>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['kitob_ing'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Ingliz tili kitobi"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card64; ?> </h5>
                                    <p class="card-text">
                                    <div>
                                        <form action="" method="get">
                                            <input type="number" name="book_amount" class="form-control mb-3" placeholder="How many books?">
                                            <input name="book_price" class="form-control mb-3" value="<?= $pri = 35000;?>" readonly>
                                            <input type="submit" name="cal_ing" class="btn btn-success" value="Calculate">
                                        </form>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['kitob_ona'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Ona tili kitobi"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card64; ?> </h5>
                                    <p class="card-text">
                                    <div>
                                        <form action="" method="get">
                                            <input type="number" name="book_amount" class="form-control mb-3" placeholder="How many books?">
                                            <input name="book_price" class="form-control mb-3" value="<?= $pri = 45000;?>" readonly>
                                            <input type="submit" name="cal_ona" class="btn btn-success" value="Calculate">
                                        </form>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['cal_rus'])) :?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Siz harid qilgan (". $_GET['book_amount'] .")ta, rus tili kitob(lar)ining umumiy narxi:"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> </h5>
                                    <p class="card-text">
                                    <div>
                                        <form action="" method="get">
                                            <input type="hidden" name="book_amount" class="form-control mb-3" placeholder="How many books?">
                                            <input type="hidden" name="book_price" class="form-control mb-3" value="<?= $pri = 25000;?>" readonly>
                                            <?php
                                            $book_amount = $_GET['book_amount'];
                                            $book_price = $_GET['book_price'];
                                            $sum = $book_amount * $pri;
                                            ?>
                                            <input name="sum" class="form-control mt-3" value=" <?= $sum; ?>" readonly>
                                            <a href="uyga_vazifa_4.php" class="btn btn-outline-danger mt-2">Rad etish</a>
                                        </form>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['cal_ing'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Siz harid qilgan (". $_GET['book_amount'] .")ta, ingliz tili kitob(lar)ining umumiy narxi:"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> </h5>
                                    <p class="card-text">
                                    <div>
                                        <form action="" method="get">
                                            <input type="hidden" name="book_amount" class="form-control mb-3" placeholder="How many books?">
                                            <input type="hidden" name="book_price" class="form-control mb-3" value="<?= $pri = 35000;?>" readonly>
                                            <?php
                                            $book_amount = $_GET['book_amount'];
                                            $book_price = $_GET['book_price'];
                                            $sum = $book_amount * $pri;
                                            ?>
                                            <input name="sum" class="form-control mt-3" value=" <?= $sum; ?>" readonly>
                                            <a href="uyga_vazifa_4.php" class="btn btn-outline-danger mt-2">Rad etish</a>
                                        </form>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['cal_ona'])) :?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Siz harid qilgan (". $_GET['book_amount'] .")ta, ona tili kitob(lar)ining umumiy narxi:"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> </h5>
                                    <p class="card-text">
                                    <div>
                                        <form action="" method="get">
                                            <input type="hidden" name="book_amount" class="form-control mb-3" placeholder="How many books?">
                                            <input type="hidden" name="book_price" class="form-control mb-3" value="<?= $pri = 45000;?>" readonly>
                                            <?php
                                            $book_amount = $_GET['book_amount'];
                                            $book_price = $_GET['book_price'];
                                            $sum = $book_amount * $pri;
                                            ?>
                                            <input name="sum" class="form-control mt-3" value=" <?= $sum; ?>" readonly>
                                            <a href="uyga_vazifa_4.php" class="btn btn-outline-danger mt-2">Rad etish</a>
                                        </form>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                    #endregion
                ?>

                <?php
                #region TELEFON
                    if (isset($_GET['telefon'])): ?>
                        <?php
                        $telefon_redmi = $_GET['telefon'];
                        $telefon_samsung = $_GET['telefon2'];
                        $telefon_iphone = $_GET['telefon3'];
                        ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= $card63; ?></h3>
                                    <p class="card-text">
                                    <div>
                                        <a href="uyga_vazifa_4.php?telefon=redmi&telefon2=samsung&telefon3=iphone&redmi=redmi_haqida"> <?= $telefon_redmi ?> </a>
                                        <br>
                                        <a href="uyga_vazifa_4.php?telefon=redmi&telefon2=samsung&telefon3=iphone&samsung=samsung_haqida"> <?= $telefon_samsung ?> </a>
                                        <br>
                                        <a href="uyga_vazifa_4.php?telefon=redmi&telefon2=samsung&telefon3=iphone&iphone=iphone_haqida"> <?= $telefon_iphone ?> </a>
                                    </div>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['redmi'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Redmi telefoni"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card65; ?> </h5>
                                    <p class="card-text">
                                    <form action="" method="get">
                                        <input type="number" name="telefon_amount" class="form-control mb-3" placeholder="How many telephone?">
                                        <input type="number" name="telephone_price" class="form-control mb-3" value="<?= $pri2 = 1800000; ?>" readonly>
                                        <input type="submit" name="cal_redmi" value="Calculate" class="btn btn-success mt-2">
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['samsung'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Samsung telefoni"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card65; ?> </h5>
                                    <p class="card-text">
                                    <form action="" method="get">
                                        <input type="number" name="telefon_amount" class="form-control mb-3" placeholder="How many telephone?">
                                        <input type="number" name="telephone_price" class="form-control mb-3" value="<?= $pri2 = 2200000; ?>">
                                        <input type="submit" name="cal_samsung" value="Calculate" class="btn btn-success mt-2">
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div> ?>
                    <?php elseif (isset($_GET['iphone'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Iphone telefoni"; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card65; ?> </h5>
                                    <p class="card-text">
                                    <form action="" method="get">
                                        <input type="number" name="telefon_amount" class="form-control mb-3" placeholder="How many telephone?">
                                        <input type="number" name="telephone_price" class="form-control mb-3" value="<?= $pri2 = 3500000; ?>">
                                        <input type="submit" name="cal_iphone" value="Calculate" class="btn btn-success mt-2">
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div> ?>
                    <?php endif; ?>

                    <?php if (isset($_GET['cal_redmi'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Siz harid qilgan (". $_GET['telefon_amount'] .")ta, Redmi telefon(lar)ining umumiy narxi:"; ?></h3>
                                    <p class="card-text">
                                    <form action="" method="get">
                                        <input type="hidden" name="telefon_amount" class="form-control mb-3" placeholder="How many telephone?">
                                        <input type="hidden" name="telephone_price" class="form-control mb-3" value="<?= $pri2 = 1800000; ?>">
                                        <?php
                                        $telefon_amount = $_GET['telefon_amount'];
                                        $telefon_price = $pri2;
                                        $total = $telefon_amount * $telefon_price;
                                        ?>
                                        <input type="number" name="total" class="form-control mt-3" value="<?= $total; ?>">
                                        <a href="uyga_vazifa_4.php" class="btn btn-outline-danger mt-2">Rad etish</a>
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['cal_samsung'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Siz harid qilgan (". $_GET['telefon_amount'] .")ta, Samsung telefon(lar)ining umumiy narxi:"; ?></h3>
                                    <p class="card-text">
                                    <form action="" method="get">
                                        <input type="hidden" name="telefon_amount" class="form-control mb-3" placeholder="How many telephone?">
                                        <input type="hidden" name="telephone_price" class="form-control mb-3" value="<?= $pri2 = 2200000; ?>">
                                        <?php
                                        $telefon_amount = $_GET['telefon_amount'];
                                        $telefon_price = $pri2;
                                        $total = $telefon_amount * $telefon_price;
                                        ?>
                                        <input type="number" name="total" class="form-control mt-3" value="<?= $total; ?>">
                                        <a href="uyga_vazifa_4.php" class="btn btn-outline-danger mt-2">Rad etish</a>
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php elseif (isset($_GET['cal_iphone'])): ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= "Siz harid qilgan (". $_GET['telefon_amount'] .")ta, Iphone telefon(lar)ining umumiy narxi:"; ?></h3>
                                    <p class="card-text">
                                    <form action="" method="get">
                                        <input type="hidden" name="telefon_amount" class="form-control mb-3" placeholder="How many telephone?">
                                        <input type="hidden" name="telephone_price" class="form-control mb-3" value="<?= $pri2 = 3500000; ?>">
                                        <?php
                                        $telefon_amount = $_GET['telefon_amount'];
                                        $telefon_price = $pri2;
                                        $total = $telefon_amount * $telefon_price;
                                        ?>
                                        <input type="number" name="total" class="form-control mt-3" value="<?= $total; ?>">
                                        <a href="uyga_vazifa_4.php" class="btn btn-outline-danger mt-2">Rad etish</a>
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                #endregion
                ?>

                </div>
            </div>
        </section>
        <!-- /Card -->
    </div>


    <!--  Bootstrap JS link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>