<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GaleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('galeries')->delete();

        DB::table('galeries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Independência',
                'description' => 'Dia 11 de Novembro de 1975, dia Nacional da Independência de Angola',
            'images' => '["1763307655_6919f087a1a06_download (34) - Copia.jpeg","1763308526_6919f3eec7ba5_images - Copia - Copia.jpeg","1763308526_6919f3eec890a_download (2) - Copia - Copia.jpeg","1763308526_6919f3eeca282_download (34) - Copia.jpeg"]',
                'deleted_at' => NULL,
                'created_at' => '2025-11-16 15:40:55',
                'updated_at' => '2025-11-16 15:55:26',
            ),
        ));
    }
}
