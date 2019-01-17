<?php
    include "./HomeController.php";
    include "./AboutController.php";
    use App\Controller\HomeController;
    use App\Controller\AboutController;
    $a = new HomeController();
    echo $a->name;

    $a = new AboutController();
    echo $a->name;
?>