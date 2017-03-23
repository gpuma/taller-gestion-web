<?php
//arreglos
//autor: Gustavo H. Puma Tejada

//también podemos especificar una cadena multilínea
echo '<html>
    <title>Arreglos</title>
    <h1>Usando arreglos</h1>';

//creación de un arreglo
$paises = array('Perú','Tailandia','Japón','Australia','Nueva Zelanda');
//la sgte. línea es equivalente a la de arriba
$paises = ['Perú','Tailandia','Japón','Australia'];

//tamaño de un array
$tam_paises = count($paises);

//para acceder al elemento de un array utilizamos corchetes
//En PHP los índices comienzan en CERO.
//el siguiente código imprime Perú
echo $paises[0];

echo "<h2>Imprimiendo un país por línea</h2>";

//foreach es una versión simple del FOR
//itera sobre todos los elementos de un array
foreach($paises as $pais)
{
    //imprime cada ítem en un párrafo
    echo "<p>$pais</p>";
}

/*lista de países*/
echo "<h2>Lista de países</h2>";
//en HTML una lista se define con el tag <ul>
echo '<ul>';
foreach($paises as $pais)
{
    //imprime cada ítem en un párrafo
    echo "<li>$pais</li>";
}
//no olvidemos cerrar los tags
echo '</ul>';
echo '</html>';
?>
