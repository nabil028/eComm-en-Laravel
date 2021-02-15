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
        //
        DB::table('products')->insert([
            [
                'name'=>'Sony',
                'price'=>'4000',
                'description'=>"2 GB ram smart phone",
                'category'=>'mobile',
                'gallery'=>"https://images-na.ssl-images-amazon.com/images/I/71oXhyGDd%2BL._AC_SL1500_.jpg"
            ],
            [
                'name'=>'Samsung',
                'price'=>'6000',
                'description'=>"4 GB ram smart phone",
                'category'=>'mobile',
                'gallery'=>"https://i.gadgets360cdn.com/products/large/1555507135_635_samsung_galaxy_a60.jpg"
            ],
            [
                'name'=>'Nokia',
                'price'=>'8000',
                'description'=>"4 GB ram smart phone",
                'category'=>'mobile',
                'gallery'=>"https://www.ispyprice.com/static/nwprd_model/nokia-2-7966.jpg"
            ],
            [
                'name'=>'Walton',
                'price'=>'3000',
                'description'=>"2 GB ram smart phone",
                'category'=>'mobile',
                'gallery'=>"https://www.gizmochina.com/wp-content/uploads/2019/07/Walton-Primo-S7.jpg"
            ],
        ]);

    }
}
