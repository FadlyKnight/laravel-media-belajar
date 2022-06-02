<?php

use App\Kategori;
use Database\Factories\KategoriFactory;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // (new Kategori)->factory()->count(10)->create();
        factory(Kategori::class, 10)->create();
    }
}
