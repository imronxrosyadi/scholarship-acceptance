<?php

namespace Database\Seeders;

use App\Models\ValueWeight;
use Illuminate\Database\Seeder;

class ValueWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ValueWeight::create([
            'value' => 1,
            'description' => 'Sama penting'
        ]);

        ValueWeight::create([
            'value' => 3,
            'description' => 'Lebih penting sedikit'
        ]);

        ValueWeight::create([
            'value' => 5,
            'description' => 'Lebih penting secara kuat'
        ]);

        ValueWeight::create([
            'value' => 7,
            'description' => 'Lebih penting secara sangat kuat'
        ]);

        ValueWeight::create([
            'value' => 9,
            'description' => 'Lebih penting secara ekstrim'
        ]);

        
    }
}
