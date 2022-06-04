<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<20;$i++)
        {
            $category = DB::table('categories')->insert([
                'title' => $faker->word
            ]);
            $category = Category::all()->random(); //or whatever

            DB::table('products')->insert([
                'title' => $faker->word,
                'description' => $faker->paragraph,
                'price' => $faker->randomDigit,
                'stock' => $faker->randomDigit,
                'category_id' => $category->id
            ]);
        }

     
         
        
    }
}
