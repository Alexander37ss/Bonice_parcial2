<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([ 
            'imagen'                    => 'https://mxsonyb2c.vtexassets.com/arquivos/ids/310947/Sony_X80K_65pulgadas_MX_1000x1000px_01_ImagenPrincipal_C.jpg?v=637867542862330000',
            'nombre'                    => 'TV', 
            'precio'                    => 1999, 
            'categoria'                 => 'Electronicos', 
            'descripcion_p'             => 'Television de gran calidad', 
            'caracteristicas_p'         => 'Calidad grafica de 4k, 66 pulgadas', 

        ]); 

        Producto::create([ 
            'imagen'                    => 'https://bachoco.com.mx/wp-content/uploads/2019/08/021-rendbach-polloenterobco.png',
            'nombre'                    => 'Pollo', 
            'precio'                    => 200, 
            'categoria'                 => 'Comida', 
            'descripcion_p'             => 'Pollo', 
            'caracteristicas_p'         => 'Pollo de gran calidad', 

        ]); 

        Producto::create([ 
            'imagen'                    => 'https://bachoco.com.mx/wp-content/uploads/2019/08/021-rendbach-polloenterobco.png',
            'nombre'                    => 'Pollo', 
            'precio'                    => 200, 
            'categoria'                 => 'Comida', 
            'descripcion_p'             => 'Pollo', 
            'caracteristicas_p'         => 'Pollo de gran calidad', 

        ]); 

        Producto::create([ 
            'imagen'                    => 'https://bachoco.com.mx/wp-content/uploads/2019/08/021-rendbach-polloenterobco.png',
            'nombre'                    => 'Pollo', 
            'precio'                    => 200, 
            'categoria'                 => 'Comida', 
            'descripcion_p'             => 'Pollo', 
            'caracteristicas_p'         => 'Pollo de gran calidad', 

        ]); 

        Producto::create([ 
            'imagen'                    => 'https://bachoco.com.mx/wp-content/uploads/2019/08/021-rendbach-polloenterobco.png',
            'nombre'                    => 'Pollo', 
            'precio'                    => 200, 
            'categoria'                 => 'Comida', 
            'descripcion_p'             => 'Pollo', 
            'caracteristicas_p'         => 'Pollo de gran calidad', 

        ]); 
    }
}