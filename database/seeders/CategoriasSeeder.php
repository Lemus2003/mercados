<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoriasSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = array([
            'nombre'=>'suspenso',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'terror',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'accion',
            'created_at'=>Carbon::now()
        ]);

        DB::table('categorias')->insert($data);
    }
}
