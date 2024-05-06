<?php

trait Turbo{
    public function boost(){
        echo "Se ha iniciado el turbo";
    }
}


class Car{
    private string $marca;
    private string $matricula;
    private string $tiposDeCombustible;
    private int $velocidadMaxima;
    
    use Turbo;
}

$coche = new Car;
$coche->boost();

?>