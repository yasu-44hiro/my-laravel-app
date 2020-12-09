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
            'product_number' => 'TCF4411' ,
            'level' => '1' ,
            'detail' => 'ノズル流調を交換する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);
        $param = [
            'user_id' => 2 ,
            'product_number' => 'TCF4511' ,
            'level' => '2' ,
            'detail' => 'コントローラーを交換する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 3 ,
            'product_number' => 'TCF4711' ,
            'level' => '3' ,
            'detail' => 'バルブユニットを交換する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 4 ,
            'product_number' => 'TCF4713' ,
            'level' => '4' ,
            'detail' => '熱交換器を交換する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 5 ,
            'product_number' => 'TCF6321' ,
            'level' => '5' ,
            'detail' => '脱臭ユニットを交換する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);

        $param = [
            'user_id' => 6 ,
            'product_number' => 'TCF6421' ,
            'level' => '6' ,
            'detail' => '温風ユニットを交換する',
            'status' => 0,
        ];
        DB::table('todos')->insert($param);
    }
}
