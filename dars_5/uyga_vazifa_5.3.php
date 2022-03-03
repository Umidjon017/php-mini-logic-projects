<?php
    const adminInfo = [
        'login' => 'admin',
        'password' => '123456'
    ];

    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === adminInfo['login'] && $password === adminInfo['password'])
    {
        echo "Xush kelibsiz ADMIN!";
    }
    else {
        header('Location: uyga_vazifa_5.php');
    }
?>