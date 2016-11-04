<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->truncate();

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
