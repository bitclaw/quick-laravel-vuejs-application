<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => str_random(10),
                    'email' => str_random(10).'@gmail.com',
                    'password' => bcrypt('Temporal01'),
                    'is_admin' => true,
                    'remember_token' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => str_random(10),
                    'email' => str_random(10).'@gmail.com',
                    'password' => bcrypt('Temporal01'),
                    'is_admin' => false,
                    'remember_token' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}