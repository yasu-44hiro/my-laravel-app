<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category_name' => 'プロテイン' ,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'BCAA' ,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'EAA' ,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'グルタミン' ,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'クレアチン' ,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'HMB' ,
        ];
        DB::table('categories')->insert($param);

    }
}
