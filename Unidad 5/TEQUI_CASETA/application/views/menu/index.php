<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url("css/fontello.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("css/estilos.css");?>">
</head>
<body>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!--carrousel section-->
    <section>
       
            <div class="row">
                <div class="col-12">
                    <div class="bd-example">
                    	<br>
                    	<br>
                           <!--menu-->
   <div class="continer-fluid bg-inverse fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <a class="navbar-brand" href="#"><img src="https://raw.githubusercontent.com/SierraLynn/Ingenieria_Software/master/pollito-chicken.png" width="50" height="50" alt=""> 
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active mr-md-4 text-white" href="Cas">Casetas <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link active mr-md-4 text-white" href="Ali">Alimentos<span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link active mr-md-4 text-white" href="Eta">Etapas<span class="sr-only">(current)</span></a>
              <div><a href="logout" class="btn btn-danger">Cerrar sesion</a></div>
          </div>
      </div>
      </div>
    </nav>
   </div>
                        <br> 
                        <br>
                          <div class="container">
                        <div class="bd-example">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <center><img src="<?php echo base_url("img/huevos.jpg");?>"></center>
                                         
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>TEQUIS-CASETA</h5>
                                            <p>Los hechos demuestran nuestros pollos con lo mejor</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                       <center><img src="<?php echo base_url("img/huevos.jpg");?>"></center>
                                            
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>TEQUIS-CASETA</h5>
                                            <p>El gusto de la vida deberia ser tan bueno como el cuidar pollos</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <center><img src="<?php echo base_url("img/huevos.jpg");?>"></center>
                                          
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>TEQUIS-CASETA</h5>
                                            <p>Nosotros tenemos el mejor lugar para tus pollos</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="jumbotron">
                            <h1 class="display-4">Nuestros locales!</h1>
                            <br>
                            <br>
                            <hr class="my-4">
                            <br>
                            <br>
                            <div class="card-deck">
                            	<br> 
                        <br>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://static.iris.net.co/dinero/upload/images/2017/6/1/246097_1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                     
                                      <p class="card-text">Se acaba de sumar a uno de los grupos empresariales más sólidos del sector</p>
                              
                                    </div>
                                  </div>
                                  <div class="card" style="width: 18rem;">
                                    <img src="https://raw.githubusercontent.com/SierraLynn/Ingenieria_Software/master/pollos1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    
                                      <p class="card-text">Pollo de engorda en nuestro país es resultado de un esfuerzo importante en la industria avícola.</p>
                                    </div>
                                  </div>
                                  <div class="card" style="width: 18rem;">
                                    <img src="https://raw.githubusercontent.com/SierraLynn/Ingenieria_Software/master/q.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      
                                      <p class="card-text">Alta velocidad de crecimiento, Son de hábitos libre, Son felices</p>
                                     
                                    </div>
                                  </div>
                            </div>           
                          </div>
                    </div>
                </div>
            </div>
    </section>



    </div>
    </div>
    </div>
    <div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

<section id="info">
	<h3>Pollo perfeccion en su maxima expresion, Categoria:</h3>
	<div class="contenedor">
	<div class="info-pet">
		<img src="<?php echo base_url("img/pollo1.jpg");?>">
			<h4>Gallinas</h4>
		</div>
		<div class="info-pet">
			<img src="<?php echo base_url("img/huevos.jpg");?>">
		
			<h4>Huevos</h4>
		</div>
		<div class="info-pet">
			<img src="<?php echo base_url("img/pollo.2.png");?>">
			<h4>Pollitos</h4>
		</div>
		<div class="info-pet">
			<img src="<?php echo base_url("img/pollos.5.jpg");?>">
			<h4>Casetas</h4>
		</div>
	</div>
</section>
</main>

<footer>
	<div class="contenedor">
		<center><p class="copy">Tequis-Caseta &copy; 2019</p></center>
		
			
	</div>
</footer>
</body>
</html>