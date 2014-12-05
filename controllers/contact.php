<?php

    $titulo = 'Bienvenido al Contact';

    $contenido = 'Contenido';

    $variables = array('titulo'=>$titulo,
        'contenido'=>$contenido);

    view('contact', $variables);