<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Politica',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:32:05',
                'updated_at' => '2025-11-04 10:32:05',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Desporto',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:55:45',
                'updated_at' => '2025-11-04 10:55:45',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Tecnologia',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:56:02',
                'updated_at' => '2025-11-04 10:56:02',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Economia',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:56:35',
                'updated_at' => '2025-11-04 10:56:35',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Sociedade',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:57:32',
                'updated_at' => '2025-11-04 10:57:32',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Cultura',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:58:11',
                'updated_at' => '2025-11-04 10:58:11',
            ),
        ));
    }
}
