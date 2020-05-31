<?php

use Illuminate\Database\Seeder;

class PackSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pack')->insert([
            [
                'idPack' => 1,
                'name' => 'Mensual',
                'price' => 29.90,
            ],

            [
                'idPack' => 2,
                'name' => 'Trimestral',
                'price' => 21.90,  
            ],
        ]);
    }
}
