<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Punto 7 - Estructura condicional (if)</title>
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

<h1>Punto 7 - Estructura condicional (if)</h1>
<a href="index.php"> <- Volver</a>
<p>Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número generado.</p>

<?php
$valor = rand(1, 3);

echo "<div class='resultado'>";
echo "<p>El número generado es: <strong>$valor</strong></p>";

// if
if ($valor == 1) {
    echo "<p>El número en texto es: <strong>uno</strong>.</p>";
} elseif ($valor == 2) {
    echo "<p>El número en texto es: <strong>dos</strong>.</p>";
} else {
    echo "<p>El número en texto es: <strong>tres</strong>.</p>";
}

echo "</div>";
?>

</body>
</html>
