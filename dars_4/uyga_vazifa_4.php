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

        #region RULES FOR CARD
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
                <h1 class="display-2">PHP GET, POST, REQUEST</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card11; ?> </h5>
                                <p class="card-text">
                                <form action="uyga_vazifa_4.2.php" method="get">
                                    <input type="number" name="usd" class="form-control">
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
            </div>
        </section>
        <!-- /Card -->
    </div>


    <!--  Bootstrap JS link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>