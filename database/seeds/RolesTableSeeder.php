<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'User',
            'level' => 1
        ];
        $admin = [
            'name' => 'Admin',
            'level' => 2
        ];

        factory(App\Role::class)->create($user);
        factory(App\Role::class)->create($admin);
    }
}
