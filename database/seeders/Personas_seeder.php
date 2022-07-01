<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class Personas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Personas')->insert([
            'nombre'=>'julian',
            'apellido'=>'paz',
            'direccion'=>'carrera20',
            'telefono'=>'320156999'
        ]);


        DB::table('Personas')->insert([
            'nombre'=>'julian2',
            'apellido'=>'paz2',
            'direccion'=>'carrera2033',
            'telefono'=>'2333355'
        ]);




        DB::table('Personas')->insert([
            'nombre'=>'mario',
            'apellido'=>'perez',
            'direccion'=>'callle8',
            'telefono'=>'2333355333'
        ]);

        DB::table('Personas')->insert([
            'nombre'=>'vanessa',
            'apellido'=>'solarte',
            'direccion'=>'calle89',
            'telefono'=>'96666'
        ]);

        DB::table('Personas')->insert([
            'nombre'=>'david',
            'apellido'=>'lopez',
            'direccion'=>'cllle 20000',
            'telefono'=>'32011569'
        ]);

    }
}
