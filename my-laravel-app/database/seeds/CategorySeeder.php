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
            'content' => '『プロテイン』（protein)とは、タンパク質を英語にしたものです。タンパク質は筋肉を作る上で必要不可欠な栄養素です。筋トレをしている人であれば、一般の人に比べて約2倍のタンパク質が必要になります。',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'BCAA' ,
            'content' => 'BCAAとは必須アミノ酸のうち、
                            ・バリン
                            ・ロイシン
                            ・イソロイシン
                            この3種類のみで構成されたサプリメントのこと。',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'EAA' ,
            'content' => 'EAAとは、必須アミノ酸と呼ばれる9種類のアミノ酸が配合されたサプリメントの事を言います。アミノ酸は全部で２０種類あるのですが、そのうちの９種類は身体の中で作り出す事が出来ません。
                          そのアミノ酸の事を必須アミノ酸と言います。',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'グルタミン' ,
            'content' => 'グルタミンとは、タンパク質を構成する20種類のアミノ酸の一種であり、私達の身体の中に最も多く存在し、多様な効果が期待できるアミノ酸のこと。',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'クレアチン' ,
            'content' => 'クレアチンは、アミノ酸の一種で、体内で合成され大部分がクレアチンリン酸として筋肉に存在しています。
                          クレアチンリン酸は、筋肉が収縮する際にエネルギーとなるATP（アデノシン三リン酸）の再生に使用されます。',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'HMB' ,
            'content' => 'HMBとは正式名称「βヒドロキシβメチル酪酸」とよばれ、身体の中で作り出す事ができない必須アミノ酸のロイシンの代謝物質のこと。',
        ];
        DB::table('categories')->insert($param);

    }
}
