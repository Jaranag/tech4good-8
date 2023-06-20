<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;
use Faker\Provider\Lorem;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $district1 = District::create([
            'name' => 'Sarrià - San Gervasi',
            'description' => 'El distrito de Sarriá-San Gervasio es el quinto de los diez distritos en que se divide administrativamente la ciudad de Barcelona. Es el primero en renta per cápita, el de mayor proporción de títulos universitarios, el de menor tasa de desempleo y el de menor proporción de extranjeros.',            
            ]);


        $district2 = District::create([
            'name' => 'Gràcia',
            'description' => 'Gràcia es un distrito elegante que destaca por sus bulevares y calles peatonales del siglo XIX repletas de boutiques alternativas, galerías y salas de cine. La plaza de la Vila de Gràcia, con su emblemática torre del reloj, está flanqueada por bistrós de cocina catalana y vinotecas. ',            
            ]);
        
        $district3 = District::create([
            'name' => 'Sants-Montjuïc',
            'description' => 'El barrio de Sants Montjuïc se ubica en la montaña de Montjuïc, que ofrece vistas panorámicas del mar desde el castillo y vistas de la ciudad desde los senderos aledaños al Estadio Olímpico. La zona alberga varias instituciones culturales, como la Fundación Joan Miró, instalada en un impresionante edificio modernista, y el Museu Nacional d Art de Catalunya, ubicado en un palacete neoclásico.',            
            ]);

        $district4 = District::create([
            'name' => 'Sant Andreu',
            'description' => 'El distrito de San Andrés comprende los barrios de San Andrés, La Sagrera procedente de San Martín de Provensals, Trinidad Vieja, Buen Pastor, Barón de Viver, Navas y Congreso. La configuración del distrito data del año 1984, cuando Barcelona aprobó la división territorial actual en 10 distritos',            
            ]);
        
        $district5 = District::create([
            'name' => 'Les Corts',
            'description' => 'El distrito de Les Corts, si bien no es uno de los más visitados, es uno que vale la pena conocer. Con la característica elegancia de la parte alta de Barcelona, se compone de tres barrios llenos de jardines, parques y plazas, además de extensas y tranquilas zonas residenciales. Les Corts es perfecto si deseas alojarte en una tranquila y elegante zona de Barcelona.',            
            ]);

        
    }
}
