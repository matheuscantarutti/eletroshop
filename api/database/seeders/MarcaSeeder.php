<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = [
            'Electrolux',
            'Brastemp',
            'Fischer',
            'Samsung',
            'LG',
        ];

        foreach ($marcas as $marca) {
            DB::table('marcas')->insert([
                'nome' => $marca,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }


    }
}
