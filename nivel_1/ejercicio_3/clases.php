<?php

class Concesionario {
    protected string $marca;
    protected string $modelo;
    protected int $precio;


    public function __set(string $name,string $value)
    {
        if(!property_exists($this, $name)){
          echo "Error, la propiedad no existe." . "<br>";
        }else{
            $this->$name = $value; 
            echo "Has cambiado el valor efectivamente." . "<br>";
        }
    }
   
    public function __get(string $name)
    {
        echo "Intentaste cambiar " . $name . "<br>";
    }

    public function __toString()
    {
        return "Soy un auto marca " . $this->marca . ", modelo " . $this->modelo . " y tengo un precio de " . $this->precio . "<br>";
    }
}




class HombreInmortal {
    public string $nombre;
    public string $historia;

   
    
    public function __toString()
    {
        return "Soy " . $this->nombre . " " . $this->historia . "<br>";
    }
    public function __destruct()
    {
        echo "Imposible! Me has destruido";
    }
}

?>