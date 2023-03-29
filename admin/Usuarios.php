<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/Estilo4.css">
 <title>Registro</title>
  <meta charset="utf-8">

  <header>
 <nav>
   <ul id="menu">
    <li><a href="index.php">INICIO</a></li>
    <li><a href="Avisos.php"> AVISOS</a></li>
   <li><a href="registro_avisos.php"> REGISTRO DE AVISOS</a></li>
   <li><a href="usuarios.php"> REGISTROS DE VISITAS</a></li>
   <li><a href="cerrar.php">SALIR</a></li>
 </li>
   </ul>
   </nav>
   <br/>
</header>
<style type="text/css">
  li>a{
  background-color:#1b7743 ;
  color: white;
  padding: 10px;
  display: block;
  text-decoration: none;
  min-width: 100px;
  font-weight: bold;
  }
  
    h1 { margin-left: 80px;
      margin-top: 20px;
      font-size: 180%;
      color: #1b7743; }
    h2, h3 ¿¿{ font-family: Georgia, Times, serif;
      font-size: 150%;
      color: black;
      margin-top: 0;
      margin-left: 30px;}
    p {line-height: 1.5em;
      text-indent: 15px; 
      font-weight: bold;
      margin: 35px;}
      img { border: 2px solid #1b7743;
    margin: 10px;
    width: 98%;
    height: 100%;
  }
*{
  margin: 0;
  padding: 0;
}
header{
  font-family: Helvetica;
  width: 1100px;
  margin: 0 auto;
}
ul{
  list-style: none;
  position: fixed;
}
#menu li>a{
  background-color:#1b7743 ;
  color: white;
  padding: 10px;
  display: block;
  text-decoration: none;
  min-width: 100px;
  font-weight: bold;
}
#menu li>a:hover{
  color: #000;
  background-color: #85fda9;
}
#menu>li{
  float: left;
  text-align:center;
}
#menu>li>ul{
  display: none;
}
#menu>li:hover>ul {
  display:block;
}

a{
 color: #1b7743;
  text-decoration:none;
  display: block;     
  padding: 2px;
  }
  div{
  font-size: 80%;
  text-align: center;
  }


.container-bar{
  width: 100%;
  max-width: 50px;
  position: fixed;
  left: 0;
  top: 25%;
}
.container-bar a{
  display: block;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
  position: relative;
  transition: all 500ms ease;
  color: #fff;
}
.container-bar .fa-facebook{
  background: blue;
  border-radius: 0px 5px 0px 0px;
}


.container-bar #title{
  position: absolute;
  background: #1c1c1c;
  padding: 0px 8px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 3px;
  font-size: 15px;
  top:12px; left: 0px;
  transition: all 500ms ease;
  opacity: 0;
  visibility: hidden;
  z-index: -1;
}

.container-bar #title:after{
  position: absolute;
  content: '';
  border-left: 7px solid transparent;
  border-right: 6px solid #1c1c1c;
  border-top: 7px solid transparent;
  border-bottom: 7px solid transparent;
  right: 100%;
  top: 8px;
}
</style>
<body>
<br><br><br><br>
<?php

$inc = include("../php/conexion_bd.php");
if ($inc){
    $consultar = "SELECT * FROM datos";
    $resultado = mysqli_query($conexion,$consultar);
    if ($resultado){
        while($row =$resultado->fetch_array()){
            $id = $row['id'];
            $nombre = $row['nombre'];
            $estudiante_visitante = $row['estudiante_visitante'];
            $email = $row['email'];
            ?>
            <div>
                <h2><?php echo $nombre; ?></h2>
                 <div>
                    <p>
                        <b>ID: </b> <?php echo $id; ?><br>
                        <b>Estudiante_Visitante: </b> <?php echo $estudiante_visitante; ?> <br>
                        <b>Email: </b> <?php echo $email; ?> <br>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}

?>
</body>
</html>