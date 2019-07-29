<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'DRE' => 118000086,
            'name' => 'João',
            'email' => 'joao@gmail.com',
            'age' => 18,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118012086,
            'name' => 'Pedro',
            'email' => 'pedro@gmail.com',
            'age' => 15,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118000286,
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'age' => 43,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118033086,
            'name' => 'Marcos',
            'email' => 'marcos@gmail.com',
            'age' => 23,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118120086,
            'name' => 'Leonardo',
            'email' => 'leo@gmail.com',
            'age' => 34,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118092086,
            'name' => 'Jorge',
            'email' => 'jorge@gmail.com',
            'age' => 50,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118873086,
            'name' => 'Guilherme',
            'email' => 'guigui@gmail.com',
            'age' => 45,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118040586,
            'name' => 'Eduardo',
            'email' => 'dudu@gmail.com',
            'age' => 22,
            'password' => '123456'
        ]);
        User::create([
            'DRE' => 118123086,
            'name' => 'Caio',
            'email' => 'caio@gmail.com',
            'age' => 44,
            'password' => '123456'
        ]);
    }
}
