<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();

        \App\Models\Product::create([
            'category_id'=>'1',
            'name'=>'Baju Anak',
            'slug'=>'baju-anak',
            'description'=>'Lorem ipsum',
            'price'=>75000,
            'stock'=>100,
            'image'=>'image.png',
        ]);
    }
}
