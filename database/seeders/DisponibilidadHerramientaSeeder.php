<?php

namespace Database\Seeders;

use App\Models\DisponibilidadHerramienta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisponibilidadHerramientaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de disponibilidad por defecto

        //Disponible
        $disponibilidad = new DisponibilidadHerramienta();
        $disponibilidad->descripcion = "Disponible";
        $disponibilidad->save();

        //En uso
        $disponibilidad = new DisponibilidadHerramienta();
        $disponibilidad->descripcion = "En Uso";
        $disponibilidad->save();
    }
}
