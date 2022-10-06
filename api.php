<?php
    // Glosario de PHP
    // Camel-case
    // Extructura basica de los lenguajes de programacion
    // Que es un seudo-Lenguaje programacion / un lengaje de programacion
    // codigo limpio / codigo sucio*
    // Variables
    // Maneras de escribir las variables en PHP
    // 7 tipos de datos primitivos en PHP
    // Declarar de Variable / Inicializacion de Variable
    // Punto y coma
    // palabras reservadas del sistema
    // Que son los operadores
    // Items en las coleciones de datos PHP
    // echo / var_dump / print_r

    header('Access-Control-Allow-Origin: *');

    $nombreCompleto = "Laura Milena Aragón Mesa";
    $edad = 32;
    $altura = 1.52;
    $soyProfesor = false;
    $pasaTiempo = ["Leer", "Jugar Videojuegos", "Viajar a conocer pueblos"];
    $direccion = new stdClass();
    $direccion->principal = "Calle 39";
    $direccion->secundaria = "Carrera 20";

    echo($nombreCompleto);
    echo("<br>");
    echo($edad);
    echo("<br>");
    echo($altura);
    echo("<br>");
    var_dump($soyProfesor);
    var_dump($pasaTiempo);
    var_dump($direccion);
    echo "<br>Soy el servidor ".$_SERVER["HTTP_HOST"];

?>