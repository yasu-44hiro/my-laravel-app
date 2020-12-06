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
        //一般ユーザー（ログイン用)
        factory(App\User::class)
            ->create([
                'name' => '44hiro',
                'email' => '44hiro@example.com',
                'password' => bcrypt('password')
            ]);
        // 一般ユーザー
        factory(App\User::class, 10)->create();
    }
}
