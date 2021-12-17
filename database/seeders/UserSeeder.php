<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sergey',
            'phone' => '8-927-33-94-968',
            'password' => bcrypt('12345678'),
            'api_token' => Str::random(60)
        ]);
    }
}
