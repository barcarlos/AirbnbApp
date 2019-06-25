<!DOCTYPE html>
<html>
<head>
<?php 

include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
session_start();
?>
	<title>Actualiza tus alojamientos</title>
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
	<link rel="stylesheet" type="text/css" href="css/stylesEditarAlojamiento.css">
</head>
<body>
<?php
    $url = $apiurl . "departamento/31" ; //concat the api url with the uri of the service
                $data=getDataapi($url) ; //Export api URL?>
    <div class="container">
	    <div class="d-flex justify-content-center h-100">
		    <div class="card">
		        <article class="card-body mx-auto" style="max-width: 580px;">
                    <h4 class="card-title mt-3 text-center">Actualiza tus alojamientos</h4>
                    <form action="editarHospedaje.php" method="post">
                       <input type="text" id="array" name="amenidad" hidden >
                               
                                <input type="text" value="<?php echo $data[0]['habitaciones']?>" id="cuartoSeleccionado" name="cuartos" hidden >
                                <input type="text" value="<?php echo $data[0]['camas']?>" id="camaSeleccionada" name="camas" hidden >
                                <input type="text" value="<?php echo $data[0]['banos']?>" id="banoSeleccionado" name="banos" hidden  >
                                <input type="text" value="<?php echo $data[0]['checkin']?>" id="checkinSeleccionado" name="checkin" hidden  >
                                <input type="text" value="<?php echo $data[0]['checkout']?>" id="checkoutSeleccionado" name="checkout" hidden  >
                                
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="nombre" class="form-control" value="<?php echo $data[0]['nombre']?>" placeholder="Nombre del Departamento" type="text" cols="32" rows="3">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend" style=" margin-bottom:  18px;">
                                <span class="input-group-text"> <i class="fas fa-bars"></i> </span>
                                <textarea class="form-control" placeholder="Descripción" name="descripcion" id="" cols="50" rows="2"><?php echo $data[0]['descripcion']?></textarea>
                            </div>
                            <div class="form-group input-group" >
                                <div class="input-group-prepend" >
                                    <span class="input-group-text"> <i class="fas fa-location-arrow"></i> </span>
                                 </div>
                                <input name="direccion" class="form-control" value="<?php echo $data[0]['ubicacion']?>" placeholder="Dirección" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-dollar-sign"></i> </span>
                                </div>
                                <input class="form-control" name ="precio" value="<?php echo $data[0]['precio_noche']?>" placeholder="Precio por noche" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-bed"></i> </span>
                                </div>
                                <select id="camas" class="custom-select" style="max-width: 120px;">
                                    <option disabled selected="">Camas</option>
                                    <option value="1" <?php if($data[0]['camas'] == 1): ?> selected <?php endif; ?>>1</option>
                                    <option value="2" <?php if($data[0]['camas'] == 2): ?> selected <?php endif; ?>>2</option>
                                    <option value="3" <?php if($data[0]['camas'] == 3): ?> selected <?php endif; ?>>3</option>
                                    <option value="4" <?php if($data[0]['camas'] == 4): ?> selected <?php endif; ?>>4</option>
                                    <option value="5" <?php if($data[0]['camas'] == 5): ?> selected <?php endif; ?>>5</option>
                                    <option value="6" <?php if($data[0]['camas'] == 6): ?> selected <?php endif; ?>>6</option>
                                </select>
                                <div class="input-group-prepend" style="margin-left: 20px">
                                    <span class="input-group-text"> <i class="fas fa-door-closed"></i> </span>
                                </div>
                                <select id="cuartos"  class="custom-select" style="max-width: 120px;">
                                    <option disabled selected="">Cuartos</option>
                                    <option value="1" <?php if($data[0]['habitaciones'] == 1): ?> selected <?php endif; ?>>1</option>
                                    <option value="2" <?php if($data[0]['habitaciones'] == 2): ?> selected <?php endif; ?>>2</option>
                                    <option value="3" <?php if($data[0]['habitaciones'] == 3): ?> selected <?php endif; ?>>3</option>
                                    <option value="4" <?php if($data[0]['habitaciones'] == 4): ?> selected <?php endif; ?>>4</option>
                                </select>
                                <div class="input-group-prepend" style="margin-left: 20px">
                                    <span class="input-group-text"> <i class="fas fa-bath"></i> </span>
                                </div>
                                <select id="banos" class="custom-select" style="max-width: 120px;">
                                    <option  disabled selected="">Baños</option>
                                    <option value="1" <?php if($data[0]['banos'] == 1): ?> selected <?php endif; ?>>1</option>
                                    <option value="2" <?php if($data[0]['banos'] == 2): ?> selected <?php endif; ?>>2</option>
                                    <option value="3" <?php if($data[0]['banos'] == 3): ?> selected <?php endif; ?>>3</option>
                                    <option value="4" <?php if($data[0]['banos'] == 4): ?> selected <?php endif; ?>>4</option>
                                </select>
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend" style="margin-left: 60px;">
                                    <span class="input-group-text"> <i class="fas fa-plane-arrival"></i> </span>
                                </div>
                                <select id="checkin" class="custom-select" style="max-width: 140px;">
                                    <option  disabled selected="">Check-in</option>
                                    <option value="13" <?php if($data[0]['checkin'] == '13:00:00'): ?> selected <?php endif; ?>>13:00</option>
                                    <option value="14" <?php if($data[0]['checkin'] == '14:00:00'): ?> selected <?php endif; ?>>14:00</option>
                                    <option value="15" <?php if($data[0]['checkin'] == '15:00:00'): ?> selected <?php endif; ?>>15:00</option>
                                    <option value="16" <?php if($data[0]['checkin'] == '16:00:00'): ?> selected <?php endif; ?>>16:00</option>
                                    <option value="17" <?php if($data[0]['checkin'] == '17:00:00'): ?> selected <?php endif; ?>>17:00</option>
                                    <option value="18" <?php if($data[0]['checkin'] == '18:00:00'): ?> selected <?php endif; ?>>18:00</option>
                                    <option value="19" <?php if($data[0]['checkin'] == '19:00:00'): ?> selected <?php endif; ?>>19:00</option>
                                    <option value="20" <?php if($data[0]['checkin'] == '20:00:00'): ?> selected <?php endif; ?>>20:00</option>
                                    <option value="21" <?php if($data[0]['checkin'] == '21:00:00'): ?> selected <?php endif; ?>>21:00</option>
                                    <option value="22" <?php if($data[0]['checkin'] == '22:00:00'): ?> selected <?php endif; ?>>22:00</option>
                                    <option value="23" <?php if($data[0]['checkin'] == '23:00:00'): ?> selected <?php endif; ?>>23:00</option>
                                </select>
                                <div class="input-group-prepend" style="margin-left: 20px">
                                    <span class="input-group-text"> <i class="fas fa-plane-departure"></i> </span>
                                </div>
                                <select id="checkout" class="custom-select" style="max-width: 140px;">
                                    <option  disabled selected="">Check-out</option>
                                    <option value="8" <?php if($data[0]['checkout'] == '8:00:00'): ?> selected <?php endif; ?>>8:00</option>
                                    <option value="9" <?php if($data[0]['checkout'] == '9:00:00'): ?> selected <?php endif; ?>>9:00</option>
                                    <option value="10" <?php if($data[0]['checkout'] == '10:00:00'): ?> selected <?php endif; ?>>10:00</option>
                                    <option value="11" <?php if($data[0]['checkout'] == '11:00:00'): ?> selected <?php endif; ?>>11:00</option>
                                    <option value="12" <?php if($data[0]['checkout'] == '12:00:00'): ?> selected <?php endif; ?>>12:00</option>
                                </select>
                            </div> <!-- form-group// -->
                            
                                <input type="text" id="cuartoSeleccionado" name="cuartos" hidden >
                                <input type="text" id="camaSeleccionada" name="camas" hidden >
                                <input type="text" id="banoSeleccionado" name="banos" hidden  >
                                <input type="text" id="checkinSeleccionado" name="checkin" hidden  >
                                <input type="text" id="checkoutSeleccionado" name="checkout" hidden  >


                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Actualizar datos  </button>
                            </div> <!-- form-group// --> 
                
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