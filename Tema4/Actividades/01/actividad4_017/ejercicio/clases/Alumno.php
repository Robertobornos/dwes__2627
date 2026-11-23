<?php


class Alumno
{

    private ?string $id;
    private ?string $nombre;
    private ?string $apellidos;
    private ?string $poblacion;
    private ?string $email;
    private ?string $telefono;
    private ?string $curso;

    public function __construct(

        ?string $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $poblacion = null,
        ?string $email = null,
        ?string $telefono = null,
        ?string $curso = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->poblacion = $poblacion;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->curso = $curso;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getPoblacion(): string
    {
        return $this->poblacion;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setPoblacion(string $poblacion)
    {
        $this->poblacion = $poblacion;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setTelefono(string $telefono)
    {
        $this->telefono = $telefono;
    }

    public function setCurso(string $curso)
    {
        $this->curso = $curso;
    }
}