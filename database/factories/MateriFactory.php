<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materi;
use Faker\Generator as Faker;
// use Illuminate\Support\Str;

$factory->define(Materi::class, function (Faker $faker) {
    $name = $faker->unique()->word;
    return [
        'guru_id' => rand(1,3),
        'kategori_id' => rand(1,3),
        'slug' => \Str::slug($name),
        'judul' => $name, 
        'konten' => $faker->sentence(),
    ];
});
