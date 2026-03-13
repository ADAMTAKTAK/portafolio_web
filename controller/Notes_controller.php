<?php
    date_default_timezone_set('America/Caracas'); 

    if(!empty($_POST["btn_enviar_nota"])){
        if(!empty($_POST["nombreyapellido"]) and !empty($_POST["email"]) and !empty($_POST["nota"])){
            $nombreyapellido = $_POST["nombreyapellido"];
            $usuario = !empty($_POST["usuario"]) ? $_POST["usuario"] : "";
            $email = $_POST["email"];
            $nota = $_POST["nota"];
            $fechanota = date("d/m/Y h:i A"); 

            $sql = $conn->query("insert into notas (nombreyapellido, usuario, email, nota, fechanota) values('$nombreyapellido', '$usuario', '$email', '$nota', '$fechanota')");
            
            if($sql == true){
                header("location: index.php#comentarios");
                exit();
            } else {
                echo "<div style='color: #ff3366; text-align: center; padding: 1rem;'>Error al guardar la nota.</div>";
            }
        } else {
            echo "<div style='color: #ffcc00; text-align: center; padding: 1rem;'>Hay casillas obligatorias vacías.</div>";
        }
    }

    if(!empty($_POST["btn_actualizar_nota"])){
        if(!empty($_POST["id"]) and !empty($_POST["nombreyapellido"]) and !empty($_POST["email"]) and !empty($_POST["nota"])){
            $id = $_POST["id"];
            $nombreyapellido = $_POST["nombreyapellido"];
            $usuario = !empty($_POST["usuario"]) ? $_POST["usuario"] : "";
            $email = $_POST["email"];
            $nota = $_POST["nota"];
            $fechanota = date("d/m/Y h:i A") . " (Editado)"; 

            $sql = $conn->query("UPDATE notas SET nombreyapellido='$nombreyapellido', usuario='$usuario', email='$email', nota='$nota', fechanota='$fechanota' WHERE id=$id");
            
            if($sql == true){
                header("location: index.php#comentarios");
                exit();
            } else {
                echo "<div style='color: #ff3366; text-align: center; padding: 1rem;'>Error al actualizar la nota.</div>";
            }
        } else {
            echo "<div style='color: #ffcc00; text-align: center; padding: 1rem;'>Faltan datos para actualizar.</div>";
        }
    }
?>