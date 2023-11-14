<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::create([
            'name'     => 'Admin Anesss',
            'email'    => 'adminanesss@gmail.com',
            'role'    => 'admin1',
            'password' => bcrypt('adminanesss'),
        ]);
        Admin::create([
            'name'     => 'Admin 2 BudayaPedia',
            'email'    => 'admin2@budayapedia.com',
            'role'    => 'admin2',
            'password' => bcrypt('admin2'),
        ]);
    }
}
