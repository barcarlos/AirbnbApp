<!DOCTYPE html>
<html>
<head>
<?php 

include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
session_start();
?>
	<title>Registrate</title>
   <!--Made with love by Mutiullah Samim -->
   <meta charset="UTF-8">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/stylesRegistrarse.css">
</head>
<body>
<?php 
                $url = $apiurl . "usuario/" . $_SESSION['id'] ; //concat the api url with the uri of the service
                $data=getDataapi($url) ;
                ?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		<article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Registrate</h4>
            <p class="text-center">Crea una cuenta y empieza a buscar aventuras</p>
            <form action="registro.php" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input  class="form-control" value="<?php echo $data[0]['nombre']?>" placeholder="Nombre Completo" type="text" name="nombre">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input  class="form-control" value="<?php echo $data[0]['correo']?>" placeholder="Correo" type="email" name="correo">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
                 </div>
                <input  class="form-control" value="<?php echo $data[0]['edad']?>" placeholder="Edad" type="text" name="edad">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                 </div>
                <input  class="form-control" value="<?php echo $data[0]['fecha_nacimiento']?>" placeholder=" Fecha nacimiento(AAAA-MM-DD)" type="text" name="fecha">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="custom-select" style="max-width: 100px;">
                    <option diabled selected="">+449</option>
                    <option value="1">+449</option>
                    <option value="2">+449</option>
                    <option value="3">+449</option>
                </select>
                <input  class="form-control" value="<?php echo $data[0]['telefono']?>" placeholder="Número de teléfono" type="text" name="telefono">
            </div> <!-- form-group// -->
            <div class="form-group input-group" >
                <div>
                    <div class="input-group-prepend" id="chkbx" >
                    <span class="input-group-text"> <i class="fas fa-male"></i> </span>
                 </div>
                </div>
               <input class="radio" type="radio"  value="male" name="sexo"><div class="chckbx" style="margin-top: 3px;">Hombre</div>
                <div>
                    <div class="input-group-prepend" style="margin-left: 65">
                    <span class="input-group-text"> <i class="fas fa-female"></i> </span>
                   <input class="radio" type="radio"  value="female" name="sexo"><div class="chckbx" style="margin-top: 3px;">Mujer</div>
                    </div>
                </div>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-location-arrow"></i> </span>
                 </div>
                <input  class="form-control"  value="<?php echo $data[0]['direccion']?>" placeholder="Dirección" type="text" name="direccion">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i> </span>
                 </div>
                <input  class="form-control"  value="<?php echo $data[0]['estado']?>" placeholder="Estado" type="text" name="estado">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-user-circle"></i> </span>
                </div>
                <select class="form-control" id="tipo">
                    <option disabled selected="">value="<?php echo $data[0]['tipo']?>"</option>
                    <option>Anfitrion</option>
                    <option>Huésped</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Cambiar contraseña" type="password" name ="contrasena">
            </div> <!-- form-group// -->                                      
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Crear cuenta  </button>
        </div> <!-- form-group// -->      
        <p class="text-center">Tienes una cuenta? <a href="iniciarSesion.html">Inicia sesión</a> </p>  
        <input type="text" id="tipoSeleccionado" name="tipo" hidden  >                                                               
        </form>
</article>
		</div>
	</div>
</div>
<script>
        $(document).on('change', '#tipo', function(event) {
         $('#tipoSeleccionado').val($("#tipo option:selected").text());
        });
    </script>
</body>
</html>