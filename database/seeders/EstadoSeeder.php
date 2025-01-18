<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de estados por defecto
        //Activo
        $estado = new Estado();
        $estado->nombre = "Activo";
        $estado->save();

        //Inactivo
        $estado = new Estado();
        $estado->nombre = "Inactivo";
        $estado->save();
    }
}
