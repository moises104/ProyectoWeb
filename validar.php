<?php

$usuario=$_POST['usuario'];

$contraseña=$_POST['contraseña'];

session_start();

$_SESSION['usuario']=$usuario;



$conexion = mysqli_connect("localhost","id16998824_host","$F8xjJ7nrYcl&!~*","id16998824_illampuu");



$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);



$hola=mysqli_num_rows($resultado);

if($hola){

    header("location:home.hmtl");

} else{

    ?>

    <?

    include("login.html");

    echo "error";

    ?>

    <?

}