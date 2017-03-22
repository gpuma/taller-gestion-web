<?php

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
?>
<html>
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
        
        <h2>Generando una tabla a partir de un arreglo 2d</h2>
        <table>
            <?php
                for($i=0;$i<$m;$i++)
                {
                    echo '<tr>';
                    for($j=0;$j<$n;$j++)
                    {
                        echo '<td>'.$matriz[$i][$j].'</td>';
                    }
                    echo '</tr>';
                }
            ?>
        </table>
        <?php echo '<pre>'; print_r($matriz);?>
    </body>
</html>