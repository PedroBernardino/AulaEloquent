<?php

use Illuminate\Database\Seeder;

class LessonUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\LessonUser::class,27)->create();
    }
}
