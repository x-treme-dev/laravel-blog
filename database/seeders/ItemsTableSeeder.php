<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
 

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //очистить таблицу перед записью
        DB::table('items') -> delete();
        //заполнить таблицу
        DB::table('items') -> insert([
            'user_id' => '1',
            'name' => 'задача №1',
            'done' => false,
         ]);
        
         DB::table('items') -> insert([
            'user_id' => '1',
            'name' => 'задача №2',
            'done' => true,
         ]);
    }
}
