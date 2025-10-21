<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Punto 6 - Variables de tipo string</title>
<style>
body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f3e8ff; 
    color: #333;
}
h1 {
    color: #4a0072; 
    margin-bottom: 10px;
}
a {
    display: inline-block;
    margin-bottom: 25px;
    padding: 8px 16px;
    background-color: #b366ff;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    transition: background 0.3s;
}
a:hover {
    background-color: #9933ff;
}
.resultado {
    background: white;
    border-left: 5px solid #b366ff;
    padding: 15px 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    line-height: 1.6;
}
</style>
</head>
<body>

<h1>Punto 6 - Variables de tipo string</h1>
<a href="index.php"> <-Volver</a>
<p>Definir tres variables enteras y luego crear un string que las incorpore y las sustituya en tiempo de ejecución.</p>

<?php
$precio1 = 1000;
$precio2 = 500;
$precio3 = 225;

$mensaje = "Los precios de los productos son: $precio1, $precio2 y $precio3 pesos.";
// Mostrar el mensaje
echo "<div class='resultado'>";
echo "<p>$mensaje</p>";
echo "</div>";
?>

</body>
</html>
