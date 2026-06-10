<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alumnos</title>
</head>
<body>

<h2>Lista de Alumnos</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Carrera</th>
        <th>Ciclo</th>
    </tr>

<?php

$sql = "SELECT * FROM alumnos";  // Muestrame toda la información de la tabla alumnos
$resultado = mysqli_query($conn, $sql);
// PHP toma la consulta que está guardada en $sql, la envía a MySQL mediante la conexión $conn y guarda la respuesta en la variable $resultado

while($fila = mysqli_fetch_assoc($resultado)){
// Esta línea sirve para leer los datos de la base de datos uno por uno. Cada dato que encuentra lo guarda en la variable $fila para poder mostrarlo en la pantalla



?>



<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombres']; ?></td>
    <td><?php echo $fila['apellidos']; ?></td>
    <td><?php echo $fila['carrera']; ?></td>
    <td><?php echo $fila['ciclo']; ?></td>
</tr>

<?php
}
?>

</table>

<?php

$sql_total = "SELECT COUNT(*) AS total FROM alumnos";
// cuentame cuántos alumnos en total hay en la tabla alumnos

$resultado_total = mysqli_query($conn, $sql_total);
// Esta línea envía la consulta a la base de datos para que la ejecute y guarda la respuesta en la variable $resultado_total


$fila_total = mysqli_fetch_assoc($resultado_total);
// Esta línea recoge el resultado de la consulta y lo guarda en la variable $fila_total


echo "<h3>Total de alumnos registrados: ".$fila_total['total']."</h3>";

?>


</body>
</html>