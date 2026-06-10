<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "academico";

$conn = mysqli_connect($servidor, $usuario, $password, $bd);

if(!$conn){
    die("Error de conexión");
}

/*
    conexiones

$servidor es una variable
"localhost" significa que la base de datos está en la misma computadora donde estamos trabajando.

$usuario es una variable
"root" es el usuario principal de MySQL

$password es una variable.
Las comillas vacías "" indican que no tiene contraseña.
En XAMPP, el usuario no tiene contraseña

$bd significa base de datos
"academico" es la base de datos que hemos creado en phpMyAdmin

mysqli_connect() sirve para conectar PHP  con MYSQL y lo estamos enviando el sevidor, el usuario, la contraseña, y la base de datos.
Si la conexion esta esta bien entonces se crea la conexion 

if(!$conn){ 
la conexion fallo

    die("Error de conexión");
    }
muestra el error y el programa se detiene 



*/

?>