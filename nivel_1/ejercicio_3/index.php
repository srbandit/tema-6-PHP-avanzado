<?php

include 'clases.php';

$auto1 = new Concesionario;
$auto1->marca;
$auto1->marca = "Ferrari";
$auto1->modelo;
$auto1->modelo = "Testarossa";
$auto1->precio;
$auto1->precio = 50000;
echo $auto1;

echo "<hr>";

$highlander = new HombreInmortal();
$highlander->nombre = "Highlander el inmortal";
$highlander->historia = "y pertenezco a los inmortales. Un grupo de seres que somos inmunes a las enfermedades y dejamos de envejecer después de recibir una herida fatal. " . 
"A partir de entonces ya no tenemos esperanza de vida natural y podemos existir para siempre.";
echo $highlander;

?>