<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1 ,
            'category_id' => 1 ,
            'title' => 'ゴールド スタンダード' ,
            'content' => '甘くて飲みやすい。ワンスクープでタンパク質24g。' ,
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1 ,
            'category_id' => 2 ,
            'title' => 'エクステンド レモンライム' ,
            'content' => 'トレーニング中はいつもこれ飲んでいます。' ,
        ];
        DB::table('posts')->insert($param);
        $param = [
            'user_id' => 1 ,
            'category_id' => 3 ,
            'title' => 'パープルラース パープルレモネード' ,
            'content' => 'トレーニング中はいつもこれ飲んでいます。' ,
        ];
        DB::table('posts')->insert($param);

    }
}
