<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag aqui van los mios ---------->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="css/stylePrincipal.css">
</head>
<body>
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h3 class="my-heading ">Airbnb<span class="bg-main">App</span></h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars mfa-white"></span>
            </button>
            <div id="main">
                <a href="javascript:void(0)" class="openNav"><span class="fa fa-bars" onclick="openNav()"></span></a>
            </div>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <ul class="mob-ul">
             <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
          </ul>
        </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link">
                        <a class="btn btn-primary btn-block btn-login" href="panelAlojamientos.php">Regresar</a>
                    </li>
                    <li class="nav-link">
                    <a class="btn btn-primary btn-block btn-login" href="iniciarSesion.html">Logout</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    
    <header class="masthead text-white ">
        <div class="overlay">
        </div>
        <div class="container-fluid">
        <div class="row">
                <div class="col-md-8 mx-auto wow fadeInUp">
                    <h3 class="text-center font-weight-bold">Las reservas de tus alojamiento<span class="bg-main"> son:</span></h3>
                    <p class=" text-center"></p>
                </div>
            </div>
            <div class="row">
            <?php 
            include("services/apifunctions.php");
            include("services/resources.php"); //Export api URL
            session_start();
            $url = $apiurl . "reservacionesrecibidas/" . $_SESSION['id']  ; //concat the api url with the uri of the service
            $data=getDataapi($url);
            ?>
            <?php for($i=0;$i<count($data);$i++){?>              
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">
                            <div class="header"></div>
                            <div class="dates">
                                <p><?php                          
                             echo $data[$i]['nombre']; ?></p>
                            </div>
                            <div class="dates">
                                <div class="start">
                                    <strong>STARTS</strong> <?php echo $data[$i]['checkin']; ?>
                                    <span></span>
                                </div>
                                <div class="ends">
                                    <strong>ENDS</strong> <?php echo $data[$i]['checkout']; ?>
                                </div>
                            </div>
    
                            <div class="stats">
                                <div>
                                    <strong>Personas</strong> <?php echo $data[$i]['nombreusuario']; ?>
                                </div>
    
                            </div>
    
                            <div class="stats">
    
                            <li class="nav-link">
                        <a class="btn btn-primary btn-block btn-register" href="eliminarReservacion.php?id_res=<?php echo $data[$i]['id']; ?>">eliminar</a>
                    </li>
    
                            </div>
    
                        </div>
                    </div> 
                </div>
            <?php  } ?> 
            </div>
        </div>
    </header>

    

    
   
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 text-center text-lg-left my-auto  wow zoomIn">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Mojoave 2018. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right my-auto  wow zoomIn">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fa fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fa fa-twitter fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <script>
              new WOW().init();
              </script>
    <script>
        $(window).scroll( function(){

 
          var topWindow = $(window).scrollTop();
          var topWindow = topWindow * 1.5;
          var windowHeight = $(window).height();
          var position = topWindow / windowHeight;
          position = 1 - position;
        
          $('#bottom').css('opacity', position);
        
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.display = "0";
            document.body.style.backgroundColor = "white";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
            document.body.style.backgroundColor = "white";
        }

 
     $(window).on("scroll", function() {
            if ($(this).scrollTop() > 10) {
                $("nav.navbar").addClass("mybg-dark");
                $("nav.navbar").addClass("navbar-shrink");
              

            } else {
                $("nav.navbar").removeClass("mybg-dark");
                $("nav.navbar").removeClass("navbar-shrink");
               
            }
            
      

        });
        
        $(function() {
  $('#bottom').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});


</script>
<script>
    $(document).ready(function(){
      $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
</body>
</html>