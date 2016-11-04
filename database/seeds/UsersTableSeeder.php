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
        DB::table('users')->truncate();

        factory(App\User::class, 2)->create();
        $admin = factory(App\User::class, 'admin')->create();
        $this->command->info("New Admin has been created. Username: $admin->email,  Password: Temporal01");
    }
}