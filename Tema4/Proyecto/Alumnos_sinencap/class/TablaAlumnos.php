<?php

/*
Archivo: talumnos.php
Descripción: Clase Talumnos, se trata de un array de  objetos de la clase Alumno.
Caracteristicas: POO sin encapusulamiento.
Atributos:
- talumnos []
Métodos: 
- constructor. Inicializa la tabla a un array vacío.
- create() - añade un nuevo objeto de usuario a la tabla.
- read() - Devuelve un objeto usuario a partir del índice.
- update() - Actualiza los detalles de un usuario, los parámetros son el objeto usuario y el índice.
- delete() - Elimina un objeto usuario a partir del índice.
- addAlumnos() - añade a la tabla al menos 4 objetos de la clase alumnos
- getAsignaturas() - array con todas las asignaturas
- getCursos() - array con todos los cursos
(Añadir los métodos que vayamos necesitando ...)

*/

class TablaAlumnos
{
    public array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }

    // Añadir alumno
    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    // Leer alumno
    public function read(int $indice): ?Alumno
    {
        return $this->talumnos[$indice] ?? null;
    }

    // Actualizar alumno
    public function update(int $indice, Alumno $alumno): void
    {
        if (isset($this->talumnos[$indice])) {
            $this->talumnos[$indice] = $alumno;
        }
    }

    // Eliminar alumno
    public function delete(int $indice): void
    {
        if (isset($this->talumnos[$indice])) {
            unset($this->talumnos[$indice]);
            $this->talumnos = array_values($this->talumnos);
        }
    }

    // Alumnos de prueba
    public static function addAlumnos(): array
    {
        return [
            new Alumno(
                1,
                'Carlos',
                'García López',
                'carlos@gmail.com',
                '2005-03-15',
                0,
                [0, 1, 3]
            ),

            new Alumno(
                2,
                'María',
                'Fernández Ruiz',
                'maria@gmail.com',
                '2006-07-22',
                1,
                [0, 2, 4]
            ),

            new Alumno(
                3,
                'Pablo',
                'Martínez Sánchez',
                'pablo@gmail.com',
                '2004-11-10',
                2,
                [1, 2, 3]
            ),

            new Alumno(
                4,
                'Lucía',
                'López Torres',
                'lucia@gmail.com',
                '2005-01-30',
                3,
                [0, 3, 4]
            )
        ];
    }

    // Obtener cursos
    public static function getCursos(): array
    {
        return [
            0 => '1SMR',
            1 => '2SMR',
            2 => '1DAW',
            3 => '2DAW',
            4 => '1AD',
            5 => '2AD'
        ];
    }

    // Obtener asignaturas
    public static function getAsignaturas(): array
    {
        return [
            0 => 'DWES',
            1 => 'DWEC',
            2 => 'Despliegue de Aplicaciones',
            3 => 'HLC',
            4 => 'EINEM',
            5 => 'Diseño de Interfaces'
        ];
    }

    // Buscar posición mediante id
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) {
            if ($alumno->id === $id) {
                return $indice;
            }
        }

        return null;
    }

    // Convertir índices de asignaturas en nombres
    public function indices_asignaturas_a_nombres(array $indices): array
    {
        $asignaturas = self::getAsignaturas();

        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($asignaturas[$indice])) {
                $nombres[] = $asignaturas[$indice];
            }
        }

        return $nombres;
    }
}