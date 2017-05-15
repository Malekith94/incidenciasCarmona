<?php
    include("conexion.php");

    $result = mysql_query("SELECT * FROM inventario");

    echo "<table class="centered responsive-table highlight bordered">";

    echo "<thead>";

    echo "<tr>";

    echo "<th>idHerramienta</th>";
    echo "<th>Nombre</th>";
    echo "<th></th>";

    echo "</tr>";

    echo "</thead>";

    echo "<tbody>";

    while($row=mysql_fetch_row($result)){
        echo "<tr>";

        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";

        echo "<td>";
        echo "<p>";
        echo "<input type="checkbox" id="test1"/>";
        echo "<label for="test1">Confirmar</label>";
        echo "</p>";
        echo "</td>";
        echo "</tr>";

    }

    echo "</table>"
?>