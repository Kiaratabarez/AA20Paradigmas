<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Punto 4 - "Hola Mundo"</title>
<style>
body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f3e8ff; 
    color: #333;
}
h1 {
    color: #4a0072; 
}
a {
    display: inline-block;
    margin-bottom: 15px;
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
hr {
    border: none;
    height: 2px;
    background-color: #b366ff;
    margin: 20px 0;
}
.resultado {
    background: white;
    border-left: 5px solid #b366ff;
    padding: 10px 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

<h1>Punto 4 - "Hola Mundo"</h1>
<a href="index.php"> <- Volver</a>

<?php
$num = rand(1, 100);
echo "<div class='resultado'>";
echo "<p>El número generado es: <strong>$num</strong></p>";
if ($num <= 50) {
    echo "<p>El número es menor o igual a 50.</p>";
} else {
    echo "<p>El número es mayor que 50.</p>";
}
echo "</div>";
?>

</body>
</html>
