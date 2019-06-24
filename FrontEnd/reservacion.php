<!DOCTYPE html>
<html>
<?php 
session_start();
include("services/apifunctions.php");
include("services/resources.php"); //Export api URL
if(!empty($_GET['id_res'])){
  $url = $apiurl . "departamento/" . $_GET['id_res'] ; //concat the api url with the uri of the service
  $dataDepartamento=getDataapi($url);
  $_SESSION['id_d']=$_GET['id_res'];
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
            <p class="text-center">Reserva para tu departamento</p>
            <form action="creservacion.php" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input  class="form-control" placeholder="<?php echo $dataDepartamento[0]['nombre'] ?>" type="text" disabled >
            </div> <!-- form-group// -->

            <p class="text-center"># Personas</p>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                </div>
                <select class="form-control" id="persona">
                    <option disabled selected="">Personas</option>
                    <option>1</option> <option>2</option> <option>3</option> <option>4</option> 
                    <option>5</option> <option>6</option><option>7</option> <option>8</option> 
                </select>
            </div> <!-- form-group end.// -->

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
            
            <p class="text-center">Check Out</p>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
                </div>
                <select class="form-control" id="diao">
                    <option disabled selected="">Día</option>
                    <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                    <option>7</option> <option>8</option> <option>9</option> <option>10</option> <option>11</option> <option>12</option>
                    <option>13</option> <option>14</option> <option>15</option> <option>16</option> <option>17</option> <option>18</option>
                    <option>19</option> <option>20</option> <option>21</option> <option>22</option> <option>23</option> <option>24</option>
                    <option>25</option> <option>26</option> <option>27</option> <option>28</option> <option>29</option> <option>30</option>
                    <option>31</option> 
                </select>
                <select class="form-control" id="meso">
                    <option disabled selected="">Mes</option>
                    <option>01</option><option>02</option><option>03</option>
                    <option>04</option><option>05</option><option>06</option>
                    <option>07</option><option>08</option><option>09</option>
                    <option>10</option><option>11</option><option>12</option>
                </select>
                <select class="form-control" id="anioo">
                    <option disabled selected="">Año</option>
                    <option>2019</option>
                    <option>2020</option>
                </select>
            </div> <!-- form-group end.// -->
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Reserva  </button>
            </div> <!-- form-group// -->      
        <input type="text" id="personaSeleccionado" name="personas" hidden  >     
        <input type="text" id="diaiSeleccionado" name="diai" hidden  >         
        <input type="text" id="mesiSeleccionado" name="mesi" hidden  >    
        <input type="text" id="anioiSeleccionado" name="anioi"   > 
        <input type="text" id="diaoSeleccionado" name="diao" hidden  > 
        <input type="text" id="mesoSeleccionado" name="meso" hidden  > 
        <input type="text" id="aniooSeleccionado" name="anioo"   >                                                  
        </form>
</article>
		</div>
	</div>
</div>
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
        $(document).on('change', '#diao', function(event) {
         $('#diaoSeleccionado').val($("#diao option:selected").text());
        });
        $(document).on('change', '#meso', function(event) {
         $('#mesoSeleccionado').val($("#meso option:selected").text());
        });
        $(document).on('change', '#anioo', function(event) {
         $('#aniooSeleccionado').val($("#anioo option:selected").text());
        });
</script>
</body>
</html>