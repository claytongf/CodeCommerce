<?php

/**
 * Description of CategoryTableSeeder
 *
 * @author Clayton
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;

class CategoryTableSeeder extends \Illuminate\Database\Seeder {

    public function run() {
        DB::table('categories')->truncate();
        
        factory('CodeCommerce\Category', 15)->create();
        
//        $faker = Faker::create();
//
//        foreach (range(1, 15) as $i) {
//            Category::create([
//                'name' => $faker->word(),
//                'description' => $faker->sentence()
//            ]);
//        }
    }

}
