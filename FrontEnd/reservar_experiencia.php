<!DOCTYPE html>
<html>
<?php 
session_start();
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
if(!empty($_GET['id_exp'])){
  $url = $apiurl2 . "experiencia/" . $_GET['id_exp'] ; //concat the api url with the uri of the service
  $dataExp=getDataapi($url);
  $_SESSION['id_exp']=$_GET['id_exp'];
  //echo  "<h3>" . $dataDepartamento[0]['nombre'] . "</h3>";
}
?>
<head>
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
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		<article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Reserva</h4>
            <p class="text-center">Reserva para tu Experiencia</p>
            <form action="creservacionexp.php" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input  class="form-control" placeholder="<?php echo $dataExp[0]['descripcion']; ?>" type="text" name="Depto">
            </div> <!-- form-group// -->
            <p class="text-center">Check in</p>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                </div>
                <select class="form-control" id="diai">
                    <option disabled selected="">Día</option>
                    <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                    <option>7</option> <option>8</option> <option>9</option> <option>10</option> <option>11</option> <option>12</option>
                    <option>13</option> <option>14</option> <option>15</option> <option>16</option> <option>17</option> <option>18</option>
                    <option>19</option> <option>20</option> <option>21</option> <option>22</option> <option>23</option> <option>24</option>
                    <option>25</option> <option>26</option> <option>27</option> <option>28</option> <option>29</option> <option>30</option>
                    <option>31</option> 
                </select>
                <select class="form-control" id="mesi">
                    <option disabled selected="">Mes</option>
                    <option>01</option><option>02</option><option>03</option>
                    <option>04</option><option>05</option><option>06</option>
                    <option>07</option><option>08</option><option>09</option>
                    <option>10</option><option>11</option><option>12</option>
                </select>
                <select class="form-control" id="anioi">
                    <option disabled selected="">Año</option>
                    <option>2019</option>
                    <option>2020</option>
                </select>
            </div> <!-- form-group end.// -->  
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-bed"></i> </span>
                </div>
                <select class="custom-select" id="persona" style="max-width: 220px;">
                    <option disabled selected="">Personas</option>
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
                <select class="custom-select" id="checkin" style="max-width: 220px;">
                    <option disabled selected="">Hora</option>
                    <option value="1:00:00">1:00:00</option>
                    <option value="2:00:00">2:00:00</option>
                    <option value="3:00:00">3:00:00</option>
                    <option value="4:00:00">4:00:00</option>
                    <option value="5:00:00">5:00:00</option>
                    <option value="6:00:00">6:00:00</option>
                    <option value="7:00:00">7:00:00</option>
                    <option value="8:00:00">8:00:00</option>
                    <option value="9:00:00">9:00:00</option>
                    <option value="10:00:00">10:00:00</option>
                    <option value="11:00:00">11:00:00</option>
                    <option value="12:00:00">12:00:00</option>
                </select>
             </div>   
            <input type="text" id="personaSeleccionado" name="personas" hidden  >     
            <input type="text" id="diaiSeleccionado" name="diai" hidden  >         
            <input type="text" id="mesiSeleccionado" name="mesi" hidden  >    
            <input type="text" id="anioiSeleccionado" name="anioi"  hidden > 
            <input type="text" id="checkinSeleccionado" name="checkin"  hidden > 
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Reserva  </button>
            </div> <!-- form-group// -->                                                                   
        </form>
</article>
		
		</div>
	</div>
</div>
</body>
<script>
        $(document).on('change', '#persona', function(event) {
         $('#personaSeleccionado').val($("#persona option:selected").text());
        });
        $(document).on('change', '#diai', function(event) {
         $('#diaiSeleccionado').val($("#diai option:selected").text());
        });
        $(document).on('change', '#mesi', function(event) {
         $('#mesiSeleccionado').val($("#mesi option:selected").text());
        });
        $(document).on('change', '#anioi', function(event) {
         $('#anioiSeleccionado').val($("#anioi option:selected").text());
        });
        $(document).on('change', '#checkin', function(event) {
         $('#checkinSeleccionado').val($("#checkin option:selected").text());
        });
</script>
</html>