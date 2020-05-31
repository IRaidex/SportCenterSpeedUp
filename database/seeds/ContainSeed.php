<?php

use Illuminate\Database\Seeder;

class ContainSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contain')->insert([
            [
                'packId' => 1,
                'serviceId' => 1,
            ], 

            [
                'packId' => 1,
                'serviceId' => 2,
            ], 

            [
                'packId' => 1,
                'serviceId' => 3,
            ], 


            [
                'packId' => 1,
                'serviceId' => 4,
            ], 

            [
                'packId' => 2,
                'serviceId' => 5,
            ], 

            [
                'packId' => 2,
                'serviceId' => 2,
            ], 

            [
                'packId' => 2,
                'serviceId' => 3,
            ], 

            [
                'packId' => 2,
                'serviceId' => 4,
            ], 

            [
                'packId' => 2,
                'serviceId' => 6,
            ], 
        ]);
    }
}
