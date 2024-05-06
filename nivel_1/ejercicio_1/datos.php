<?php

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $_SESSION["nombre"] = $nombre;
    $_SESSION["telefono"] = $telefono;
    echo $_SESSION["nombre"];
    echo "<br>";
    echo $_SESSION["telefono"];
}

?>