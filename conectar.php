<?php  

$conecta = mysqli_connect('localhost','root', '','baseg') or die(mysqli_error($mysqli));

insertar($conecta);

function insertar($conecta){
    $Nom=$_POST['Nombre'];
    $ap_paterno=$_POST['apellido_paterno'];
    $ap_materno=$_POST['apellido_materno'];
    $correo=$_POST['Correo'];
    $tel=$_POST['Telefono'];
    $msj=$_POST['ingresa_el_mensaje'];

    mysqli_query($conecta, "INSERT INTO suscripcion(Nom, ap_paterno, ap_materno, correo, tel, msj) VALUES('$Nom', '$ap_paterno', '$ap_materno', '$correo', '$tel', '$msj')");

}
    
?>