<html>
    <form action="resultado.php" method="POST">
        <h1>Operaciones básicas con funciones</h1>
        <!-- el tag <p> (párrafo) es una manera
        más elegante de hacer saltos de línea-->
        <p>
            Número 1 <input type="text" name="txtNum1"/>
        </p>
        <p>
            Número 2 <input type="text" name="txtNum2"/>
        </p>
        <p>
            Operación
        <select name="cmbOperacion">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        </p>
        <input type="submit" name="btnEnviar"/>
    </form>
</html>