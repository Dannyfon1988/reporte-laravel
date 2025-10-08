<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::insert([
            ['client_id'=>1,'product_id'=>1,'quantity'=>10,'total'=>15000000,'created_at'=>now(),'updated_at'=>now()],
            ['client_id'=>2,'product_id'=>1,'quantity'=>2 ,'total'=>3000000 ,'created_at'=>now(),'updated_at'=>now()],
            ['client_id'=>2,'product_id'=>3,'quantity'=>5 ,'total'=>2500000 ,'created_at'=>now(),'updated_at'=>now()],
            ['client_id'=>3,'product_id'=>1,'quantity'=>6 ,'total'=>9000000 ,'created_at'=>now(),'updated_at'=>now()],
            ['client_id'=>3,'product_id'=>2,'quantity'=>5 ,'total'=>15000000,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
