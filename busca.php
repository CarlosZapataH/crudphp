<?php  
require 'config.php';

$nombre = $_REQUEST['nombre'];
$tipo = $_REQUEST['xchek'];

if ($tipo=="nom") {
	$sql="SELECT * FROM alumnos where nombres LIKE '%$nombre%'";
}else{
	$sql="SELECT * FROM alumnos where apepat LIKE '%$nombre%'";
}


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo '<table class="table table-hover">
	<tr>
		<th>Codigo</th>
		<th>Nombre</th> 
		<th>Apellidos</th>
		<th>DNI</th>
		<th>eliminar</th>
		<th>Editar</th>
	</tr>';
	while($row = $result->fetch_assoc()) {
		echo "<tr>
		<td>".$row["codigo"]."</td>
		<td>".$row["nombres"]."</td>
		<td>".$row["apepat"]." ".$row["apemat"]."</td>
		<td>".$row["dni"]."</td>
		<td><a class='glyphicon glyphicon-remove' onclick='Eliminar(".$row["codigo"].");'></a></td>
		<td><a class='glyphicon glyphicon-wrench' onclick='Editar(".$row["codigo"].");'></a></td>
	</tr>";
};
echo "<table>";
}

?>