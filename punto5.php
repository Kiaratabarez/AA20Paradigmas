<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Punto 5 - Tipos de variables</title>
<style>
body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f3e8ff; /* lavanda claro */
    color: #333;
}
h1 {
    color: #4a0072; /* violeta oscuro */
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

<h1>Punto 5 - Tipos de variables</h1>
<a href="index.php"> <-Volver</a>
<p>Definir una variable de cada tipo: <strong>integer</strong>, <strong>double</strong>, <strong>string</strong> y <strong>boolean</strong>. Luego imprimirlas en la página, una por línea.</p>

<?php
$numeroEntero = 15; // tipo entero
$numeroDecimal = 2.15;// tipo double/float
$texto = "Hola Profe"; // tipo string
$esVerdadero = true;// tipo boolean

echo "<div class='resultado'>";
echo "<p><strong>Integer:</strong> $numeroEntero</p>";
echo "<p><strong>Double:</strong> $numeroDecimal</p>";
echo "<p><strong>String:</strong> $texto</p>";
echo "<p><strong>Boolean:</strong> " . ($esVerdadero ? "true" : "false") . "</p>";
echo "</div>";
?>

</body>
</html>
