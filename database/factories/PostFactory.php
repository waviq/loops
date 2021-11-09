<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'title' => $this->faker->sentence(),
        'slug' => $this->faker->slug(),
        'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>'
    ];
});
