<?php

use App\Materi;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Materi::factory()->count(10)->create();
        factory(Materi::class, 10)->create();
    }
}
