<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li> - Crear una clase llamada Persona.</li>
        <li> - Definir un atributo donde se almacene su nombre. </li>
        <li> - Luego definir dos métodos, uno que cargue el nombre y otro que lo imprima.</li>
    </ul>
    <?php
        class Persona {
            private $nombre; // Atributo nombre
            // como argumentos el usuario va a poner dos datos al inicializar la clase
            public function inicializar($nom) { 
            // le asignamos al atributo nombre el valor que ingreso el usuario
                $this->nombre=$nom;
            }
            public function imprimir() { // imprimimos
                echo $this->nombre. '<br>';
            }
        }
        $per1=new Persona(); // creamos objeto
        $per1->inicializar('Juan'); // le damos los datos
        $per1->imprimir(); // imprimimos
        
        $per2=new Persona();
        $per2->inicializar('Ana');
        $per2->imprimir();
    ?>
</body>
</html>