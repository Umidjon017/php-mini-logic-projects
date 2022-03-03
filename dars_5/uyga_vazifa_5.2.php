<?php

    $url = $_SERVER['HTTP_REFERER'] ?? null;

    if ($url && $url === 'http://localhost:8080/dars_5/uyga_vazifa_5.php')
    {
        echo "Xush kelibsiz!";
    }
    else {
        ?>
            <script>
                window.location = 'uyga_vazifa_5.php';
            </script>

            <?php
        echo "Taqiqlangan!";
    }
?>