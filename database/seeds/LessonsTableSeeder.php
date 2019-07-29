<?php

use Illuminate\Database\Seeder;
use App\Lesson;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lesson::create([
            'name' => 'Cálculo 1',
            'credits' => '4'
        ]);
        Lesson::create([
            'name' => 'Física 1',
            'credits' => '4'
        ]);
        Lesson::create([
            'name' => 'Cálculo 2',
            'credits' => '4'
        ]);
        Lesson::create([
            'name' => 'Física 2',
            'credits' => '4'
        ]);
        Lesson::create([
            'name' => 'Estrutura de Dados',
            'credits' => '4'
        ]);
        Lesson::create([
            'name' => 'Banco de Dados',
            'credits' => '4'
        ]);
        Lesson::create([
            'name' => 'Otimização em Grafos',
            'credits' => '4'
        ]);
    }
}
