<!DOCTYPE html>
<html>
<head>
	<title>Editar casetas</title>
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<body>

<br>
<hr>
<div class="row"> 
	<div class="col-lg-4 col-lg-offset-4 col-xs-12">
		<form action="editarcas" method="POST">
		 <div class="form-group">
		     <label for="text">ID:</label>
		    <input type="text" class="form-control" name="id_caseta">
	
		    <label for="text">Numero:</label>
		    <input type="text" class="form-control" name="Numero">
		  </div>
			<div class="form-group">
		    <label for="text">Peso:</label>
		    <input type="text" class="form-control" name="Peso">
		  </div>
			<div class="form-group">
		    <label for="text">Fecha de llegada:</label>
		    <input type="text" class="form-control" name="Fecha_llegada">
		  </div>
		  <div class="form-group">
		    <label for="text">ID alimento:</label>
		    <input type="text" class="form-control" name="id_alimento" >
		  </div>
		  <div class="form-group">
		    <label for="text">ID etapa:</label>
		    <input type="text" class="form-control" name="id_etapa" >
		  </div>
		
		  <input type="submit" name="Editar datos">
</div>
		</form>
	</div>
</div>

</body>
</html>