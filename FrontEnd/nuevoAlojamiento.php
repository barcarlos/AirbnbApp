<!DOCTYPE html>
<html>
<head>
	<title>Registra un nuevo alojamiento</title>
   <!--Made with love by Mutiullah Samim -->
   <meta charset="UTF-8">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/stylesNuevoAlojamiento.css">
</head>
<body>
<?php
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL?>
    <div class="container">
	    <div class="d-flex justify-content-center h-100">
		    <div class="card">
		        <article class="card-body mx-auto" style="max-width: 580px;">
                    <h4 class="card-title mt-3 text-center">Registra un nuevo alojamiento</h4>
                    <form action="alojamiento.php" method="post">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="nombre" class="form-control" placeholder="Nombre del Departamento" type="text" cols="32" rows="3">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend" style=" margin-bottom:  18px;">
                                <span class="input-group-text"> <i class="fas fa-bars"></i> </span>
                                <textarea class="form-control" placeholder="Descripción" name="descripcion" id="" cols="50" rows="2"></textarea>
                            </div>
                            <div class="form-group input-group" >
                                <div class="input-group-prepend" >
                                    <span class="input-group-text"> <i class="fas fa-location-arrow"></i> </span>
                                 </div>
                                <input name="direccion" class="form-control" placeholder="Dirección" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i> </span>
                                 </div>
                                 <?php 
                                $url = $apiurl . "estados/"; //concat the api url with the uri of the service
                                $estados=getDataapi($url)
                                 ?>
                                 <select id="estado" class="custom-select" name="estado" >
                                    <?php for($i=0;$i<count($estados);$i++){?>
                                    <option value="<?php echo $estados[$i]['id'] ;?>"><?php echo $estados[$i]['nombre']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-dollar-sign"></i> </span>
                                </div>
                                <input class="form-control" name ="precio" placeholder="Precio por noche" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-bed"></i> </span>
                                </div>
                                <select id="camas" class="custom-select" style="max-width: 120px;">
                                    <option disabled selected="">Camas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                    <option value="3">6</option>
                                </select>
                                <div class="input-group-prepend" style="margin-left: 20px">
                                    <span class="input-group-text"> <i class="fas fa-door-closed"></i> </span>
                                </div>
                                <select id="cuartos"  class="custom-select" style="max-width: 120px;">
                                    <option disabled selected="">Cuartos</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="1">4</option>
                                </select>
                                <div class="input-group-prepend" style="margin-left: 20px">
                                    <span class="input-group-text"> <i class="fas fa-bath"></i> </span>
                                </div>
                                <select id="banos" class="custom-select" style="max-width: 120px;">
                                    <option  disabled selected="">Baños</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="1">4</option>
                                </select>
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend" style="margin-left: 60px;">
                                    <span class="input-group-text"> <i class="fas fa-plane-arrival"></i> </span>
                                </div>
                                <select id="checkin" class="custom-select" style="max-width: 140px;">
                                    <option  disabled selected="">Check-in</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                    <option value="18">18:00</option>
                                    <option value="19">19:00</option>
                                    <option value="20">20:00</option>
                                    <option value="21">21:00</option>
                                    <option value="22">22:00</option>
                                    <option value="23">23:00</option>
                                </select>
                                <div class="input-group-prepend" style="margin-left: 20px">
                                    <span class="input-group-text"> <i class="fas fa-plane-departure"></i> </span>
                                </div>
                                <select id="checkout" class="custom-select" style="max-width: 140px;">
                                    <option  disabled selected="">Check-out</option>
                                    <option value="8">8:00</option>
                                    <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                </select>
                            </div> <!-- form-group// -->
                            <b class="tit">Servicios</b>
                            <?php 
                                $url = $apiurl . "amenidad/"; //concat the api url with the uri of the service
                                $data=getDataapi($url)
                            ?>
                            <?php for($i=0;$i<count($data);$i++){?>
                            <div class="form-group input-group" >
                               <input class="radio" type="checkbox" name="checks[]" value="<?php echo $data[$i]["id"]?>">
                                   <div class="chckbx" style="margin-top: 3px;">
                                       <?php echo $data[$i]["nombre"]?>
                                   </div>
                            </div> <!-- form-group// -->
                            <?php }?>
                            <label for="imagenes">
                                <div class="imgn">
                                    <input id="Imagenes" name="Imagenes" class="input-file" type="file">
                                </div>
                            <div>
                                <input type="text" id="array" name="amenidad" hidden >
                                <input type="text" id="cuartoSeleccionado" name="cuartos" hidden >
                                <input type="text" id="camaSeleccionada" name="camas" hidden >
                                <input type="text" id="banoSeleccionado" name="banos" hidden  >
                                <input type="text" id="estadoSeleccionado" name="estado" >
                                <input type="text" id="checkinSeleccionado" name="checkin" hidden  >
                                <input type="text" id="checkoutSeleccionado" name="checkout" hidden  >


                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Registrar alojamiento  </button>
                            </div> <!-- form-group// -->                                                          
                        </div>
                    </form>
                </article>
		    </div>
	    </div>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function() {

    $('[name="checks[]"]').click(function() {
        
    var arr = $('[name="checks[]"]:checked').map(function(){
        return this.value;
    }).get();
    
    var str = arr.join(',');
    $("#array").val(str);
    });

    });
</script>
<script>
    $(document).on('change', '#cuartos', function(event) {
     $('#cuartoSeleccionado').val($("#cuartos option:selected").text());
    });
</script>
<script>
    $(document).on('change', '#camas', function(event) {
     $('#camaSeleccionada').val($("#camas option:selected").text());
    });
</script>
<script>
    $(document).on('change', '#banos', function(event) {
     $('#banoSeleccionado').val($("#banos option:selected").text());
    });
</script>
<script>
    $(document).on('change', '#estado', function(event) {
     $('#estadoSeleccionado').val($("#estado value:selected").text());
    });
</script>
<script>
    $(document).on('change', '#checkin', function(event) {
     $('#checkinSeleccionado').val($("#checkin option:selected").text());
    });
</script>
<script>
    $(document).on('change', '#checkout', function(event) {
     $('#checkoutSeleccionado').val($("#checkout option:selected").text());
    });
</script>
</html>