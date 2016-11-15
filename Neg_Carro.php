<?php 
	@$Producto=$_POST['Producto'];
	@$Precio=$_POST['precio'];
	@$cantidad=$_POST['cant'];
	/*-------------------------------------------*/
	session_start();
	$_SESSION['cont']=$_SESSION['cont']+1;
	
	$cont=$_SESSION['cont'];
	$CarroTemp=$Precio*$cantidad;

	$_SESSION['productos'][$cont]=$Producto;
	$_SESSION['precio'][$cont]=$Precio;
	$_SESSION['cantidad'][$cont]=$cantidad;
	$_SESSION['total'][$cont]=$CarroTemp;
	$contT=1;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carro</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
</head>
<body class="container">
	<div class="table">

	
	
	
		<?php
		echo "<strong>Producto---------Precio---------Cantidad------  Total Compra</strong>   </br></br>"; 
					while ($contT<=$cont){
						
						echo $_SESSION['productos'][$contT]; echo "-----";
						echo $_SESSION['precio'][$contT]; echo "-----";
						echo $_SESSION['cantidad'][$contT];echo "-----";
						echo 'Precio de Compra: $'.$_SESSION['total'][$contT];  echo "</br>";
						$contT=$contT+1;
					}
					echo "Total de la Compra: ";
					$_SESSION['Total_compra']=$_SESSION['Total_compra']+$_SESSION['total'][$cont];
				?>
				<?php echo "$".$_SESSION['Total_compra']."<br>"; ?>
	</div>
    <p>&nbsp;</p>
    <p><a href="Cancelar_Car.php">Cancelar Compra</a></p>
</body>
</html>