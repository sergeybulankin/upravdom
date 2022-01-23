<?php

namespace Database\Seeders;

use App\Models\TypeOfWork;
use Illuminate\Database\Seeder;

class TypeOfWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeOfWork::create([
           'type_of_repair_id' => 1,
           'type_of_work' => 'Течь центрального стока'
        ]);

        TypeOfWork::create([
            'type_of_repair_id' => 1,
            'type_of_work' => 'Отсутствует холодная вода'
        ]);

        TypeOfWork::create([
            'type_of_repair_id' => 3,
            'type_of_work' => 'Сломан центральный замок'
        ]);
    }
}
