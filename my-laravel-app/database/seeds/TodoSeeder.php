<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $param = [
            'user_id' => 1 ,
            'title' => '1件完了する' ,
            'level' => '1' ,
            'detail' => '1日1件以上完了する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);
        $param = [
            'user_id' => 2 ,
            'title' => '2件完了する' ,
            'level' => '2' ,
            'detail' => '1日2件以上完了する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 3 ,
            'title' => '3件完了する' ,
            'level' => '3' ,
            'detail' => '1日3件以上完了する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 4 ,
            'title' => '4件完了する' ,
            'level' => '4' ,
            'detail' => '1日4件以上完了する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 5 ,
            'title' => '5件完了する' ,
            'level' => '5' ,
            'detail' => '1日5件以上完了する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 6 ,
            'title' => '6件完了する' ,
            'level' => '6' ,
            'detail' => '1日6件以上完了する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);
    }
}
