<?php

/**
 * Description of UserTableSeeder
 *
 * @author Clayton
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;

class UserTableSeeder extends \Illuminate\Database\Seeder {

    public function run() {
        DB::table('users')->truncate();

        factory('CodeCommerce\User', 15)->create();
        
//        foreach (range(1, 10) as $i) {
//            User::create([
//                'name' => $faker->name(),
//                'email' => $faker->email(),
//                'password' => Hash::make($faker->word)
//            ]);
//        }
    }

}
