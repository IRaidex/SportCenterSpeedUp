<?php

use Illuminate\Database\Seeder;

class ComentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coment')->insert([
            [
                'idComent' => 1,
                'content' => 'Me encanta el articulo!',
                'userId' => 1,
                'articleId' => 1,
            ], 

            [
                'idComent' => 2,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 2,
                'articleId' => 1,
            ], 

            [
                'idComent' => 3,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 3,
                'articleId' => 1,
            ], 

            [
                'idComent' => 4,
                'content' => 'Me encanta el articulo!',
                'userId' => 4,
                'articleId' => 2,
            ], 

            [
                'idComent' => 5,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 5,
                'articleId' => 2,
            ], 

            [
                'idComent' => 6,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 6,
                'articleId' => 2,
            ], 

            [
                'idComent' => 7,
                'content' => 'Me encanta el articulo!',
                'userId' => 7,
                'articleId' => 3,
            ], 

            [
                'idComent' => 8,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 8,
                'articleId' => 3,
            ], 

            [
                'idComent' => 9,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 9,
                'articleId' => 3,
            ], 


            [
                'idComent' => 10,
                'content' => 'Me encanta el articulo!',
                'userId' => 10,
                'articleId' => 4,
            ], 

            [
                'idComent' => 11,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 11,
                'articleId' => 4,
            ], 

            [
                'idComent' => 12,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 2,
                'articleId' => 4,
            ], 


            [
                'idComent' => 13,
                'content' => 'Me encanta el articulo!',
                'userId' => 4,
                'articleId' => 5,
            ], 

            [
                'idComent' => 14,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 6,
                'articleId' => 5,
            ], 

            [
                'idComent' => 15,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 8,
                'articleId' => 5,
            ], 


            [
                'idComent' => 16,
                'content' => 'Me encanta el articulo!',
                'userId' => 10,
                'articleId' => 6,
            ], 

            [
                'idComent' => 17,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 1,
                'articleId' => 6,
            ], 

            [
                'idComent' => 18,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 3,
                'articleId' => 6,
            ], 

            [
                'idComent' => 19,
                'content' => 'Me encanta el articulo!',
                'userId' => 5,
                'articleId' => 7,
            ], 

            [
                'idComent' => 20,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 7,
                'articleId' => 7,
            ], 

            [
                'idComent' => 21,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 9,
                'articleId' => 7,
            ], 

            [
                'idComent' => 22,
                'content' => 'Me encanta el articulo!',
                'userId' => 11,
                'articleId' => 8,
            ], 

            [
                'idComent' => 23,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 2,
                'articleId' => 8,
            ], 

            [
                'idComent' => 24,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 4,
                'articleId' => 8,
            ], 

            [
                'idComent' => 25,
                'content' => 'Me encanta el articulo!',
                'userId' => 6,
                'articleId' => 9,
            ], 

            [
                'idComent' => 26,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 8,
                'articleId' => 9,
            ], 

            [
                'idComent' => 27,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 10,
                'articleId' => 9,
            ], 

            [
                'idComent' => 28,
                'content' => 'Me encanta el articulo!',
                'userId' => 1,
                'articleId' => 10,
            ], 

            [
                'idComent' => 29,
                'content' => 'Estoy de acuerdo con lo que dice el articulo',
                'userId' => 3,
                'articleId' => 10,
            ], 

            [
                'idComent' => 30,
                'content' => 'Wow, me gusto mucho!',
                'userId' => 4,
                'articleId' => 10,
            ], 
        ]);
    }
}
