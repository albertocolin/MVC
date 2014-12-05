<?php

    $titulo = 'Bienvenido al home';

    $contenido = 'Contenido';

    $variables = array('titulo'=>$titulo,
    'contenido'=>$contenido);

    view('home', $variables);