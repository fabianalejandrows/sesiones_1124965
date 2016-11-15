<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Carro de compras</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body class="container">
	<div class="row">
		<form action="Neg_Carro.php" method="POST">
		  <div class="input-field col s3">
				<select name="Producto">
					<option disabled selected>Seleccione</option>
					<option value="Acetaminofen">Acetaminofen</option>
					<option value="Loratadina">Loratadina</option>
					<option value="Losartantan">Losartan</option>
				</select>
				<label>Seleccione el medicamento</label>
			    <p>&nbsp;</p>
			</div>
			<div class="input-field col s3">
				<input name="precio" type="text" class="validate">
      			<label for="precio">Precio</label>
			    <p>&nbsp;</p>
			</div>
			<div class="input-field col s3">
				<select name="cant">
					<option disabled selected>Seleccione</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<label>Cantidad</label>
			    <p>&nbsp;</p>
			</div>
			<div class="col s12 center">
					<button type="submit" class="waves-effect waves-light btn">Añadir al carrito</button>
			</div>
		</form>
	</div>
</body>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/materialize.js"></script>
	<script>
		$(document).ready(function() {
    	$('select').material_select(); 
    	});
	</script>
</html>