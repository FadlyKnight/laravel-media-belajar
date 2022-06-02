<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kategori;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Kategori::class, function (Faker $faker) {
    $name = $faker->text(10);
    return [
        'slug' => Str::slug($name),
        'nama' => $name,
    ];
});
