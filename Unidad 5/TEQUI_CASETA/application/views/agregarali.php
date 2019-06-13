<!DOCTYPE html>
<html>
<head>
<title>Agregar alimento</title>
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>

<br>
<hr>
<div class="row"> 
	<div class="col-xs-10 col-xs-offset-1">
		<form action="<?php echo base_url();?>index.php/Inicio/agregarali" method="POST">
		  <div class="form-group">
		  	 
		    <label for="text">Tipo:</label>
		    <input type="text" class="form-control" name="Tipo">
		  </div>
			<div class="form-group">
		    <label for="text">Analisis_garantizado:</label>
		    <input type="text" class="form-control" name="analisis_garantizado">
		  </div>
			
		  <input type="submit" name="Guardar">
 </div>
		</form>
	</div>
</div>


</body>
</html>