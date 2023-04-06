<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Authentic Germany Salad',
                'image' => 'assets/images/food-1.png',
                'price' => 35000,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsam. Nobis ipsa officia aperiam nostrum corporis dignissimos, maxime voluptas, harum culpa quo enim nam incidunt quisquam deleniti, iure quaerat animi?'
            ],
            [
                'name' => 'Mac n Beef Teriyaki',
                'image' => 'assets/images/mac.png',
                'price' => 50000,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsam. Nobis ipsa officia aperiam nostrum corporis dignissimos, maxime voluptas, harum culpa quo enim nam incidunt quisquam deleniti, iure quaerat animi?'
            ],
            [
                'name' => 'Chicken Turkey with Special Dressing',
                'image' => 'assets/images/chick.png',
                'price' => 45000,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsam. Nobis ipsa officia aperiam nostrum corporis dignissimos, maxime voluptas, harum culpa quo enim nam incidunt quisquam deleniti, iure quaerat animi?'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}