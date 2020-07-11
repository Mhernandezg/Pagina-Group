<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>GIGA-Documentos</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

            <!--CSS============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                          
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/jquery-ui.css">            
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="shortcut icon" href="../favicon.ico">
            <link rel="stylesheet" type="text/css" href="css/normalize.css" />      
            <link rel="stylesheet" type="text/css" href="css/component.css" />
            <link rel="shortcut icon" href="favicon.ico">
            <link rel="stylesheet" type="text/css" href="css/normalize.css" />
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
            <link rel="stylesheet" type="text/css" href="css/demo.css" />
            <link rel="stylesheet" type="text/css" href="css/card.css" />
            <link rel="stylesheet" type="text/css" href="css/pattern.css" />
            <script src="js/modernizr.custom.js"></script>
            
            <header id="header" id="home">
                <div class="header-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>         
                            </div>
                            <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <a class="btns" href="tel:3239300 Ext 1414-1412">3239300 Ext 1414-1412</a>
                                <a href="#"><i class="fa fa-user"></i></a>
                                <a class="btns" href="mailto:gigainvestigaciones@gmail.com">gigainvestigaciones@gmail.com</a>       
                                <a class="icons" href="3239300 Ext 1414-1412">
                                    <span class="lnr lnr-phone-handset"></span>
                                </a>
                                <a class="icons" href="mailto:gigainvestigaciones@gmail.com">
                                    <span class="lnr lnr-envelope"></span>
                                </a>        
                            </div>
                        </div>                              
                    </div>
                </div>

                <div class="container main-menu">
                    <div class="row align-items-center justify-content-between d-flex">
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                          <li class="menu-active"><a href="index.html">Inicio</a></li>
                          <li><a href="mision.html">Misión/Vision</a></li>
                          <li><a href="miembros.html">Miembros</a></li>
                          <li><a href="lineas.html">Lineas de Investigación</a></li>
                          <li><a href="proyectos.html">Proyectos realizados</a></li>      
                          <li><a href="historias.html">Historia</a></li>                                  
                          <li><a href="Objetivos.html">Objetivos/Metas</a></li>
                          <li><a href="Consultorias.html">Consultorias</a></li>   
                          <li><a href="contacto.html">Contacto</a></li>    
                          <li><blockquote cite="https://www.facebook.com/GIGA-Grupo-de-Investigaci%C3%B3n-531957177199501/?__tn__=%2Cd%2CP-R&amp;eid=ARDekVZGVYmkHv13kaz40G4jj5dqC-CHWkXyDd1dQSLlNZeKz2eCyBXwKyzqlF6lgrVJR8Axw2Bu-0Uk" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GIGA-Grupo-de-Investigaci%C3%B3n-531957177199501/?__tn__=%2Cd%2CP-R&amp;eid=ARDekVZGVYmkHv13kaz40G4jj5dqC-CHWkXyDd1dQSLlNZeKz2eCyBXwKyzqlF6lgrVJR8Axw2Bu-0Uk"><i class="fa fa-facebook"></i></a></blockquote></li>
                        </ul>
                      </nav><!-- #nav-menu-container -->
                    </div>
                </div>

                <div class="menu-social-icons">
                        
                </div>      
                
            </header><!-- #header -->
</head>
    <style>
        body{
            background-image: url('img/background.jpg');    
        }
    </style>
    <body>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;" align="center">
            <h4>Subir PDF</h4>
            <br>
            <br>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                    </tr>
                    <tr>
                       
                    </tr>    

                </table>
                
            </form>
            <br>
            <H4><a href="lista.php">Verificar archivos subidos</H4></td>            
        </div>
         <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- start footer Area -->      
            <footer class="footer-area section-gap">                    
                <div aling="center">
                    <div class="single-footer-widget mail-chimp">
                        <p align="center" >
                        <i class="fa fa-university"></i>
                            Universidad distrital Francisco Jose de Caldas                                          
                        </p>
                        <p align="center">
                        <i class="fa fa-user"></i>   Ing. Hernando Acuña Carvajal
                        </p>    
                        <p align="center">
                        <i class="fa fa-envelope outline"></i>  hacuna@udistrital.edu.co - 
                                 hernandoacu@hotmail.com
                        </p>
                        <p align="center">
                        <i class="fa fa-envelope outline"></i> gigainvestigaciones@gmail.com
                        </p>
                        <p align="center">
                        <i class="fa fa-phone"></i>  3239300 Ext 1414-1412
                        </p>
                        <p align="center">
                        <i class="fa fa-map-marker"></i>  Cra 7 No 40-53 Piso 7
                        </p>
                        <p align="center">                                  
                        <i class="fa fa-globe"></i>Bogota D.C
                        </p>
                            <p align="center">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados|| Esta pagina fue editada por GENESIS &copy 
                            </p>
                                
                    </div>
                </div>
                                    
                        
                <div align="center">
                    <div class="fb-page" data-href="https://www.facebook.com/GIGA-Grupo-de-Investigaci%C3%B3n-531957177199501/?__tn__=%2Cd%2CP-R&amp;eid=ARDekVZGVYmkHv13kaz40G4jj5dqC-CHWkXyDd1dQSLlNZeKz2eCyBXwKyzqlF6lgrVJR8Axw2Bu-0Uk" data-tabs="timeline" data-width="280" data-height="340" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">

                    <blockquote cite="https://www.facebook.com/GIGA-Grupo-de-Investigaci%C3%B3n-531957177199501/?__tn__=%2Cd%2CP-R&amp;eid=ARDekVZGVYmkHv13kaz40G4jj5dqC-CHWkXyDd1dQSLlNZeKz2eCyBXwKyzqlF6lgrVJR8Axw2Bu-0Uk" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GIGA-Grupo-de-Investigaci%C3%B3n-531957177199501/?__tn__=%2Cd%2CP-R&amp;eid=ARDekVZGVYmkHv13kaz40G4jj5dqC-CHWkXyDd1dQSLlNZeKz2eCyBXwKyzqlF6lgrVJR8Axw2Bu-0Uk"><i class="fa fa-facebook"></i></a></blockquote>
                    </div>  
                </div>                  
            </footer>
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>          
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="js/easing.min.js"></script>            
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script> 
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script> 
            <script src="js/jquery-ui.js"></script>         
            <script src="js/owl.carousel.min.js"></script>                      
            <script src="js/jquery.nice-select.min.js"></script>                            
            <script src="js/mail-script.js"></script>   
            <script src="js/main.js"></script>  
    </body>
</html>
