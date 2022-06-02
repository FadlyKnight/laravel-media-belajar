<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Soal;
use Faker\Generator as Faker;

$factory->define(Soal::class, function (Faker $faker) {
    $arrOpsi = [
        'opsi_a','opsi_b','opsi_c','opsi_d'
    ];
    return [
        "materi_id" => rand(1,3),
        "guru_id" => rand(1,3),
        "pertanyaan" => $faker->sentence(),
        "kunci" => $arrOpsi[rand(0,3)],
        "opsi_a" => $faker->sentence(20),
        "opsi_b" => $faker->sentence(20),
        "opsi_c" => $faker->sentence(20),
        "opsi_d" => $faker->sentence(20),
    ];
});
