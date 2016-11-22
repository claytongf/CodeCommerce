<?php

use CodeCommerce\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends \Illuminate\Database\Seeder {

    public function run() {
        DB::table('users')->truncate();

        factory('CodeCommerce\User', 15)->create();
        User::create([
            'name' => 'Clayton',
            'email' => 'clayton@gmail.com',
            'password' => Hash::make(123456),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make(123456),
            'is_admin' => 0
        ]);
        
//        foreach (range(1, 10) as $i) {
//            User::create([
//                'name' => $faker->name(),
//                'email' => $faker->email(),
//                'password' => Hash::make($faker->word)
//            ]);
//        }
    }

}
