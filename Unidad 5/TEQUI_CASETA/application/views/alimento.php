<?php
$data = $this->Administrador->veradmin();
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>" />
  <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
	<title>Alimentos</title>
</head>
	
<body>


        <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <center><img src="https://raw.githubusercontent.com/SierraLynn/Ingenieria_Software/master/101.png"  width="350" height="260" alt=""></center>
        <table class="table table-striped">
                     <tr>
                          <th>ID</th>
                    <th>Tipo</th> 
                    <th>Analisis_garantizado</th>
                  </tr>

            <?php 
            	foreach($data as $fila)
            	{
             ?>
              <tr>
                <td class="form"><?=$fila['id_alimento'];?></td>
                <td><?=$fila['Tipo'];?></td> 
                <td><?=$fila['analisis_garantizado'];?></td>
                
              </tr>
              <tr>
                <td></td>
                <td></td> 
                <td></td>
              </tr>
            <?php 
            }
            ?>
            </table>
                 <center>  
        <a type="button" class="btn btn-warning" href=" agreAli" >Agregar</a>
        <a type="button" class="btn btn-warning" href="editAli" >Editar</a>
        <a type="button" class="btn btn-warning" href="menu" >Menu</a>
        </center>
          </div>
        </div>
    </body>
     </html>
