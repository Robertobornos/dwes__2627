<?php

class Coche
{
    private int $velocidad;

    public function __construct()
    {
        $this->velocidad = 0;
    }

    public function getVelocidad(): int
    {
        return $this->velocidad;a
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

$coche = new Coche();

$coche->setVelocidad(1000);

echo $coche->getVelocidad(); 