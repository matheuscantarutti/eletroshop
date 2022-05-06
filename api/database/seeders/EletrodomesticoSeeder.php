<?php

namespace Database\Seeders;

use App\Models\Eletrodomestico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EletrodomesticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eletrodomestico::factory()->count(15)->create();
    }
}
