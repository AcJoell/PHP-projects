<?php
// Verificamos de esta manera si tenemos alguna cookie activa
if(count($_COOKIE) > 0) {
    echo "<br>Cookies are enabled.<br>";
  } else {
    echo "<br>Cookies are disabled.<br>";
  }
?>