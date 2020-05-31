<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
            UserSeed::class,
            ArticleSeed::class,
            ComentSeed::class,
            PackSeed::class,
            ServiceSeed::class,
            ContainSeed::class,
            AddressSeed::class,
        ]);
    }
}
