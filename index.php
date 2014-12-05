<?php

    require'helpers.php';
    require 'template/header.php';
    require 'template/footer.php';
    require 'clases/Usuario.php';
    require 'bd/db.php';

    if(isset($_GET['url'])){

        controller($_GET['url']);
    }
    else{
        $_GET['url']='home';

        controller($_GET['url']);
    }