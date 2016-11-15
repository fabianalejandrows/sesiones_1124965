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
<a class="waves-effect waves-light btn red" href="Cancelar_Car.php">Realizar una Compra</a>
</body>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/materialize.js"></script>
	<script>
		$(document).ready(function() {
    	$('select').material_select(); 
    	});
	</script>
</html>