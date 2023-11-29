<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'description' => 'Product 1',
                'price' => 19.99,
                'image1' => 'product1.jpg',
                'image2' => 'product1_2.jpg',
            ],
            [
                'description' => 'Product 2',
                'price' => 29.99,
                'image1' => 'product2.jpg',
                'image2' => 'product2_2.jpg',
            ],
            [
                'description' => 'Product 3',
                'price' => 39.99,
                'image1' => 'product3.jpg',
                'image2' => 'product3_2.jpg',
            ],
            [
                'description' => 'Product 4',
                'price' => 49.99,
                'image1' => 'product4.jpg',
                'image2' => 'product4_2.jpg',
            ],
            [
                'description' => 'Product 5',
                'price' => 59.99,
                'image1' => 'product5.jpg',
                'image2' => 'product5_2.jpg',
            ],
        ]);
    }
}

