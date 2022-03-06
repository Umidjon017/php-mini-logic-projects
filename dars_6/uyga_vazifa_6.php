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
                            <li><a class="dropdown-item" href="uyga_vazifa_6.php">Uyga vazifa-6</a></li>
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
        $card11 = "Upload FILE";

        $card2 = 'Misol 2';
        $card21 = "Upload FILES";

        $img_png = 'image/png';
        $img_jpeg = 'image/jpeg';
        $docx_word = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
        $docx_excel = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
        $pdf_epub = 'application/pdf';
        $epub_pdf = 'application/epub+zip';

        $cardbt = "To'g'ri";
        $cardbf = "Noto'g'ri";
        ?>
        <section class="bs2">
            <div class="container">
                <h1 class="display-2">PHP - Uploading Files</h1>
                <div class="row">
                    <div class="col-sm-3 offset-1">
                        <div class="card" style="width: 26rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card1 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card11; ?> </h5>
                                <p class="card-text text-left">
                                <form action="" method="post">
                                    <input type="file" name="files" class="form-control">
                                    <input type="submit" name="ok" value="Upload" class="btn btn-success mt-3 mb-3">
                                </form>
                                <?php if (isset($_POST['ok']) && !empty($_FILES['files']['name'])): ?>
                                    <?php
                                        function generateName(string $name)
                                        {
                                            $array = explode('.', $_FILES['files']['name']);
                                            $type = count($array) - 1;
                                            return $name.time().'.'.$array[$type];
                                        }

                                        function isImage()
                                        {
                                            global $img_png, $img_jpeg;
                                            return $_FILES['files']['type'] == $img_jpeg || $_FILES['files']['type'] == $img_png;
                                        }

                                        function isDocx()
                                        {
                                            global $docx_word, $docx_excel;
                                            return $_FILES['files']['type'] == $docx_word || $_FILES['files']['type'] == $docx_excel;
                                        }

                                        function isPdfEpub()
                                        {
                                            global $pdf_epub, $epub_pdf;
                                            return $_FILES['files']['type'] == $pdf_epub || $_FILES['files']['type'] == $epub_pdf;
                                        }

                                        function saveFiles(string $folder)
                                        {
                                            if ($folder === 'image') {
                                                return move_uploaded_file($_FILES['files']['tmp_name'], '../uploads/'.$folder.'/'.generateName('img_'));
                                            }
                                            elseif ($folder === 'docx') {
                                                return move_uploaded_file($_FILES['files']['tmp_name'], '../uploads/'.$folder.'/'.generateName('docx_'));
                                            }
                                            elseif ($folder === 'pdf_epub') {
                                                return move_uploaded_file($_FILES['files']['tmp_name'], '../uploads/'.$folder.'/'.generateName('pdf_epub_'));
                                            }
                                            return true;
                                        }

                                        if (isImage())
                                        {
                                            if (saveFiles('image')) {
                                                echo "IMAGE has saved!";
                                            } else {
                                                echo "IMAGE has not saved!";
                                            }
                                        }
                                        if (isDocx())
                                        {
                                            if (saveFiles('docx')) {
                                                echo "DOCX has saved!";
                                            } else {
                                                echo "DOCX has not saved!";
                                            }
                                        }
                                        if (isPdfEpub())
                                        {
                                            if (saveFiles('pdf_epub')) {
                                                echo "PDF_EPUB has saved!";
                                            } else {
                                                echo "PDF_EPUB has not saved!";
                                            }
                                        }
                                    ?>
                                <?php else: ?>
                                    <h3 style="color: white; background-color: red">Faylni yuklamadingiz!</h3>
                                <?php endif; ?>
                                </p>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbt; ?> </a>
                                <a href="#" class="card-link btn btn-dark"><?= $cardbf; ?> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 offset-2">
                        <div class="card" style="width: 26rem;">
                            <div class="card-body">
                                <h3 class="card-title"><?= $card2 . ':'; ?></h3>
                                <h5 class="card-subtitle mb-2"> <?= $card21; ?> </h5>
                                <p class="card-text text-left">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <label for="images" class="form-label">Upload your images first</label>
                                    <input id="images" type="file" name="images[]" class="form-control" multiple>
                                    <label for="docx" class="form-label mt-3">Upload your docx second</label>
                                    <input id="docx" type="file" name="docx[]" class="form-control" multiple>
                                    <label for="pdf_epub" class="form-label mt-3">Upload your docx then</label>
                                    <input id="pdf_epub" type="file" name="pdf_epub[]" class="form-control" multiple>
                                    <input type="submit" name="ok" value="Upload" class="btn btn-success mt-3 mb-3">
                                </form>

                                <?php if (isset($_POST['ok']) && !empty($_FILES['images']['name']) && !empty($_FILES['docx']['name']) && !empty($_FILES['pdf_epub']['name'])): ?>
                                    <?php
                                        for ($i = 0; $i < count($_FILES['images']['name']) || $i < count($_FILES['docx']['name']) || $i < count($_FILES['pdf_epub']['name']); $i++)
                                        {
                                            // SAVING THE FILES INTO DIRS
                                            $pdfepub = move_uploaded_file($_FILES['pdf_epub']['tmp_name'][$i], '../uploads/pdf_epub/'.$_FILES['pdf_epub']['name'][$i]);
                                            $image = move_uploaded_file($_FILES['images']['tmp_name'][$i], '../uploads/image/'.$_FILES['images']['name'][$i]);
                                            $docx = move_uploaded_file($_FILES['docx']['tmp_name'][$i], '../uploads/docx/'.$_FILES['docx']['name'][$i]);

                                            // IS EQUAL TO FILES
                                            $isEqualToPdfEpub = $_FILES['pdf_epub']['type'][$i] == $pdf_epub || $_FILES['pdf_epub']['type'][$i] == $epub_pdf;
                                            $isEqualToImage = $_FILES['images']['type'][$i] == $img_jpeg || $_FILES['images']['type'][$i] == $img_png;
                                            $isEqualToDocx = $_FILES['docx']['type'][$i] == $docx_word || $_FILES['docx']['type'][$i] == $docx_excel;

                                            if ($isEqualToImage || $isEqualToDocx || $isEqualToPdfEpub)
                                            {
                                                $image;
                                                $docx;
                                                $pdfepub;
                                            }
                                        }
                                    echo "Files have saved successfully!";
                                    ?>
                                <?php else: ?>
                                    <h3 style="color: white; background-color: red">Fayllarni yuklamadingiz!</h3>
                                <?php endif; ?>
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