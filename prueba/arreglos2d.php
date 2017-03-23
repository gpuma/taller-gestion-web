<?php

/* arreglos2d.php
 * autor: Magíster Gustavo H. Puma Tejada
 */

//declaramos un arreglo multidimensional (2d)
//de la siguiente manera

$matriz = array(array(1,2,3),
                array(4,5,6),
                array(7,8,9),
                array(10,11,12));

//número de filas
$m=count($matriz);
//número de columnas
$n=count($matriz[0]);

//genera una tabla HTML de un arreglo 2d usando un For
function imprimirArreglo2dConFor($arreglo)
{
    //número de filas
    $m=count($arreglo);
    //número de columnas
    $n=count($arreglo[0]);
    
    echo '<table>';
    for($i=0;$i<$m;$i++)
    {
        echo '<tr>';
        for($j=0;$j<$n;$j++)
        {
            echo '<td>'.$arreglo[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

//genera una tabla HTML de un arreglo 2d usando un Foreach
function imprimirArreglo2dConForEach($arreglo)
{
    echo '<table>';
    foreach($arreglo as $fila)
    {
        echo '<tr>';
        foreach($fila as $celda)
        {
            echo "<td>$celda</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}

?>

<html>
    <form action="calculo2d.php" method="POST">
    <head>
        <title>Arreglos 2d</title>
        <!-- aquí podemos poner cualquier estilo (CSS)
            a aplicar a nuestro formulario-->
        <style>
            table, th, td {
                border: solid black 1px;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>Trabajando con arreglos 2d y tablas</h1>
        <h2>Ejemplo de tabla en HTML</h2>
        <table>
            <!-- el tag tr (table row) define una fila
                una fila consiste de columnas-->
            <tr>
                <!-- el tag th (table header) define una cabecera
                    es opcional; existen tablas sin cabeceras-->
                <th>País</th>
                <th>Idioma oficial</th>
            </tr>
            <tr>
                <!-- el tag td (table data) define una celda o columna-->
                <td>Perú</td>
                <td>Español</td>
            </tr>
            <tr>
                <!-- el tag td (table data) define una celda o columna-->
                <td>Filipinas</td>
                <td>Tagalo</td>
            </tr>
            <tr>
                <!-- el tag td (table data) define una celda o columna-->
                <td>Irán</td>
                <td>Persa</td>
            </tr>
            <tr>
                <!-- el tag td (table data) define una celda o columna-->
                <td>Paises Bajos</td>
                <td>Holandés</td>
            </tr>
        </table>
        
        <h2>Generando una tabla a partir de un arreglo 2d (for)</h2>
        <?php
        imprimirArreglo2dConFor($matriz);
        ?>
        
        <h2>Generando una tabla a partir de un arreglo 2d (foreach)</h2>
        <?php
        imprimirArreglo2dConForEach($matriz);
        ?>
        
        <h2>Ingrese los elementos de la sgte. matriz de 2x3</h2>
        <table>
            <tr>
            <td>
                <input type="text" name="a" />
            </td>
            <td>
                <input type="text" name="b"/>
            </td>
            <td>
                <input type="text" name="c"/>
            </td>
            </tr>
            <tr>
            <td>
                <input type="text" name="d" />
            </td>
            <td>
                <input type="text" name="e"/>
            </td>
            <td>
                <input type="text" name="f"/>
            </td>
            </tr>
        </table>
        <button name="btnCalcular">Calcular</button>
    </body>
    </form>
</html>