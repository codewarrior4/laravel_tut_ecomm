<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productseeder extends Seeder
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
                    'name'=>'Iphone 7s',
                    'price'=>'480.67',
                    'description'=>'Apple Smartphone, 2016 product',
                    'category'=>'mobile',
                    'image'=>'images/products/image3.png'
                ],
                [
                    'name'=>'Iphone 7',
                    'price'=>'380.67',
                    'description'=>'Apple Smartphone, 2016 product',
                    'category'=>'mobile',
                    'image'=>'images/products/image2.png'
                ],
                [
                    'name'=>'Macbook Air 2015',
                    'price'=>'2800.67',
                    'description'=>'Apple Smartphone, 2016 product',
                    'category'=>'laptop',
                    'image'=>'images/products/image4.png'
                ],
                [
                    'name'=>'Mack Bookpro 2016',
                    'price'=>'2380.67',
                    'description'=>'Apple Laptop, 2019 product',
                    'category'=>'mobile',
                    'image'=>'images/products/image3.png'
                ]
            ]);
    }
}
