<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserToDoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //очистить таблицу перед записью
        DB::table('users_todo') -> delete();
        //заполнить таблицу
        DB::table('users_todo') -> insert([
            'name' => 'makwon@ya.ru',
            'email' => 'mrkwon@ya.ru',
            'password' => Hash :: make('123'),
         ]); 
        
    }
}
