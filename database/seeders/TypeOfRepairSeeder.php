<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeOfRepair;

class TypeOfRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeOfRepair::create([
            'type_of_repair' => 'Водоснабжение'
        ]);

        TypeOfRepair::create([
            'type_of_repair' => 'Газ'
        ]);

        TypeOfRepair::create([
            'type_of_repair' => 'Санитарный узел'
        ]);
    }
}
