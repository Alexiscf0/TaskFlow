<?php
function CalcularDescuentos ($categorias, $precios){

    if ($categorias == 'electronica'){
        $precios = $precios * 0.15;
    }
    elseif ($categorias == 'ropa'){
        $precios = $precios * 0.10;
    }
    elseif ($categorias == 'alimentacion'){
        $precios = $precios * 0.5;
    }return $precios;
}echo CalcularDescuentos('alimentacion', 20);
echo "  ";
function FizzBuzz($numero)
{
    if ($numero % 3==0 && $numero % 5==0){
        echo 'FizzBuzz';
    }
    elseif ($numero % 5==0){
        echo 'Buzz';
    }
    elseif ($numero % 3==0){
        echo 'Fizz';
    }return $numero;
}echo FizzBuzz(15);

function ValidarContrasena($pass)
{  $tieneMayusculas = $pass !== strtolower($pass);
    $tieneNumero = $pass.is_numeric($pass);
    if (strlen($pass) <= 8 ){
        echo "Debil";
    }

    elseif ($tieneNumero && $tieneMayusculas){
        echo "Fuerte";
    }
    else {
        echo "Media";
    }
}echo ValidarContrasena("MARICONAA14");

function ValorMaximo($array)
{
    $max = 0;
    for ($i=0; $i<count($array); $i++) {
        if ($array[$i] > $max) {
             $max = $array[$i];
        }
        }
    echo $max;
    return $max;
}
$array = [5, 6, 8, 4, 1];
ValorMaximo($array);

function Criterios($gestion)
{
    $usuarios = [
        ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
        ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
        ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
        ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
    ];
        foreach ($usuarios as $usuario) {
            echo $usuario['nombre']. $usuario['edad'] ."<br>";
        }
}Criterios(1);