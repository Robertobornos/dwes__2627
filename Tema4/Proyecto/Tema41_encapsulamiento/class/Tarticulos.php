<?php
require_once __DIR__ . '/Articulo.php';

class Tarticulos
{
    private array $tarticulos;

    public function __construct()
    {
        $this->tarticulos = [];
    }

    public function getTarticulos(): array { return $this->tarticulos; }
    public function setTarticulos(array $tarticulos): void { $this->tarticulos = $tarticulos; }

    public static function getMarcas(): array
    {
        return ["Samsung", "Apple", "Sony", "Nike", "Adidas", "Lego"];
    }

    public static function getCategorias(): array
    {
        return ["Electrónica", "Hogar", "Juguetes", "Ropa", "Deportes"];
    }

    // Recibe índices y devuelve los nombres de las categorías
    public static function indice_categorias_a_nombre_categorias(array $indices): array
    {
        $categorias = self::getCategorias();
        $nombres = [];
        foreach ($indices as $i) {
            if (isset($categorias[$i])) {
                $nombres[] = $categorias[$i];
            }
        }
        return $nombres;
    }

    // Añade un único artículo
    public function addArticulo(Articulo $articulo): void
    {
        $this->tarticulos[] = $articulo;
    }

    // Siguiente id disponible
    public function getSiguienteId(): int
    {
        $max = 0;
        foreach ($this->tarticulos as $a) {
            if ($a->getId() > $max) {
                $max = $a->getId();
            }
        }
        return $max + 1;
    }

    // Artículos de prueba
    public function addArticulos(): void
    {
        $datos = [
            [1, "Smartphone 6.5 pulgadas", "Galaxy S24", 0, [0], 25, 899.99],
            [2, "Auriculares inalámbricos", "WH-1000XM5", 2, [0], 40, 349.50],
            [3, "Zapatillas de running", "Pegasus 41", 3, [3, 4], 60, 129.90],
            [4, "Camiseta deportiva", "Techfit", 4, [3, 4], 120, 29.95],
            [5, "Set de construcción", "Technic 42154", 5, [2, 1], 15, 74.99],
            [6, "Tablet 11 pulgadas", "iPad Air", 1, [0, 1], 18, 679.00],
        ];
        foreach ($datos as $d) {
            $this->addArticulo(new Articulo(...$d));
        }
    }
}