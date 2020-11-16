<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Perawatan::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'judul'=>Str::slug($faker->unique()->name,'-'),
        'body'=>$word,
        'gambar'=>$faker->unique()->name,
        'categoris_id'=>function(){
            return Categori::all()->random();
        }
        
    ];
});
