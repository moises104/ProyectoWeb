<?php 

$conexion = mysqli_connect("localhost","id16998824_host","h&pHBUAnL\s0jFTf","id16998824_illampu");


if (isset($_POST['registrar'])) {

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario'])>=1 && strlen($_POST['contraseña']) >=1) {

        $name = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contraseña']);

        $fechareg = date("d/m/y");

        $consulta = "INSERT INTO datos(nombre, apellido, usuario, contraseña, fecha_reg) VALUES ('$name','$apellido','$usuario','$congtraseña','$fechareg')";

        $resultado = mysqli_query($conexion,$consulta);

        if ($resultado) {

            ?> 

            <h3 class="ok">¡Te has inscrito correctamente!</h3>

           <?php

        } else {

            ?> 

            <h3 class="bad">¡Ups ha ocurrido un error!</h3>

           <?php

        }

    }   else {

            ?> 

            <h3 class="bad">¡Por favor complete los campos!</h3>

           <?php

    }

}



?>