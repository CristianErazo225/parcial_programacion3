<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'idArea' => '10',
                'descripciones' => 'Una historia mágica sobre la amistad y la redención.',
            ],
            [
                'idArea' => '20',
                'descripciones' => 'Una novela intrigante que sigue la vida de un joven bibliófilo en la posguerra de Barcelona ',
            ],
            [
                'idArea' => '30',
                'descripciones' => 'a obra maestra de Gabriel García Márquez, que narra la historia de la familia Buendía',
            ],
            [
                'idArea' => '40',
                'descripciones' => 'Un clásico distópico que presenta una visión sombría de un futuro totalitario',
            ],
            [
                'idArea' => '50',
                'descripciones' => 'Una novela conmovedora que aborda temas de justicia y moral en el sur de Estados Unidos',
            ]
        ];
        DB::table('areaconocimiento')->insert($datos);
    }
}
