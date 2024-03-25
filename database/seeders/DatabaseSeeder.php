<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $User = new User();

        $User->create([
            'name'=> 'Usuario 1',
            'email' => 'Usuario@hotmail.com',
            'email_verified_at' => now(),
            'password' => 'Usuario123' ]
        );
    }
}
