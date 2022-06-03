<?php
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID STUDIO</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="./Images/salon.jpeg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/general.css">
    <link rel=stylesheet href="css/all.css">
    <link rel="stylesheet" href="css/estiloCitas.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    
</head>
<body class="body">
        
  <header>
        <nav>
    
          <div class="container-nav">        
            
            <a href="./inicio.html"><img class="logo" src="img/salon.png" alt="ID STUDIO"></a>
            
            <div class="menu">  
              <a href="./inicio.html"> Inicio </a> 
              <a href="./servicios.html"> Servicios </a> 
              <a href="./citas.php"> Citas </a> 
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
    <br>
    <br>
    <div id="contenedor-citas" class="contenedor-citas">
        <div></div>
        <form id="formCitas" action="" method="get" >
            <!-- Circulos que indican la etapa -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
            <!--AQUI EMPIEZA EL FORMULARIO: -->
            <!--PASO1:Selecciona un servicio -->
            <div id="div-advertencia" class="notification is-danger" style="text-align:center;display:none;"></div>
            <div id="div-paso1" class="tab">
                
                <h1 style="font-family:Raleway;text-align:center;font-weight: bold;">Selecciona el servicio y añadelo</h1>
                <div style="text-align:center;" id="div-centrador">
                    <select name="servicio" id="servicioSelect" class="servicioSelect"  onmousedown="if(this.options.length>10){this.size=10;}" onchange='this.size=0;' onblur="this.size=0;" style="border-radius:5px;border-color:transparent;">
                        <option value="default">Selecciona un servicio</option>
                        <optgroup label="UÑAS">
                            <option value="manicure">Manicure</option>
                            <option value="gelishmanos">Gelish en manos</option>
                            <option value="gelishpies">Gelish en pies</option>
                            <option value="acrilicas">Acrilicas</option>
                            <option value="esculturales">Esculturales</option>
                            <option value="diseno">Diseño</option>
                            <option value="setefecto">Set(efecto)</option>
                            <option value="vitaminaunas">Vitamina en uñas</option>
                            <option value="retirogelish">Retiro gelish</option>
                            <option value="retiroacrilico">Retiro acrílico</option>
                            <option value="efectospar">Efectos(par)</option>
                            <option value="disenofrench">Diseño French</option>
                            <option value="disenoenuna">Diseño en uña (par)</option>
                        </optgroup>
                        <optgroup label="Peinado y maquillaje">
                            <option value="peinadoymaquillaje">Peinado y maquillaje</option>
                            <option value="maquillajecasual">Maquillaje casual</option>
                            <option value="peinadocasual">Peinado casual</option>
                            <option value="peinadostraightwave">Peinado Straight/Wave</option>
                            <option value="lavado">Lavado</option>
                        </optgroup>
                        <optgroup label="Cortes">
                            <option value="cortedama">Corte dama/niña</option>
                            <option value="cortecaballero">Corte caballero/niño</option>
                        </optgroup>
                        <optgroup label="Balayage/Babylights">
                            <option value="balayageXS">Balayage XL</option>
                            <option value="balayageS">Balayage S</option>
                            <option value="balayageM">Balayage M</option>
                            <option value="balayageL">Balayage L</option>
                            <option value="balayageXL">Balayage XL</option>
                        </optgroup>
                        <optgroup label="Nanoplastia">
                            <option value="nanoXS">Nanoplastia XL</option>
                            <option value="nanoS">Nanoplastia S</option>
                            <option value="nanoM">Nanoplastia M</option>
                            <option value="nanoL">Nanoplastia L</option>
                            <option value="nanoXL">Nanoplastia XL</option>
                        </optgroup>
                        <optgroup label="Tratamientos">
                            <option value="ampolleta">Ampolleta</option>
                            <option value="olaplex">Tratamiento Olaplex</option>
                            <option value="hidratacionintensiva">Tratamieno hidratación intensiva</option>
                        </optgroup>
                        <optgroup label="Tintes">
                            <option value="tinteXS">Tinte XL</option>
                            <option value="tinteS">Tinte S</option>
                            <option value="tinteM">Tinte M</option>
                            <option value="tinteL">Tinte L</option>
                            <option value="tinteXL">Tinte XL</option>
                        </optgroup>
                        <optgroup label="Matiz">
                            <option value="matizXS">Matiz XL</option>
                            <option value="matizS">Matiz S</option>
                            <option value="matizM">Matiz M</option>
                            <option value="matizL">Matiz L</option>
                            <option value="matizXL">Matiz XL</option>
                        </optgroup>
                        <optgroup label="Global">
                            <option value="globalXS">Global XL</option>
                            <option value="globalS">Global S</option>
                            <option value="globalM">Global M</option>
                            <option value="globalL">Global L</option>
                            <option value="globalXL">Global XL</option>
                        </optgroup>
                    </select>
                    <br>
                    <button type="button" id="add" class="btn" onclick="addElement(event)">Añadir</button>
                    <div id="div-lista-servicios">

                    </div>
                </div>
            </div>
            <!--PASO2:Elegir dia-->
            <div id="div-paso2" class="tab">
                <h1 style="font-family:Raleway;text-align:center;font-weight: bold;">Selecciona el horario</h1>
                <div style="display:grid;grid-template-columns:20% auto auto 20%">
                    <div></div>
                    <strong style="text-align: center;font-family:'Raleway'">Hora</strong>
                    <strong style="text-align: center;font-family:'Raleway'">Fecha</strong>
                    <div></div>

                    <div></div>
                    <input type="time" name="" id="horarioInput" class="input">
                    <input type="date" name="hora" id="hora" class="input">
                    <div></div>
                </div>
            </div>
            <!--PASO3:Elegir datos-->
            <div id="div-paso3" class="tab">
                <h1 style="font-family:Raleway;text-align:center;font-weight: bold;">Llena tus datos</h1>
                <div style="display: grid;grid-template-columns:30% auto 30%; text-align:center;">
                    <div></div>
                    <div style="font-family:Raleway;font-weight:bold;font-size:x-large" >Nombre</div>
                    <div></div>

                    <div></div>
                    <input type="text" class="input" id="nombre" placeholder="Nombre">
                    <div></div>

                    <div></div>
                    <div style="font-family:Raleway;font-weight:bold;font-size:x-large">Apellido Paterno</div>
                    <div></div>

                    <div></div>
                    <input type="text" class="input" id="paterno" placeholder="Apellido Paterno">
                    <div></div>

                    <div></div>
                    <div style="font-family:Raleway;font-weight:bold;font-size:x-large">Apellido Materno</div>
                    <div></div>

                    <div></div>
                    <input type="text" class="input" id="materno" placeholder="Apellido Materno">
                    <div></div>

                    <div></div>
                    <div style="font-family:Raleway;font-weight:bold;font-size:x-large">Email</div>
                    <div></div>

                    <div></div>
                    <input type="text" class="input" id="email" placeholder="idstudio@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">
                    <div></div>

                    <div></div>
                    <div style="font-family:Raleway;font-weight:bold;font-size:x-large">Teléfono</div>
                    <div></div>

                    <div></div>
                    <input type="text" class="input" id="tel" placeholder="Teléfono">
                    <div></div>

                    <div></div>
                    <div style="font-family:Raleway;font-weight:bold;font-size:x-large">Fecha de nacimiento</div>
                    <div></div>

                    <div></div>
                    <input type="date" class="input" id="fechaN">
                    <div></div>
                </div>
            </div>
            <!--Botones-->
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" class="btn" onclick="siguienteAnterior(-1)">Anterior</button>
                    <button type="button" id="nextBtn" class="btn" onclick="siguienteAnterior(1)">Siguiente</button>
                </div>
            </div>
            <br>
            <br>
            <br>
        </form>
        <div></div>
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
    <script src="js/funCitas.js"> </script>
    <script>
        
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
        dd = '0' + dd;
        }

        if (mm < 10) {
        mm = '0' + mm;
        } 
            
        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("hora").setAttribute("min", today);
    </script>
    
</body>
</html>