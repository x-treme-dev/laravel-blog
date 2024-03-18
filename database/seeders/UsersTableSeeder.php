<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //очистить таблицу перед записью
        DB::table('users') -> delete();
        //заполнить таблицу
        DB::table('users') -> insert([
            'name' => 'ivan',
            'email' => 'ivan@mail.ru',
            'password' =>Hash::make('123'),
         ]); 
        
    }
}
