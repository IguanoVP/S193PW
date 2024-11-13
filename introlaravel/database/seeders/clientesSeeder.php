<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Juan',
                'apellido'=>'Perez',
                'correo'=>'Juan@gmail.com',
                'telefono'=>'+1237894560',
            ],[
                'nombre'=>'Ilia',
                'apellido'=>'Topuria',
                'correo'=>'Ilia@gmail.com',
                'telefono'=>'+1237894560',
            ],[
                'nombre'=>'Max',
                'apellido'=>'Holloway',
                'correo'=>'Max@gmail.com',
                'telefono'=>'+1237894560',
            ]]);
    }
}