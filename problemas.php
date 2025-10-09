<?php
//Problema 1: 1 Perfil de usuario.


define('USUARIOACTIVO', true);
$nombre = "Alexis";
$Apellidos = "Castellón Fernández";
$Edad = 27;
$Altura = 1.86;
$EsEstudiante = true;
echo    $nombre .'<br>'.
        $Apellidos .'<br>'.
        $Edad .'<br>'.
        $Altura .'<br>'.
        $EsEstudiante . '<br>';

echo "-----------------------------------------------------------------------------------". '<br>';
//Problema 1.1
    $NombreDelProducto = "Pipas";
    $Precio = 3.20;
    $StockDisponible = 50;
    $Oferta = true;
        echo $NombreDelProducto . '<br>'.
            $Precio . '<br>'.
            $StockDisponible . '<br>'.
            $Oferta . '<br>';

echo "-----------------------------------------------------------------------------------". '<br>';
//Problema 2

    const NOMBRE_SITIO = "Mi tienda online";
    const VERSION_APP = 1.0;
        echo NOMBRE_SITIO . '<br>' ;
        echo VERSION_APP;

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 2.1

    $num1 = 5;
    $num2 = 4;
        $sum = $num2 +$num1;
        $rest = $num1 + $num2;
        $multi = $num2 * $num1;
        $div = $num2 % $num1;
        echo $sum .'<br>';
        echo $rest .'<br>';
        echo $multi . '<br>';
        echo $div . '<br>';

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 2.2

    $stock = 100;
    $venta = 25;
    $llegada = 50;
        $PrimeraVenta = $stock - $venta;
        echo $PrimeraVenta. '<br>';
        $PrimeraLlegada = $PrimeraVenta + $llegada;
        echo $PrimeraLlegada . '<br>';

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 2.3

$Nombre = "Oskar";
$lastName = "Calvo";
$curso = "Desarrollo Web en entorno servidor";

    $FraseCompleta = "El profesor ".$Nombre. " ". $lastName . " imparte el curso de ". $curso;
echo $FraseCompleta .'<br>';
echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 2.4

        $edad = 20;
        $edadMinima = 18;
        var_dump($edad == $edadMinima).'<br>';
        $ContrasenaGuardada = 12345;
        $ContrasenaUsuario = 123;
        var_dump($ContrasenaUsuario === $ContrasenaUsuario) . '<br>';

 echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 2.5

    function ParoImpar (){
        $num = 5;
            if ($num % 2==0){
                echo "El numero ".$num." Es par ";
            }else{
                echo "El numero ".$num." Es impar";
            }

    }echo ParoImpar();

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 3.1

function ControlEdad($Edad){

    if ($Edad >= 18){
        echo "Puedes pasar ";
    }else{
        echo "Lo siento, eres menor de edad";
    }
}

ControlEdad(15);

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 3.2

function Calificacion($Nota){

    if ($Nota >= 9){
        echo "Sobresaliente ";
    }
    elseif (($Nota >=7 && $Nota <=8)){
        echo "Notable";
    }elseif (($Nota>=5 && $Nota <=6)){
        echo "Suficiente ";
    }else{
        echo "Suspenso";
    }
}
Calificacion(8);

echo "-----------------------------------------------------------------------------------". '<br>';

//Problemas 3.3

function MenuSemanal($Dia)
{
    switch ($Dia){
        case "lunes":
            echo "Lentejas";
            break;
        case "Martes":
            echo "Tostadas";
            break;
        case "Miercoles":
            echo "Tripas de perro";
            break;
        case "Jueves":
            echo "Put your hands up in the air";
            break;
        case "Viernes":
            echo "Hoja de coca";
            break;
        default :
            echo "Los findes solo se bebe";
            break;
    }
}MenuSemanal("Martes");

echo "-----------------------------------------------------------------------------------". '<br>';
//Problemas 3.4

function Acceso($Rol)
{
    $RolUsuaio= "Admin";
    $UsuarioActivo= true;
    if ($Rol == $RolUsuaio){
        echo "Acceso permtido";
    }else{
        echo "Acceso denegado";
    }
}Acceso("Admin");

echo "-----------------------------------------------------------------------------------". '<br>';
//Problema 4.1
$numero = 7;
 for ($i = 0; $i < 10 ; $i++){
     echo $i*$numero;

 }

echo "-----------------------------------------------------------------------------------". '<br>';
//Problema 4.2

$contador = 10;
    while ($contador >= 0) {
        echo $contador;
        $contador--;

    }
echo   " Feliz año nuevo, te muerda los tobillos un galgo " . '<br>';
echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 4.3

$Nombres = ["luis", "JOse", "Pedro", "Maria"];
    foreach ($Nombres as $Saludo){
        echo "Hola, " . $Saludo . ". ";
}
echo "-----------------------------------------------------------------------------------". '<br>';
//Problema 4.4

$Productos = [
    ["nombre" => "teclado", "precio" => 50],
    ["nombre" => "Pipas", "precio" => 150],
    ["nombre" => "AK47", "precio" => 5]
];
        foreach ($Productos as $producto){
            echo "  Nombre " . $producto["nombre"] . "  Precio: ". $producto["precio"] . '<br>' ;
        };

echo "-----------------------------------------------------------------------------------". '<br>';
//Problema 5.1

$usuario = [
    "Nombre: " => "Faliyo ",
    "Edad: " => 1522,
    "Ciudad: " => "Pueblo paleta "
];

        echo "Nombre: " . $usuario["Nombre: "], $usuario["Edad: "], $usuario["Ciudad: "];

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 5.2

$Notas = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($Notas as $Aprobados){
        if ($Aprobados <=4){
            echo $Aprobados;
            echo " Suspenso chivato " . '<br>';
        }else{
            echo $Aprobados;
            echo " Aprobado mostro " . '<br>';
        }
    }

echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 5.3

$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];
    foreach ($listaCompra as $Frutas ){
        foreach ($Frutas as $producto){
            echo $producto . '<br>';
        }
    }
echo "-----------------------------------------------------------------------------------". '<br>';

//Problema 5.4
$Total =0;
$Productos = [
    ["nombre" => "teclado", "precio" => 50],
    ["nombre" => "Pipas", "precio" => 150],
    ["nombre" => "AK47", "precio" => 5]
];
      foreach ($Productos as $producto){
          echo $producto["nombre"] . "  Precio: " . $producto["precio"] . '<br>' ;
          $Total += $producto["precio"];
          echo $Total . '<br>';

        }