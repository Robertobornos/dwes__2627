<?php

/*
    fichero: Alumnos.php
    
*/

/**
 * Clase Alumno
 *
 * @description Clase que representa un artículo con propiedades  métodos para manejar su información. Tiene que cumplir la propiedad de encapsulamiento
 * 
 * @abributos:
 *  - $id: Identificador único del artículo.
 *  - $nombre: nombre del alumno.
 *  - $apellidos: apellidos del alumno
 *  - $email: email del alumno
 *  - $fecha_nacimiento: fecha de nacimiento del alumno
 *  - $curso: Lista desplegabel con el imdice del curso
 *  - $asignaturas: checkbox de asignaturas
 * 
 * @métodos:
 *  - constructor: parámetros opcionales
 *  - getEdad(): devolverá la edad de un alumno a partir de la fecha de nacimiento.
 * 
 */

class Alumno
{
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?string $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?string $f_nacimiento = null,
        ?int $curso = null,
        ?array $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    public function getEdad(): int
    {
        if (!$this->f_nacimiento) {
            return 0;
        }

        $nacimiento = new DateTime($this->f_nacimiento);
        $hoy = new DateTime();

        return $nacimiento->diff($hoy)->y;
    }
}