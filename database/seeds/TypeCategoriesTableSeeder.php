<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('type_categories')->delete();

        DB::table('type_categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Nacional',
                'description' => NULL,
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 11:19:42',
                'updated_at' => '2025-11-04 11:19:42',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'Futebol',
                'description' => NULL,
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 12:42:45',
                'updated_at' => '2025-11-04 12:42:45',
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'Basktebol',
                'description' => NULL,
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 12:47:07',
                'updated_at' => '2025-11-04 12:47:07',
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'Família e relacionamento',
                'description' => NULL,
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:07:11',
                'updated_at' => '2025-11-04 13:07:11',
            ),
            4 =>
            array (
                'id' => 6,
                'name' => 'Finanças pessoais e gestão de dinheito',
                'description' => NULL,
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:08:34',
                'updated_at' => '2025-11-04 13:08:34',
            ),
            5 =>
            array (
                'id' => 7,
                'name' => 'Inteligência Artificial e Robótica',
                'description' => NULL,
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:09:36',
                'updated_at' => '2025-11-04 13:09:36',
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'Artes e design',
                'description' => NULL,
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:10:13',
                'updated_at' => '2025-11-04 13:10:13',
            ),
            7 =>
            array (
                'id' => 9,
                'name' => 'Governança e administração pública',
                'description' => NULL,
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:11:20',
                'updated_at' => '2025-11-04 13:11:20',
            ),
        ));
    }
}
