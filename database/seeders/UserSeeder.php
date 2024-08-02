<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();

        User::create([
            'firstname' => 'Ashish',
            'lastname' => 'Rampal',
            'contact' => '9910705147',
            'email' => 'ashishrampal.tkd@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'firstname' => 'Admin',
            'lastname' => '',
            'contact' => '',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
