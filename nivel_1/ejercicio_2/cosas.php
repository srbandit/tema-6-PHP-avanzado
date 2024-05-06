<?php


if (isset($_POST['submit'])) {
    $opcion = $_POST['opciones'];
    switch ($opcion) {
        case 'opcion1':
            echo "Correcto, el codigo se encuentra en la linea " . __LINE__;
            break;
        case 'opcion2':
            echo "Incorrecto. El codigo está en otra linea, dentro del archivo " . __FILE__;
            break;
        case 'opcion3':
            echo "Incorrecto. El codigo está en otra linea, dentro del directorio " . __DIR__;
            break;
    }
}
        
        
