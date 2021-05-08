<!DOCTYPE html>
<html>
<body>

<?php
/* 
Podemos utilizar (. / -) para el formato de date
y = año | m = mes | d = dia | l = dia de la semana
*/

$yesterday = date("2021-05-06");
echo "Mostrando la fecha<br>";
echo "Today is " . date($yesterday) . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("l");

echo "<br><br>-------------<br><br>";

echo "Configurando el año de tu sitio web<br>";
echo "© 2010-";
echo date("Y");

echo "<br><br>-------------<br><br>";

/*
H - formato de 24 horas de una hora (00 a 23)
h - formato de 12 horas de una hora con ceros a la izquierda (01 a 12)
i - Minutos con ceros a la izquierda (00 a 59)
s - Segundos con ceros a la izquierda (00 a 59)
a - Ante meridiem y Post meridiem en minúsculas (am o pm)
*/

echo "Mostrando la hora<br>";
echo "The time is " . date("h:i:sa");

echo "<br><br>-------------<br><br>";

echo "Asignando tu zona horaria<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

echo "<br><br>-------------<br><br>";

/*
Sintaxis
mktime(hour, minute, second, month, day, year) 
*/

echo "Crear una fecha con mktime<br>";
$fecha_mktime = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $fecha_mktime);

echo "<br><br>-------------<br><br>";

/*
Sintaxis
strtotime(time, now)
*/
echo "Crear una fecha con strtotime<br>";
$fecha_strtotime=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa - ", $fecha_strtotime);

$fecha_strtotime=strtotime("tomorrow");
echo date("<br>"."Y-m-d h:i:sa", $fecha_strtotime) . "<br>";

$fecha_strtotime=strtotime("next Saturday");
echo date("<br>"."Y-m-d h:i:sa", $fecha_strtotime) . "<br>";

$fecha_strtotime=strtotime("+3 Months");
echo date("<br>"."Y-m-d h:i:sa", $fecha_strtotime) . "<br>";

?>

</body>
</html>