<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ClientesSeeder extends Seeder
{
   
    public function run(): void
    {
        $data = array([
            'nombre'=>'Henry',
            'edad'=>23,
            'categoria'=> 1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Santos',
            'edad'=>21,
            'categoria'=> 1,
            'created_at'=>Carbon::now()
        ]);

        DB::table('clientes')->insert($data);
    }
}
