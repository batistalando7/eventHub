<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementsTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('advertisements')->delete();

        DB::table('advertisements')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Independência',
                'image' => '16fb1f75eab7ed7fcea14a937afafec6.jpg',
                'link' => 'https://angola50anos.gov.ao/',
                'position' => 'home',
                'active' => 1,
                'created_at' => '2025-11-15 17:45:54',
                'updated_at' => '2025-11-15 17:45:54',
            ),
        ));
    }
}
