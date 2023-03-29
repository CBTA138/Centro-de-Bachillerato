<?php

$inc = include("conexion_bd.php");
if ($inc){
    $consultar = "SELECT * FROM datos";
    $resultado = mysqli_query($conexion,$consulta);
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