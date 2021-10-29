<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar personas</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>nombre</th>";
echo "<th>edad</th>";
echo "<th>Actualizar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

foreach ($listaPersonas as $persona) {

    echo "<tr>";
    echo "<td>{$persona['name_persona']}</td>";
    echo "<td>{$persona['age_persona']}</td>";

    echo "<td><a type='button' class='btn btn-primary' href='actualizar.php?id={$persona['id_persona']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";

    echo "<td><a type='button' class='btn btn-danger' href='eliminar.php?id={$persona['id_persona']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">Borrar</a></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";
