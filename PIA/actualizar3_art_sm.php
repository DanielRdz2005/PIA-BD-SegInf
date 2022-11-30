<?php
$con=mysqli_connect("localhost","root", "", "supermercado_5l4");

if(!$con){
	echo "fallo";
	die(mysqli_error($con));
}

$CLAVE = $_POST['Clave_art']; 
$PRODUCTO = $_POST['Producto']; 
$PRECIO = $_POST['Precio']; 
$DPTO = $_POST['Departamento']; 
$PROV = $_POST['Proveedor']; 

$SQLQ = "UPDATE articulos SET Producto = '$PRODUCTO', Precio = '$PRECIO', Departamento = '$DPTO', Proveedor = '$PROV' WHERE Clave_art ='$CLAVE'";
mysqli_query($con , $SQLQ);

header("Location:actualizar_art_sm.php"); 
mysqli_close($con);
?>