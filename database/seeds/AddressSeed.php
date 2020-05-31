<?php

use Illuminate\Database\Seeder;

class AddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->insert([
            [
                'idAddress' => 1,
                'number' => 55,
                'location' => 'Xirivella',
                'via' => 'Montesa',
                'door' => 30,
                'cp' => 46950,
                'floor' => 4,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 1,
            ],

            [
                'idAddress' => 2,
                'number' => 33,
                'location' => 'Valencia',
                'via' => 'Calvo',
                'door' => 24,
                'cp' => 46939,
                'floor' => 4,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 2,
            ],

            [
                'idAddress' => 3,
                'number' => 13,
                'location' => 'Mislata',
                'via' => 'Mediterraneo',
                'door' => 3,
                'cp' => 46949,
                'floor' => 1,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 3,
            ],

            [
                'idAddress' => 4,
                'number' => 43,
                'location' => 'Paterna',
                'via' => 'Europa',
                'door' => 3,
                'cp' => 46929,
                'floor' => 1,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 4,
            ],

            [
                'idAddress' => 5,
                'number' => 2,
                'location' => 'Paterna',
                'via' => 'San Vicente',
                'door' => 27,
                'cp' => 46929,
                'floor' => 3,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 5,
            ],

            [
                'idAddress' => 6,
                'number' => 55,
                'location' => 'Xirivella',
                'via' => 'Montesa',
                'door' => 30,
                'cp' => 46950,
                'floor' => 4,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 6,
            ],

            [
                'idAddress' => 7,
                'number' => 33,
                'location' => 'Valencia',
                'via' => 'Calvo',
                'door' => 24,
                'cp' => 46939,
                'floor' => 4,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 7,
            ],

            [
                'idAddress' => 8,
                'number' => 13,
                'location' => 'Mislata',
                'via' => 'Mediterraneo',
                'door' => 3,
                'cp' => 46949,
                'floor' => 1,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 8,
            ],

            [
                'idAddress' => 9,
                'number' => 43,
                'location' => 'Paterna',
                'via' => 'Europa',
                'door' => 3,
                'cp' => 46929,
                'floor' => 1,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 9,
            ],

            [
                'idAddress' => 10,
                'number' => 2,
                'location' => 'Paterna',
                'via' => 'San Vicente',
                'door' => 27,
                'cp' => 46929,
                'floor' => 3,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 10,
            ],
            
             [
                'idAddress' => 11,
                'number' => 11,
                'location' => 'Aldaia',
                'via' => 'Jessu Nazaret',
                'door' => 13,
                'cp' => 46919,
                'floor' => 3,
                'province' => 'Valencia',
                'type' => 'envio',
                'userId' => 11,
            ],

        ]);
    }
}
