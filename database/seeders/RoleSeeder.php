<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name_role" => "Пользователь",
            "level_role" => 5
        ]);

        Role::create([
            "name_role" => "Оператор",
            "level_role" => 10
        ]);

        Role::create([
            "name_role" => "Ответственный",
            "level_role" => 15
        ]);

        Role::create([
            "name_role" => "Администратор",
            "level_role" => 20
        ]);
    }
}
