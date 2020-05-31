<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nombres_hombre = array('Aurelio','Cristian','Paulo','Jose','Antonio','Marcos','Pablo','Emilio','Sandra','Paula','Angela','Isabel','Sara','Maria','Carolina','Andrea');
        $apellidos = array('Descalzo','Alcudia','Llorens','Peinado','Medellin','Torres','Climent','Pico','Calvo','Benavent','Diaz','González','Alonso','Cantos','Escobar','Sanz');
        $sexos = array('hombre', 'mujer');

        // Generar las fechas y las contraseñas
        for ($i = 0; $i < 10; $i++){
            $nums_aleatorios[$i] = mt_rand(600000000,900000000);
            $fechas_nacimiento[$i] = date("Y-m-d", $nums_aleatorios[$i]);
            $contraseñas[$i] = Hash::make('password');
        }

        DB::table('users')->insert([
            [
                'name' => 'Alejandro',
                'idUser' => 1,
                'sex' => 'hombre',
                'firts_surname' => 'Salcedo',
                'second_surname' => 'Santamaria',
                'role' => 'Admin',
                'date_birth' => '1996/02/13',
                'picture' => 'user1.jpg',
                'email' => 'alejandrosal1396@gmail.com',
                'password' => Hash::make('Salcedo13'),
            ],
            [
                'name' => 'Pau',
                'idUser' => 2,
                'sex' => 'hombre',
                'firts_surname' => 'Llorens',
                'second_surname' =>'Martinez',
                'role' => 'monitor',
                'date_birth' => '1999/01/21',
                'picture' => 'user2.jfif',
                'email' => 'pau@speedup.com',
                'password' => Hash::make('Monitor1'),
            ],
            [
                'name' => 'Nacho',
                'idUser' => 3,
                'sex' => 'hombre',
                'firts_surname' => 'Salcedo',
                'second_surname' => 'Santamaria',
                'role' => 'monitor',
                'date_birth' => '2002/11/21',
                'picture' => 'user3.jpg',
                'email' => 'nacho@speedup.com',
                'password' => Hash::make('Monitor2'),
            ],
            [
                'name' => 'Sandra',
                'idUser' => 4,
                'sex' => 'mujer',
                'firts_surname' => 'Alcudia',
                'second_surname' => 'Palomo',
                'role' => 'monitor',
                'date_birth' => '1996/12/03',
                'picture' => 'user4.jpg',
                'email' => 'sandra@speedup.com',
                'password' => Hash::make('Monitor3'),
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 5,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user5.jpg',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 6,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user6.jpg',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 7,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user7.jpg',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 8,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user8.jpg',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 9,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user9.png',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 10,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user10.jpg',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],
            [
                'name' => $nombres_hombre[rand(0,15)],
                'idUser' => 11,
                'sex' => $sexos[rand(0,1)],
                'firts_surname' => $apellidos[rand(0,15)],
                'second_surname' =>$apellidos[rand(0,15)],
                'role' => 'user',
                'date_birth' => $fechas_nacimiento[rand(0,9)],
                'picture' => 'user11.jfif',
                'email' => Str::random(10).'@gmail.com',
                'password' => $contraseñas[rand(0,9)],
            ],

        ]);
    }
}
