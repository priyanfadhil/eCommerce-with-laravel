<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Iphone',
                'price'=>'Rp 2.000',
                'description'=>'A smartphone wich is very very expensive',
                'category'=>'Expensivephone',
                'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/medias/post-66428/iphone-12-pro-max-graphite-hero-1.jpg',
            ],
            [
                'name'=>'Imoo',
                'price'=>'Rp 1.000',
                'description'=>'A smartwatch wich is very make our parent depressed',
                'category'=>'Smartphone',
                'gallery'=>'https://nankatech94.com/wp-content/uploads/2020/07/Samsung-S20-Ultra-.jpg',
            ],
            [
                'name'=>'Polytron',
                'price'=>'Rp 3.000',
                'description'=>'Mahal pokoknya, mending tinggal di bojong biat gausa pake kulkas',
                'category'=>'refrigerator',
                'gallery'=>'https://merkbagus.id/wp-content/uploads/2019/10/Polytron-Belleza-PRM-28QX.jpg',
            ],
            [
                'name'=>'Jet G700',
                'price'=>'Rp infinite',
                'description'=>'Dah lah . . .',
                'category'=>'Jet Pribadi',
                'gallery'=>'https://wisatabook.com/media/uploads/2019/10/27/gulfstream_g700_1.jpg',
            ]
        ]);
    }
}
