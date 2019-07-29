<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LessonUser;
use Faker\Generator as Faker;

$factory->define(LessonUser::class, function (Faker $faker) {
    return [
        //
        'user_DRE' => App\User::all()->random()->DRE,
        'lesson_id' => App\Lesson::all()->random()->id,
    ];
});
