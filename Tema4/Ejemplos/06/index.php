<?php

class Coche
{
    protected int $velocidad;

    public function __construct()
    {
        $this->velocidad = 0;
    }

    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }

    public function aumentar(): void
    {
        $this->velocidad++;
    }

    public function parar(): void
    {
        $this->velocidad = 0;
    }
}

class Deportivo extends Coche
{
    public function aumentar(): void
    {
        $this->velocidad *= 2;
    }
}

$coche_deportivo = new Deportivo();

$coche_deportivo->parar();
$coche_deportivo->setVelocidad(10);
$coche_deportivo->aumentar();
echo $coche_deportivo->getVelocidad(); 

