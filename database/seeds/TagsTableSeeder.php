<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('tags')->delete();

        DB::table('tags')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Presidente',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:21:48',
                'updated_at' => '2025-11-04 13:21:48',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Feira',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:38:31',
                'updated_at' => '2025-11-04 13:38:31',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Independência',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:44:57',
                'updated_at' => '2025-11-04 13:44:57',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Relações Exteriores',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:51:44',
                'updated_at' => '2025-11-04 13:51:44',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Banco Mundial',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:59:51',
                'updated_at' => '2025-11-04 13:59:51',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Impressão Digital',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:02:38',
                'updated_at' => '2025-11-04 15:02:38',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Angola',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:06:00',
                'updated_at' => '2025-11-04 15:06:00',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Ministro da Cultura',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:08:01',
                'updated_at' => '2025-11-04 15:08:01',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Cemitério',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:11:59',
                'updated_at' => '2025-11-04 15:11:59',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Estádio',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:17:58',
                'updated_at' => '2025-11-04 15:17:58',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Orçamento',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:20:51',
                'updated_at' => '2025-11-04 15:20:51',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Industrias',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-05 08:14:57',
                'updated_at' => '2025-11-05 08:14:57',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Futebol',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-15 18:01:40',
                'updated_at' => '2025-11-15 18:01:40',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Criminalidade',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-15 18:16:45',
                'updated_at' => '2025-11-15 18:16:45',
            ),
        ));


    }
}
