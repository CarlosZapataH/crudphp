<?php
require 'config.php';
$nombre=$_REQUEST['nombres'];
$apepat=$_REQUEST['apepat'];
$apemat=$_REQUEST['apemat'];
$dni=$_REQUEST['dni'];
$codigo=$_REQUEST['codigo'];

$sql="UPDATE alumnos SET nombres='$nombre', apepat='$apepat', apemat='$apemat', dni='$dni' WHERE codigo='$codigo'";


if ($conn->query($sql)) {
	echo "1";
}else{
	echo "0";

};

?>