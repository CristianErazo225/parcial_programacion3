<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'ISBN' => '1001',
                'nombre' => 'El jardin secreto',
                'descripcion' => 'Novela intrigante',
                'generoLiterario' => 'Misterio',
                'precioUnitario' => '42.000',
                'observacion' => 'capitulo adicional',
                'foto' => 'jar.jpg',
                'areaconocimiento' => '10'
            ],
            [
                'ISBN' => '1002',
                'nombre' => 'La Sombra del Viento',
                'descripcion' => 'Novela intrigante',
                'generoLiterario' => 'Misterio',
                'precioUnitario' => '56.000',
                'observacion' => 'capitulo adicional',
                'foto' => 'Som.jpg',
                'areaconocimiento' => '20'
            ],
            [
                'ISBN' => '1003',
                'nombre' => 'Cien Años de Soledad',
                'descripcion' => 'Obra maestra',
                'generoLiterario' => 'Realismo mágico',
                'precioUnitario' => '43.000',
                'observacion' => 'capitulo adicional',
                'foto' => 'Sol.jpg',
                'areaconocimiento' => '30'
            ],
            [
                'ISBN' => '1004',
                'nombre' => 'Libro 1984',
                'descripcion' => ' clásico distópico',
                'generoLiterario' => 'Ciencia ficción',
                'precioUnitario' => '23.000',
                'observacion' => 'capitulo adicional',
                'foto' => 'Por.jpg',
                'areaconocimiento' => '40'
            ],
            [
                'ISBN' => '1005',
                'nombre' => 'Matar un Ruiseñor',
                'descripcion' => 'Novela intrigante',
                'generoLiterario' => 'Misterio',
                'precioUnitario' => '56.000',
                'observacion' => 'Ficción histórica',
                'foto' => 'Rui.jpg',
                'areaconocimiento' => '50'
            ]
        ];
        DB::table('libro')->insert($datos);
    }
}
