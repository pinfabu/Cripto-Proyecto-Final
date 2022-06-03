
<html lang="es">
    <head>
        <title>ID STUDIO</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel=stylesheet href="http://localhost:81/IDStudio/css/estiloInicio.css">
        <link rel=stylesheet href="http://localhost:81/IDStudio/css/all.css"><!--Estilo para los símbolos de las redes sociales-->
        <link rel="stylesheet" href="http://localhost:81/IDStudio/css/navbar.css"><!--Estilo para el  menu del header-->
        <link rel="stylesheet" href="http://localhost:81/IDStudio/css/footer.css"><!--Estilo para el footer general-->
        <link rel="stylesheet" href="http://localhost:81/IDStudio/css/estilos.css"><!--Estilo para la galería de imágenes-->
        <link rel="stylesheet" href="http://localhost:81/IDStudio/css/general.css"><!--Estilo Formato general de la página-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <script src="http://localhost:81/IDStudio/js/modernizr.js" type="text/javascript"></script>
    </head>
    <body class="body">

    <header>
        <nav>
    
          <div class="container-nav">        
            
            <a href="/inicio.html"><img class="logo" src="http://localhost:81/IDStudio/img/salon.png" alt="ID STUDIO"></a>
            
            <div class="menu">  
              <a href="http://localhost:81/IDStudio/inicio.html"> Inicio </a> 
              <a href="http://localhost:81/IDStudio/servicios.html"> Servicios </a> 
              <a href="http://localhost:81/IDStudio/citas.php"> Citas </a> 
              <a href=""> Conócenos </a>
            </div>  
    
            
            <!-- Símbolo para pantallas pequeñas -->
            <button class="hamburguer">
              <span></span>
              <span></span>
              <span></span>
            </button>
    
          </div>
    
        </nav>
    </header>

        <br><br>
<div class="mision">
<h2>  ¡Gracias por escoger ID STUDIO! </h2>
    <?php 
        $conexion = mysqli_connect("localhost", "root", "","idstudio");
        if (! $conexion) { dispError(); exit(); }

        # mysql_select_db('NE221', $db_cnx);    # nombre de la BD
        //mysql_select_db('idstudio', $conexion);
        //aqui se obtienen las variaables del get todos pueden ser tipo text
        $servicios=$_GET['servicios'];  
        $horario=$_GET['horario'];
        $nombre=$_GET['nombre'];
        $paterno=$_GET['paterno'];
        $materno=$_GET['materno'];
        $email=$_GET['email'];
        $telefono=$_GET['tel'];
        $fecha=$_GET['fecha'];

        //envio a DB
        //echo /*$servicios.*/;
        echo "<h4> <br> ".$horario."<br><br>"." A nombre de: ".$nombre." ".$paterno.
        " ".$materno."<br><br>Email: ".$email."<br><br>Teléfono: ".$telefono."</h4><br>";
        $res=mysqli_query($conexion,"insert into cita values(null,\"$nombre\",\"$paterno\",\"$materno\",\"$email\",\"$telefono\",\"$fecha\",\"$horario\");");//se hace el insert en cita DESCOMENTAR
        //echo $res." ".mysqli_error();//DESCOMENTAR
        $id_cita=mysqli_insert_id($conexion);
        //echo "<script>console.log(\"id_cita".$id_cita."\");</script>";
        /****INSERTS EN SERVICIO CITAS** */
        $precios=array();
        $servs=explode("-",$servicios);
        foreach($servs as $servicio){
            $result=mysqli_query($conexion,"select servicio_id,precio from servicio where nombre=\"$servicio\" ;");//obtenemos id  y precio de cada servicio
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $id_servicio=$row['servicio_id'];
                    array_push($precios,$row['precio']);
                    mysqli_query($conexion,"insert into servicio_cita values(null,$id_servicio,$id_cita);");//INSERT en servicio_cita
                    echo "<script>console.log(\"id_serv $id_servicio id_cita $id_cita\");</script>";
                    
                }
            }else{  
                echo "<script>console.log('0 resultados')</script>";
                echo "<script>console.log(\"$servicio\")</script>";
            }
        }
        //se saca total
        $total=0;
        echo "<h4>Servicios Solicitados: ";
        for($i=0;$i<sizeof($precios);$i++){
            echo "<h4>".$servs[$i]." - $".$precios[$i] .", " /*."</h4>"*/;
            $total+=$precios[$i];
        }
        echo "<br><br>Total a pagar: $".$total."</h4>";
        
    ?>
</div>
        <footer>
          <div class="container-footer">
                <div class="redes-container">
                    <ul> 
                        <li><a href="https://www.facebook.com/idstudio.oficial/" class="facebook" target="blank"><i class="fab fa-facebook-f"></i></a> </li> 
                        <li><a href="https://www.instagram.com/idstudio.oficial/" class="instagram" target="blank"><i class="fab fa-instagram"></i></a> </li> 
                    </ul>
                </div>
          </div>
        </footer>
    </body>
</html>