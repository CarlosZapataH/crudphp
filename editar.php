<?php
require 'config.php';
$codigo=$_REQUEST['xcode'];
$sql="SELECT * FROM alumnos WHERE codigo='$codigo'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<form >";
	while($row = $result->fetch_assoc()) {
		echo"
		<div class='form-group'>
			<label for='exampleInputEmail1'>Codigo:</label>
			<input type='text' id='codigo' class='form-control' value='".$row['codigo']."' required=''>
		</div>
		<div class='form-group'>
			<label for='exampleInputEmail1'>Nombres:</label>
			<input type='text' id='nombres' class='form-control' value='".$row['nombres']."' required=''>
		</div>
		<div class='form-group'>
			<label for='exampleInputEmail1'>A. Paterno:</label>
			<input type='text' id='apepat' class='form-control' value='".$row['apepat']."' required=''>
		</div>
		<div class='form-group'>
			<label for='exampleInputEmail1'>A. Materno:</label>
			<input type='text' id='apemat' class='form-control' value='".$row['apemat']."' required=''>
		</div>
		<div class='form-group'>
			<label for='exampleInputEmail1'>DNI:</label>
			<input type='text' id='dni' class='form-control' value='".$row['dni']."' required=''>
		</div>
		<div class='form-group'>
		<input type='button' class='btn btn-primary' onclick='Update();' value='Actualizar'>

		</div>
		";
	};
	echo "</form>";

}

?>