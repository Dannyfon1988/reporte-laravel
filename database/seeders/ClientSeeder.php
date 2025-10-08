<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        Client::insert([
            ['id'=>1,'name'=>'Pedro','last_name'=>'Pérez','identification'=>'12345612','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2,'name'=>'Juan','last_name'=>'Sanchez','identification'=>'99888773','created_at'=>now(),'updated_at'=>now()],
            ['id'=>3,'name'=>'María','last_name'=>'Torres','identification'=>'20014032','created_at'=>now(),'updated_at'=>now()],
            ['id'=>4,'name'=>'Marcos','last_name'=>'Vargas','identification'=>'85274196','created_at'=>now(),'updated_at'=>now()],
            ['id'=>5,'name'=>'Juanita','last_name'=>'Lopez','identification'=>'74165432','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
