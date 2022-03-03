<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bosh sahifa</title>
</head>
<body>
    <header class="header">
        header
        <a href="?view=index">bosh sahifa</a>
        <a href="?view=news">yangiliklar</a>
        <a href="?view=aboutus">biz haqimizda</a>
        <a href="?view=contact">aloqa</a>
    </header>
    <main class="main">
        <?php include $config['base']['path'] . 'views/views/'. $views .'.php'; ?>
    </main>
    <footer class="footer">
        footer
    </footer>
</body>
</html>
