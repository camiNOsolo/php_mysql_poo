<?php

include("motor.php");

$client = new cliente();

if($_POST){
	$client->nombre = mysql_real_escape_string($_POST['txtNombre']);
	$client->password = md5($_POST['txtPassword']);
	$client->descuento = $_POST['txtDescuento'];
	$client->fechaRegistro = $_POST['txtFecha'];
	$client->sexo = $_POST['txtSexo'];

$client-> agregar();
}


?>

<html>
<head>
<title>Base de Datos Tienda</title>
</head>
<body>
<div class='cuerpo'>
<fieldset>
<legend>FORMULARIO PARA NUEVOS CLIENTES</legend>
<form action="" method="POST">
<table>
	<tbody>
		<tr>
			<td>Nombre</td>
			<td><input type='text' name='txtNombre' /></td>
		</tr>
		<tr>
			<td>Contraseña</td>
			<td><input type='text' name='txtPassword' /></td>
		</tr>
		<tr>
			<td>Descuento</td>
			<td><input type='number' name='txtDescuento' />%</td>
		</tr>
		<tr>
			<td>Fecha</td>
			<td><input type='date' name='txtFecha' /></td>
		</tr>
		<tr>
			<td>Sexo</td>
			<td><label for='txtMasculino'>
				<input type='radio' id='txtMasculino' value='masculino' name='txtSexo' />Masculino</label>
			    <label for='txtFemenino'>
				<input type='radio' id='txtFemenino' value='femenino' name='txtSexo' />Femenino</label></td>
		</tr>
		<tr>
			<td><button type='submit'>Guardar</button></td>
		</tr>
	</tbody>
</table>
</form>
</fieldset>
<fieldset>
<legend><h1>Clientes Agregados</h1></legend>
<table border="1">
<thead>
	<tr>
		<th>Nombre</th>
		<th>Contraseña</th>
		<th>Descuento</th>
		<th>Fecha Ingreso</th>
		<th>Sexo</th>
	</tr>
</thead>

<tbody>

<?php
	$clientes = $client->mostrar();
	foreach($clientes as $cliente){
		echo "<tr>
				<td>{$cliente['nombre']}</td>
				<td>{$cliente['password']}</td>
				<td>{$cliente['descuento']}</td>
				<td>{$cliente['fechaRegistro']}</td>
				<td>{$cliente['sexo']}</td>
			  </tr>";


	}


?>

</tbody>
</table>
</fieldset>
</body>
</html>
