<?php

    // ELIMINANDO UNA COOKIE

    // forma 1 - con un metodo especifico
    unset($_COOKIE['usuario']);
    unset($_COOKIE['ubicacion']);

    // forma 2 - restandole tiempo

    // (sobreescribir la cookie) volverla a crearla pero 
    // restarle el tiempo que le pusiste de vigencia

    // setcookie('usuario','',time()-84600);
    // setcookie('ubicacion','',time()-(84600*2));

    echo "<br>Cookies eliminada";
?>