<?php

use App\User;
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
            KategoriSeeder::class,
            MateriSeeder::class,
            SoalSeeder::class,
            UserSeeder::class,
            // App\User::factory()->count(3)->create()
        ]);
    }
}
