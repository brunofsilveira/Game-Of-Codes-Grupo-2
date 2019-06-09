<?php

use Illuminate\Database\Seeder;

class CarrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carros')->insert([
            'modelo' => 'Sandero',
            'marca_id' => 3,
            'ano' => 2015,
            'preco' => 25800,
            'cor' => 'Azul',
            'combustivel' => 'F',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Gol',
            'marca_id' => 5,
            'ano' => 2010,
            'preco' => 17200,
            'cor' => 'Cinza',
            'combustivel' => 'G',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Palio',
            'marca_id' => 1,
            'ano' => 2016,
            'preco' => 23200,
            'cor' => 'Vermelho',
            'combustivel' => 'F',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
        
        DB::table('carros')->insert([
            'modelo' => 'Astra',
            'marca_id' => 2,
            'ano' => 2015,
            'preco' => 41900,
            'cor' => 'Branco',
            'combustivel' => 'G',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
        
    }
}
