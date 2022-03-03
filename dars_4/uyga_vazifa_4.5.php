<?php
    $li1 = 'Bosh sahifa';
    $li2 = 'menu 1';
    $li3 = 'menu 2';
    $li4 = 'menu 3';
    $li5 = 'menu 4';

    $card3 = "Registered user's information";
    $card33 = "Go home";
    $card34 = "Previous";
    ?>
    <?php
    function isIsset()
    {
        return (isset($_POST['height']) && isset($_POST['width']) && isset($_POST['color']) && isset($_POST['position']) && isset($_POST['title']) && isset($_POST['year']) && isset($_POST['author']))
            && (!empty($_POST['height']) && !empty($_POST['width']) && !empty($_POST['color']) && !empty($_POST['position']) && !empty($_POST['title']) && !empty($_POST['year']) && !empty($_POST['author']));
    }
    if (isIsset())
    {
        $height = $_POST['height'];
        $width = $_POST['width'];
        $color = $_POST['color'];
        $position = $_POST['position'];
        $title = $_POST['title'];
        $year = $_POST['year'];
        $author = $_POST['author'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?>></title>
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
        <section class="bs2">
            <div class="container">
                <h1 class="display-2">Form exercises</h1>
                <div class="row">
                    <div class="col-sm-6 offset-3">
                        <div class="card" style="height: <?= $height;?>rem; width: <?= $width?>rem; background-color: <?= $color?>; position: <?= $position?>; ">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card3 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> </h5>
                                <p class="card-text"></p>
                                <a href="../index.php" class="card-link btn btn-dark"><?= $card33; ?> </a>
                                <a href="uyga_vazifa_4.php" class="card-link btn btn-success"><?= $card34; ?> </a>
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

    <footer class="text-muted d-flex justify-content-center mt-5">
        <p> <?= $year . ' | ' . $author ; ?> &copy;</p>
    </footer>
</html>