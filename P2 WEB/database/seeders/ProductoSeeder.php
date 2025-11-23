<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        Producto::create([
            'nombre' => 'Camiseta básica',
            'descripcion' => 'Camiseta de algodón, color negro, todas las tallas.',
            'precio' => 199.99,
        ]);

        Producto::create([
            'nombre' => 'Taza cerámica',
            'descripcion' => 'Taza 350ml, apta para microondas.',
            'precio' => 89.50,
        ]);

        Producto::create([
            'nombre' => 'Cuaderno A4',
            'descripcion' => 'Cuaderno de 100 hojas, línea simple.',
            'precio' => 49.00,
        ]);
    }
}
