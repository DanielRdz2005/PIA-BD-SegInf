<?php

$con=mysqli_connect("localhost","root", "", "supermercado_5l4");

if(!$con){
	echo "fallo";
	die(mysqli_error($con));
}

$ClaveP = $_POST['Clave_prov']; 
$Nombre = $_POST['Nombre_prov']; 
$Direc = $_POST['Direccion_prov']; 
$Tel = $_POST['Telefono_prov']; 
$Correo = $_POST['Correo_prov'];
$Dpto = $_POST['Departamento_prov']; 
$CAP = $_POST['Clave_ArtProv'];
$CDP = $_POST['Clave_DptoProv'];   

echo "$ClaveP $Nombre $Direc $Tel $Correo $Dpto $CAP $CDP";

$SQLQ = "UPDATE proveedor SET  Nombre_prov = '$Nombre', Direccion_prov = '$Direc', Telefono_prov = '$Tel', Correo_prov = '$Correo', Departamento_prov = '$Dpto', Clave_ArtProv = '$CAP', Clave_DptoProv = '$CDP' WHERE Clave_prov='$ClaveP'";
mysqli_query($con , $SQLQ);

header("Location:actualizar_prov_sm.php"); 
mysqli_close($con);
?>