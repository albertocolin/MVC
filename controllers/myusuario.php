<?php

    $usuario = new Usuario();

    $titulo = "Bienvenido a MyUsuario";
    $contenido = "Contenido";

    $variables = array('titulo'=>$titulo, 'contenido'=>$contenido, 'nombre'=>$usuario->setUsuario());

    view('myusuario', $variables);