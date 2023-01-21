<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'احسان کریمی نیا',
            'email' => 'e.kariminiya@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);
    }
}
