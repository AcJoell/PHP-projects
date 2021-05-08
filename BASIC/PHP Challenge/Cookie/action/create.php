<?php
    // CREANDO UNA COOKIE

    // sintaxis: ('nombreCookie','valorCookie','valorActual'+vigenciaCookie)
    // setcookie(): metodo que permite obtener una cookie en php
    // time(): retorna cuantos segundos han pasado desde x fecha
    // 84600 equivale a un dia ((84600 * 2)dos dias)
    setcookie('usuario','correo@ample.com',time()+84600);
    setcookie('ubicacion','Colombia, Bogotá DC',time()+(84600*2));

    /* 
    NOTA: despues de actualizar tu navegador por primera vez puedes eliminar la linea 8
    y al obtener la cookie aun la tendras, debido a su tiempo de vigencia
    (en este caso 2 dias)
    */

    // ----   ----   ----   ----   ----   ----   ----   ----
    // ----   ----   ----   ----   ----   ----   ----   ----

    // OBTENIENDO EL VALOR DE UNA COOKIE

    // sintexis: ['nombreCookieAobtener']
    // $_COOKIE es una vairable superglobal
    echo "Cookies: ( ". $_COOKIE['usuario'] ." ) & ( ". $_COOKIE['ubicacion'] ." )" // correo@ample.com y Colombia, Bogotá DC
?>