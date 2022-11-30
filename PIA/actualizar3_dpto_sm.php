<?php
$con=mysqli_connect("localhost","root", "", "supermercado_5l4");

if(!$con){
	echo "fallo";
	die(mysqli_error($con));
}

$CLAVE = $_POST['Clave_dpto']; 
$DPTO = $_POST['Departamento']; 
$TIP = $_POST['Tipo_dpto']; 
$PAS = $_POST['Pasillo_dpto']; 

$SQLQ = "UPDATE departamento SET Departamento = '$DPTO', Tipo_dpto = '$TIP', Pasillo_dpto = '$PAS' WHERE Clave_dpto ='$CLAVE'";
mysqli_query($con , $SQLQ);

header("Location:actualizar_dpto_sm.php"); 
mysqli_close($con);
?>