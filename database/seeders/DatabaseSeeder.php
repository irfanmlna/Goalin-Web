<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        \DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@goalin',
            'level' => '0',
            'password' => bcrypt('admin')
        ]);
    }
}
