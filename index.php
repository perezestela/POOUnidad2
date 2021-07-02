<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<h1>";
echo "Datos Personales";
echo "</h1>";
$nombre = "Estela";
$apellido = "Perez";
$edad = "47";
$hobbie = "Escuchar música";
$editor = "Visual Studio Code";

echo "<h3>" . "<i>";
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Lo que más te gusta hacer: " . $hobbie . "<br>";
echo "Editor de código preferido: " . $editor . "<br>";
echo "Sistema Operativo utilizado: " . PHP_OS . " " . PHP_VERSION;
echo "</h3>";

?>
</body>
</html>