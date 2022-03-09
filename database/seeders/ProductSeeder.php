<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        $product= array(
            array('productName' => 'Jones Dream Catcher Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic5.jpg'),
            array('productName' => 'Jones Twin Sister Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic6.jpg'),
            array('productName' => 'Jones Frontier Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic7.jpg'),
            array('productName' => 'Yes. Hel YES. Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic8.jpg'),
            array('productName' => 'Jones Meteorite Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic9.jpg'),
            array('productName' => 'Union Juliet Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic10.jpg'),
            array('productName' => 'Union Trilogy Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic11.jpg'),
            array('productName' => 'Ride Hera Snowboard',
            'detailProduct' => 'In a world of increasing specialization, its nice to get a simple one-step solution every now and then. If you are looking for a good time on the mountain',
            'price' => '$12.00',
            'picture' => 'pic12.jpg')
        );


        DB::table('products')->insert($product);
        
    }
}