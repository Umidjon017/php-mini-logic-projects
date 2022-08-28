<?php
    $name = strip_tags(addslashes($_POST['dbname']));
?>

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
    <title>Create Table</title>
    <link rel="stylesheet" href="web/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-4 col-4">
            <form action="create.php" method="post">
                <label for="db" class="form-label">DB name</label>
                <input readonly id="db" name="dbname" class="form-control mb-3" value="<?=$name?>">
                <label for="tn" class="form-label">Table name</label>
                <input type="text" id="tn" name="tn" class="form-control mb-3">
                <label for="count" class="form-label">Column count:</label>
                <input type="number" id="count" name="count" class="form-control mb-3" required>
                <hr>
                <input type="submit" name="submit" value="Send" class="btn btn-outline-info">
            </form>
        </div>
    </div>
</div>
</body>
</html>

