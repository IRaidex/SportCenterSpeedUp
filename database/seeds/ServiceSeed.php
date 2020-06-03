<?php

use Illuminate\Database\Seeder;

class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert([
            [
                'idService' => 1,
                'name' => 'Camiseta de regalo',
            ],

            [
                'idService' => 2,
                'name' => 'Tarjeta identificativa',
            ],

            [
                'idService' => 3,
                'name' => 'Acceso a todos los servicios',
            ],

            [
                'idService' => 4,
                'name' => 'Iniciativa tráete un amigo',
            ],

            [
                'idService' => 5,
                'name' => 'Pack Speed Up de regalo',
            ],

            [
                'idService' => 6,
                'name' => 'Asesoramiento personalizado',
            ],

            [
                'idService' => 7,
                'name' => 'Tarjeta identificativa VIP',
            ],

            [
                'idService' => 8,
                'name' => '',
            ],
        ]);
    }
}
