<meta charset="utf-8">
<body>
<style type="text/css">

.button-30 {
  align-items: center;
  appearance: none;
  background-color: #FCFCFD;
  border-radius: 4px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  color: #FF0000;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 50px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 20px;
}

.button-30:focus {
  box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-30:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-30:active {
  box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);
}
body{
	background-color: #CC2222;
	color: white;
	font-family: courier, arial, helvetica;
	font-size: 30px;
}
</style>
<?php
	echo "<center> <br><br>";
	$nom=$_POST['txtusuario'];
	$pass=$_POST['txtpassword'];

	if ($nom=="2065490" and $pass=="VDK2rdRR"){
		$con = mysqli_connect("localhost", "root", "", "supermercado_5l4");
		echo "<p class='texto'>";
		echo " <b>Bienvenido a  Actualizar Departamentos SuperMex, Usuario:" .$nom. "</b>";
		echo "</p>";
	}

	else {
		echo "<h2> Fallo, usuario o contraseña incorrecta </h2>";
		echo "<a href='inicio_sesion_borrar_dpto.html'> Regresar </a>";
		die(mysqli_error());
	}
?>
<br>
<br>
<a href="form_borrar_dpto.html" class="button-30">Ir a Borrar</a>
</body>