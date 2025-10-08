<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            ['id'=>1,'name'=>'Televisor','reference'=>'100-342','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2,'name'=>'Nevera','reference'=>'100-343','created_at'=>now(),'updated_at'=>now()],
            ['id'=>3,'name'=>'Microondas','reference'=>'100-344','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
