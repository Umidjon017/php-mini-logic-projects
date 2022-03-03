<?php
    include 'config.php';
    $views = $_GET['view'] ?? 'index';
    include $config['base']['path'] . 'views/model/index.php';
?>