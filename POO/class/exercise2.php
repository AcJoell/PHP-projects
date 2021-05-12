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
        <li> - Crear una clase Empleado.</li>
        <li> - Definir como atributos su nombre y sueldo.</li>
        <li> - Definir un método inicializar que lleguen como dato el nombre y sueldo.</li>
        <li> - Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos).</li>
    </ul>

    <?php
        class Empleado {
            private $nombre; // Atributo nombre
            private $sueldo; // Atributo sueldo
            // como argumentos el usuario va a poner dos datos al inicializar la clase
            public function inicializar($nom,$sue) { 
                // le asignamos al atributo nombre y sueldo el valor que ingreso el usuario
                $this->nombre=$nom;
                $this->sueldo=$sue;
            }
            public function pagarImpuestos() { // imprimimos atributo
                echo $this->nombre. ' - ';
                echo $this->sueldo. ' - ';
                // condicional
                if($this->sueldo > 3000){
                    echo 'Ud SI debe de pagar impuestos<br>';
                } else {
                    echo 'Ud NO debe de pagar impuestos<br>';
                }
            }
        }
        $juan=new Empleado(); // creamos objeto
        $juan->inicializar('Juan',2900); // le damos los datos
        $juan->pagarImpuestos(); // imprimimos
        
        $ana=new Empleado();
        $ana->inicializar('Ana',3500);
        $ana->pagarImpuestos();
    ?>
</body>
</html>