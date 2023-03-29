
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/MyEstilo.css">
       <title>AVISOS</title>
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
              color: black; }
            h2, h3 ¿¿{ font-family: Georgia, Times, serif;
              font-size: 150%;
              color: #1b7743;
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

<body bgcolor="#F8F8FF">

<br><br><br><br><br>
<meta charset="UTF-8">
<link rel="stylesheet" href="../estilo3.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">

<br>
<?php

$inc = include("../php/conexion_bd.php");
if ($inc){
    $consultar = "SELECT * FROM avisos ORDER BY 1 DESC";
    $resultado = mysqli_query($conexion,$consultar);
    if ($resultado){
        while($row =$resultado->fetch_array()){
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
            ?>
            <div>
                <h2><?php echo $titulo; ?></h2>
                 <div>
                    <p>
                        <b>Descripcion: </b> <?php echo $descripcion; ?><a href='avisos.php?id=<?php echo $row[0];?>' onclick="return confirm('Deseas borrar el aviso');" style='font-size: 12px; color:red;'>Borrar</a>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}
?>

<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $consultar = "delete from avisos where idAviso='$id'";
    if($resultado = mysqli_query($conexion,$consultar)){
      echo '<script>alert("Datos Borrados"); window.location = "avisos.php";</script>';
    }else{
      echo '<script>alert("Error al Borrar"); window.location = "avisos.php";</script>';
    }
  }
?>

<div class="container-all">
  <h1 class="title">
     "FESTIVIDADES NAVIDEÑAS"
    </h1>
    <img src="../imagenes/Navidad.jpg">
</div>



<br><br><br><br><br><br>
      <div class="container-all">
        <h1 class="title">
          "DESFILE "CONMEMORACIÓN A LA REVOLUCIÓN MEXICANA"
          </h1>
          <img src="../imagenes/20deNoviembre.jpg">
          <p>
            El inicio de la Revolución Mexicana se dio cuando Francisco I. Madero, 
            al proclamar el Plan de San Luis el 20 de noviembre de 1910, conminó a los mexicanos 
            a levantarse en armas contra el gobierno de Porfirio Díaz, quien había ostentado el poder
             durante 36 años.
          </p>
          <p>
            Este momento histórico se celebró de manera no oficial en 1928 con una carrera de relevos,
             pero hasta 1936 obtuvo carácter nacional a través de un decreto del Senado que expone que 
             en dicho desfile “se refleja la voluntad pacifista y conciliadora del pueblo”.
          </p>
          <P>
            Año con año, en este evento conocido como “Desfile deportivo del 20 de noviembre” participan 
            contingentes deportivos pertenecientes a diversas instituciones gubernamentales.
          </P>
          <p>
            La Revolución Mexicana es uno de los hechos más importantes de nuestra historia, 
            porque de ahí parte la construcción del Estado mexicano como lo conocemos actualmente, 
            su Constitución Política y el origen de muchas de sus instituciones.
          </p>
      </div>

      <div class="container-all">
        <h1 class="title">
           "BIENVENIDA ESTUDIANTIL 2022 #TeamAguilas"
          </h1>
          <img src="../imagenes/Estud_2.jpg">
      </div>

<br><br>

      <div class="container-all">
        <h1 class="title">
           "FESTIVAL DIA DE MUERTOS 2022"
          </h1>
          <img src="../imagenes/DiadeMuertos.jpg">
          <p>
            El día de muertos es una de las tradiciones que se han mantenido vivas a 
            través de los siglos, los días de fiesta principales son el 1 y 2 de noviembre.
          </p>
        <p>
          La tradición del Día de Muertos, se originó a la época prehispánica, cuando se le rendía 
            un tributo a la muerte, la cual tenía lugar en la última semana de octubre y hasta 
            los primeros días de noviembre.
          </p>
      </div>
         
      <div class="container-all">
        <h1 class="title">
           16 DE SEPTIEMBRE. "INDEPENDENCIA DE MÉXICO"
          </h1>
          <img src="../imagenes/16_Septiembre.jpg">
        <p>
           La noche del 15 al 16 de Septiembre todo 
            México celebra un aniversario más del inicio de la Guerra de Independencia de nuestro país. 
          </p>
          <p>
            Historia que en la madrugada 
            del 16 de Septiembre el cura Miguel Hidalgo y Costilla en compañía de Ignacio Allende y 
            Juan Aldama incitaron a la población de Dolores (hoy Dolores Hidalgo, Guanajuato) a 
            levantarse en armas en contra del Virreinato de la Nueva España, al grito de 
            “Viva la Virgen de Guadalupe”, “Abajo el mal Gobierno”, “Viva Fernando VII”.
          </p>
          <p>
            Este acontecimiento conocido como el “Grito de Dolores” se conmemora cada año en todo México, 
            para lo cual autoridades locales embellecen Palacio de Gobierno y lugares aledaños 
            a éste con motivos patrióticos donde prevalecen los colores de la bandera mexicana verde, blanco y rojo.
          </p>
          <p>
            La fiesta se prolonga hasta el 16 de Septiembre con el tradicional desfile,
            el cual es esperado con mucho entusiasmo por las familias y alumnos de las 
            diferentes instituciones educativas.
          </p>
        </div>
    </body>
</head>
</html>