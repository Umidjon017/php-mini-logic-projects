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
                            <li><a class="dropdown-item" href="../dars_4/uyga_vazifa_4.php">Uyga vazifa-4</a></li>
                            <li><a class="dropdown-divider" href="#">5-SERVER requests</a></li>
                            <li><a class="dropdown-item" href="../dars_5/uyga_vazifa_5.php">Uyga vazifa-5</a></li>
                            <li><a class="dropdown-divider" href="#">6 - PHP Upload files</a></li>
                            <li><a class="dropdown-item" href="../dars_6/uyga_vazifa_6.php">Uyga vazifa-6</a></li>
                            <li><a class="dropdown-divider" href="#">7 - Regular expressions</a></li>
                            <li><a class="dropdown-item" href="uyga_vazifa_7.php">Uyga vazifa-7</a></li>
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
        $card11 = "Registration Form";
        $card12_fullName = "/^([a-z!-*']{1,16})\s([a-z!-*']{1,16})\s([a-z!-*']{1,16})\s([a-z!-*']{1,6})$/i"; // FOR FULL NAME
        $card13_birthDate = "/^([0-9]{2})\.([0-9]{2})\.([0-9]{4})$/"; // FOR BIRTH DATE
        $card14_email = "/^([a-z0-9]+)(.?[0-9]*)(.)([a-z]{1,5}\.[a-z]{1,4})$/i"; // FOR EMAIL
        $card15_number = "/^([0-9])-([0-9]{1,2})-([0-9]{3})-([0-9]{2})-([0-9]{2})$/"; // FOR NUMBER
        $card16_login = "/^([a-z0-9]{1,30})([^!-*])$/i";
        $card17_password = "/^([a-z!-*]{1,30})([^0-9])([a-z!-*]{1,30})([^0-9])$/";

        $card2 = 'Your Data';
        $card21 = "Registration form";

        $cardbt = "To'g'ri";
        $cardbf = "Noto'g'ri";
        ?>
        <section class="bs2">
            <div class="container">
                <h1 class="display-2">PHP REGULAR EXPRESSIONS</h1>
                <div class="row">

                    <?php if (!isset($_POST['submit'])): ?>
                        <div class="col-sm-3 offset-3">
                            <div class="card" style="width: 40rem;">
                                <div class="card-body">
                                    <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                    <h5 class="card-subtitle mb-2"> <?= $card11; ?> </h5>
                                    <p class="card-text">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>(Ism Familiya Sharif (o'g'li/qizi): </label> <br>
                                                <input type="text" name="fullName" class="form-control mb-3" placeholder="Your full name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>(31.12.2000): </label> <br>
                                                <input type="text" name="year" class="form-control mb-2" placeholder="Your date of birth">
                                            </div>
                                            <div class="col-md-6">
                                                <label>(user12@gmail.com) </label> <br>
                                                <input type="email" name="email" class="form-control mb-2" placeholder="Your email" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>(8-90-123-45-67) </label> <br>
                                                <input type="text" name="mnumber" class="form-control mb-2" placeholder="Any description here" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label>(Login. Letters and numbers only) </label> <br>
                                                <input type="text" name="login" class="form-control mb-2" placeholder="Your login" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label>(Password. Letters and symbols only) </label> <br>
                                                <input type="text" name="password" class="form-control mb-2" placeholder="Your password">
                                            </div>
                                            <label>(description) </label> <br>
                                            <textarea name="description" cols="40" rows="5" class="rounded"></textarea>
                                        </div>
                                        <input type="submit" name="submit" value="Send" class="btn btn-success mt-2">
                                    </form>
                                    </p>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                    <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_POST['submit']) && !empty($_POST['email'])) :?>
                    <div class="col-sm-3 offset-4">
                        <div class="card" style="width: 27rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card2 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card21; ?> </h5>
                                <p class="card-text">
                                    <?php
                                    $fullName = preg_match($card12_fullName, $_POST['fullName']);
                                    $birthDate = preg_match($card13_birthDate, $_POST['year']);
                                    $email = preg_match($card14_email, $_POST['email']);
                                    $mnumber = preg_match($card15_number, $_POST['mnumber']);
                                    $login = preg_match($card16_login, $_POST['login']);
                                    $password = preg_match($card17_password, $_POST['password']);
                                    if ($fullName) {
                                        echo "<span style='color: black' class='h5'>Full name: </span>" . $_POST['fullName']."<br>";
                                    } else {
                                        echo "'Nameda' Xatolik mavjud";
                                    }
                                    if ($birthDate) {
                                        echo "<span style='color: black' class='h5'>Birth Date: </span>" . $_POST['year']."<br>";
                                    } else {
                                        echo "'BirthDateda' Xatolik mavjud";
                                    }
                                    if ($email) {
                                        echo "<span style='color: black' class='h5'>Email: </span>" . $_POST['email']."<br>";
                                    } else {
                                        echo "'Email' Xatolik mavjud";
                                    }
                                    if ($mnumber) {
                                        echo "<span style='color: black' class='h5'>Mobile Number: </span>" . $_POST['mnumber']."<br>";
                                    } else {
                                        echo "'Mnumberda' Xatolik mavjud";
                                    }
                                    if ($login) {
                                        echo "<span style='color: black' class='h5'>Login: </span>" . $_POST['login']."<br>";
                                    } else {
                                        echo "'Loginda' Xatolik mavjud";
                                    }
                                    if ($password) {
                                        echo "<span style='color: black' class='h5'>Password: </span>" . $_POST['password']."<br>";
                                    } else {
                                        echo "'Psswordda' Xatolik mavjud";
                                    }
                                    ?>
                                    <br>
                                    <a href="uyga_vazifa_7.php" class="btn btn-success mt-2">Go back</a>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
        <!-- /Card -->
    </div>


    <!--  Bootstrap JS link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>