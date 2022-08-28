<?php
    include "config.php";
    include "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="web/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-4 col-4">
                <form action="test.php" method="post">
                    <label for="db" class="form-label">DB name</label>
                    <input type="text" id="db" name="dbname" class="form-control mb-3" required>
                    <hr>
                    <input type="submit" name="submit" value="Send" class="btn btn-outline-info">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
