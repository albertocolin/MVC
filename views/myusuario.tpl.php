<?php
    $usuario2 = new Usuario();
?>

<html>
<head>

    <style>
        .welcome{
            position:relative;
            top:0px;
            left:0px;
            float:left;
            clear:left;
            width:100%;
            height:auto;
            background: #FFF104;
            color: #FFFFFF;
            text-align: center;
            font-family: Candara;
            font-size: 14pt;
        }

        .cont{
            position:relative;
            top:0px;
            left:0px;
            float:left;
            clear:left;
            width:100%;
            height:120px;
            background: #A83FF2;
            color: #FFFFFF;
            line-height:120px;
            text-align: center;
            font-family: Candara;
            font-size: 14pt;
        }
        .name{
            position:relative;
            top:0px;
            left:0px;
            float:left;
            clear:left;
            width:100%;
            height:100px;
            line-height:100px;
            background: #FF2D3A;
            color: #FFFFFF;
            text-align: center;
            font-family: Candara;
            font-size: 14pt;
        }


    </style>
<body>
<div class="welcome"><?=$titulo?></div>
<div class="cont"><?=$contenido?></div>
<div class="name"><?=$nombre?></div>
<p><?php
    $usuario2->setUsuario();
    $usuario2->getUsuario();
    $usuario2->consultaUsuario();

    ?></p>
</body>
</html>