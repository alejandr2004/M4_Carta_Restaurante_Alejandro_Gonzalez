<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS.css"> <!--El que está debajo es el que tiene prioridad-->
</head>
<body>
   
<?php

$i=0;

if(file_exists('menu.xml')){
    $menu = simplexml_load_file('menu.xml');
} else {
    exit('Error abriendo menu.xml');
}

echo "<div class='row'><div class='centrado'><h3>HAMBURGUESAS</h3></div></div>";

echo '<div class="row">';

foreach($menu->plato as $fila){
    if((string)$fila["tipo"] == "entrante"){
        echo '<div class="col-md-4">';
        echo '<div class="imagen"><img src="' . $fila->imagen['src'] . '"></div>';
        echo "<p>" . $fila->nombre . "</p>";
        echo "<p>" . $fila->precio . "</p>";
        echo "<p>" . $fila->descripcion . "</p>";
        echo "<p>" . $fila->calorias . "</p>";
        echo "<p>" . $fila->caracteristicas . "</p>";
        echo "</div>";
    }
}

echo "</div>"; 

echo "<div class='row'><div class='centrado'><h3>TACOS</h3></div></div>";
echo "<div class='row'></div>";

echo '<div class="row">';

foreach($menu->plato as $fila){
    if((string)$fila["tipo"] == "principal"){
        echo '<div class="col-md-4">';
        echo '<div class="imagen"><img src="' . $fila->imagen['src'] . '"></div>';
        echo "<p>" . $fila->nombre . "</p>";
        echo "<p>" . $fila->precio . "</p>";
        echo "<p>" . $fila->descripcion . "</p>";
        echo "<p>" . $fila->calorias . "</p>";
        echo "<p>" . $fila->caracteristicas . "</p>";
        echo "</div>";
    }
}

echo "</div>"; 

echo "<div class='row'><div class='centrado'><h3>HELADOS</h3></div></div>";
echo "<div class='row' class='postre'></div>";

echo '<div class="row">';

foreach($menu->plato as $fila){
    if((string)$fila["tipo"] == "postre"){
        echo '<div class="col-md-4">';
        echo '<div class="imagen"><img src="' . $fila->imagen['src'] . '"></div>';
        echo "<p>" . $fila->nombre . "</p>";
        echo "<p>" . $fila->precio . "</p>";
        echo "<p>" . $fila->descripcion . "</p>";
        echo "<p>" . $fila->calorias . "</p>";
        echo "<p>" . $fila->caracteristicas . "</p>";
        echo "</div>";
    }
}

echo "</div>"; 
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
