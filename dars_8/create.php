<?php
    $db = $_POST['dbname'];
    $tn = strip_tags(addslashes($_POST['tn']));
    $count = $_POST['count'];
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
        <div class="col-md-12 mt-4 mb-4">
            <form action="" method="post">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Length</th>
                        <th>Attribute</th>
                        <th>Null</th>
                        <th>Index</th>
                        <th>A_I</th>
                    </thead>
                    <?php for ($i = 0; $i < $count; $i++): ?>
                    <tbody>
                        <td><?=$i?></td>
                        <td>
                            <input type="text" name="name<?=$i?>" class="form-control" required>
                        </td>
                        <td>
                            <select name="type<?=$i?>" id="" class="form-control">
                                <option value="">Int</option>
                                <option value="">Varchar</option>
                                <option value="">Enum</option>
                                <option value="">Date</option>
                                <option value="">Datetime</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="length<?=$i?>" class="form-control">
                        </td>
                        <td>
                            <select name="attribute<?=$i?>" id="" class="form-control">
                                <option value=""></option>
                                <option value="">Binary</option>
                                <option value="">Unsigned</option>
                            </select>
                        </td>
                        <td>
                            <input type="checkbox" name="null<?=$i?>" value="1" class="form-check">
                        </td>
                        <td>
                            <select name="index<?=$i?>" id="" class="form-control">
                                <option value=""></option>
                                <option value="">Primary</option>
                                <option value="">Unique</option>
                                <option value="">Index</option>
                            </select>
                        </td>
                        <td>
                            <input type="checkbox" name="a_i<?=$i?>" value="1" class="form-check">
                        </td>
                    </tbody>
                    <?php endfor; ?>
                </table>
                <input type="submit" name="submit" value="Create table" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>
</body>
</html>
