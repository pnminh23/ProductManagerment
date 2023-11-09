<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("products")->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                "name"=> $faker->name,
                "amount" => $faker->numberBetween(1,1000),
                "price"=> $faker->numberBetween(0,100000000),
            ]);
        }

    }
}
