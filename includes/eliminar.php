<?php
      include 'db.php';

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM documento WHERE id='$id'";

    $resultado = mysqli_query($conexion, $sql);
    if ($resultado === TRUE) {
    }
    else{echo
        alert('se elimino el archivo. ');
        location.assign('../views/index.php');
    }
 
?>