<?php
      include 'db.php';

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM documento WHERE id='$id'";

    $resultado = mysqli_query($conexion, $sql);
    if ($resultado === TRUE) {
    }
   header('location: ../views/index.php')
?>