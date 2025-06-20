<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Categories::create([
            'name'=>'Fashion',
            'slug'=>'fashion',
        ]);
        \App\Models\Categories::create([
            'name'=>'Teknologi',
            'slug'=>'teknologi',
        ]);
    }
}
