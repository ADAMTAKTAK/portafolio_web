<?php
    include "../model/conn.php";

    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = $conn->query("DELETE FROM notas WHERE id=$id");
        
        if($sql == true){
            header("location: ../index.php#comentarios");
            exit();
        } else {
            echo "Error al eliminar la nota de la base de datos.";
        }
    } else {
        echo "No se especificó ninguna nota para eliminar.";
    }
?>