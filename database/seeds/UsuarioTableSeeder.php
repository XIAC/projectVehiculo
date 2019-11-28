<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i<=50; $i++){
            DB::table('usuarios')->insert([
                'nombre' => Str::random(10),
                'nombre_usuario' => Str::random(10),
                'correo' => Str::random(10).'@hotmail.com',
                'contrasenia' => 'asd123',
            ]);
        }



    }
}
