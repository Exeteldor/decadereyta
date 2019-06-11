

<?php
 $destino="exeteldor@gmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];
 $telefono=$_POST["phone"];
 $mensaje=$_POST["message"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\n Telefono: ".$phone."\nMensaje: ".$mensaje;

 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>
