<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('publications')->delete();

        DB::table('publications')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'O impacto da Inteligência Artificial no mercado de trabalho africano',
                'file' => '5011963e788b44498cb882bb8d21b40a.pdf',
                'cover' => '615c0187151dad118a819816ecbfe517.jpg',
                'date' => '2025-11-13',
                'deleted_at' => NULL,
                'created_at' => '2025-11-13 14:36:37',
                'updated_at' => '2025-11-13 14:36:37',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'A influência das redes sociais nas eleições e na opinião pública',
                'file' => 'a69c90d20d287e30b8adc9b6c4919565.pdf',
                'cover' => '655719d1ec8620310fdd7c06ae758319.jpg',
                'date' => '2025-11-13',
                'deleted_at' => NULL,
                'created_at' => '2025-11-13 14:43:32',
                'updated_at' => '2025-11-13 14:47:06',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Economia criativa: como transformar talento em negócio digital',
                'file' => '686831d3321de4e1d245695606aaf4f1.pdf',
                'cover' => '44056b587ce7d6566b1c5d7344fe663b.png',
                'date' => '2025-11-13',
                'deleted_at' => NULL,
                'created_at' => '2025-11-13 14:50:51',
                'updated_at' => '2025-11-13 14:50:51',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Promovendo a transformação digital dos paises africanos',
                'file' => '7169fcade0a3c94ac467298a6e4db72d.pdf',
                'cover' => 'e82423cde08ce80ddf234a0f780b90b7.png',
                'date' => '2025-11-13',
                'deleted_at' => NULL,
                'created_at' => '2025-11-13 15:09:49',
                'updated_at' => '2025-11-13 15:09:49',
            ),
        ));


    }
}

