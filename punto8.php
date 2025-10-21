<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Punto 8 - Estructuras repetitivas</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f3e8ff;
    color: #333;
    padding: 20px;
}
h1 {
    color: #4a0072;
}
a {
    display: inline-block;
    background-color: #b366ff;
    color: white;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 6px;
    margin-bottom: 25px;
    transition: background 0.3s;
}
a:hover {
    background-color: #9933ff;
}
.resultado {
    background: white;
    padding: 15px 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    line-height: 1.6;
}
h2 {
    color: #6a1b9a;
    margin-top: 20px;
}
</style>
</head>
<body>

<h1>Punto 8 - Estructuras repetitivas</h1>
<a href="index.php"> <- Volver</a>
<p>Mostrar la tabla de multiplicar del 2 utilizando tres estructuras diferentes: <strong>for</strong>, <strong>while</strong> y <strong>do/while</strong>.</p>

<div class="resultado">

<?php
echo "<h2>Usando for:</h2>";
for ($i = 2; $i <= 20; $i += 2) {
    echo "2 x " . ($i / 2) . " = $i<br>";
}

echo "<h2>Usando while:</h2>";
$j = 2;
while ($j <= 20) {
    echo "2 x " . ($j / 2) . " = $j<br>";
    $j += 2;
}

echo "<h2>Usando do/while:</h2>";
$k = 2;
do {
    echo "2 x " . ($k / 2) . " = $k<br>";
    $k += 2;
} while ($k <= 20);
?>

</div>

</body>
</html>
