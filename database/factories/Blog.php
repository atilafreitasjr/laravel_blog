<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'titulo'    => $faker->sentence,
        'conteudo'  => $faker->paragraph
    ];
});
