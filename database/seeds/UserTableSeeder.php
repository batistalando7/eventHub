<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Administrador',
                'slug' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5k7Wl/31ZBhDroct352HC.ag7n7xb/sG852PpbgOpiElxt9j1DdEu',
                'role' => 'admin',
                'image' => '3f0551ddc8444d97be18eed935967f2c',
                'provider' => NULL,
                'provider_id' => NULL,
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2026-02-02 08:30:40',
            ),
            /* 1 =>
            array (
                'id' => 2,
                'name' => 'editor',
                'slug' => 'editor',
                'email' => 'admin@editor.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LPimYjmhMSeFbAm43rAIKOJOQh8xzGNS37amYpUJ/J6hd8bt5S6rG',
                'role' => 'editor',
                'image' => '78d3a33dfa1d1d15f8be2ba4f8464d43',
                'provider' => NULL,
                'provider_id' => NULL,
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2026-02-02 08:19:37',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Jornalista',
                'slug' => 'jornalista',
                'email' => 'admin@Jornalista.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SIWVaBvTeFAtKoPFbHrZPOlAMcpajOrCg90H9hOllOPw6ZMhMBKsy',
                'role' => 'jornalista',
                'image' => '559b952cec9670ea14f1273e45007368',
                'provider' => NULL,
                'provider_id' => NULL,
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2026-02-02 08:25:12',
            ), */
        ));
    }
}
