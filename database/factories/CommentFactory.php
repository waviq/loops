<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => Post::all()->random()->id,
        'name' => User::all()->random()->name,
        'email' => User::all()->random()->email,
        'website'=>$faker->unique()->domainName,
        'comment' => $this->faker->paragraph(2)
    ];
});
