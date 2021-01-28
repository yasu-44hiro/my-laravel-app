<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //管理者（ログイン用)
        //factory(App\User::class)
            //->create([
                //'name' => '吉廣泰則',
                //'email' => 'yoshihiro@example.com',
                //'password' => bcrypt('password'),
                //'role' => 'owner'
            //]);
        // 一般ユーザー
        //factory(App\User::class)
            //->create([
                //'name' => '立花春雄',
                //'email' => 'haruo@example.com',
                //'password' => bcrypt('password'),
                //'role' => 'customer'
            //]);
        //factory(App\User::class, 10)->create();
    }
}
