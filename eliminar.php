<?php
require 'config.php';
$codigo=$_REQUEST['xcode'];
$sql="DELETE FROM alumnos WHERE codigo='$codigo'";

if ($conn->query($sql)) {
	echo "1";
}else{
	echo "0";

};

?>