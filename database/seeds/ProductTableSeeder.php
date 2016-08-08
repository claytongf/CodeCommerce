<?php

/**
 * Description of ProductTableSeeder
 *
 * @author Clayton
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;

class ProductTableSeeder extends \Illuminate\Database\Seeder {

    public function run() {
        DB::table('products')->truncate();
        
        factory('CodeCommerce\Product', 40)->create();
        
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
