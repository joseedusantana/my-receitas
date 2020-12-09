<?php

    require_once('../vendor/autoload.php');
    require_once('../app/config/global.php');
    require_once('../app/functions/functions.php');

    use app\site\controller\HomeController;

    $homeController = new HomeController();