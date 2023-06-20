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
            'name' => 'Sant Andreu',
            'description' => 'El distrito de San Andrés comprende los barrios de San Andrés, La Sagrera procedente de San Martín de Provensals, Trinidad Vieja, Buen Pastor, Barón de Viver, Navas y Congreso. La configuración del distrito data del año 1984, cuando Barcelona aprobó la división territorial actual en 10 distritos',            
            ]);

        $district2 = District::create([
            'name' => 'Nou Barris',
            'description' => 'Nou Barris es un distrito de gran extensión que alberga el Parc Central, un parque bien cuidado, y las rutas entre bosques de pinos blancos que cruzan la sierra de Collserola. El Castillo de Torre Baró, situado en lo alto de un monte con vistas de toda la ciudad, está rodeado de acueductos de hace siglos.',            
            ]);

        $district3 = District::create([
                'name' => 'Sants-Montjuïc',
                'description' => 'El barrio de Sants Montjuïc se ubica en la montaña de Montjuïc, que ofrece vistas panorámicas del mar desde el castillo y vistas de la ciudad desde los senderos aledaños al Estadio Olímpico. La zona alberga varias instituciones culturales, como la Fundación Joan Miró, instalada en un impresionante edificio modernista, y el Museu Nacional d Art de Catalunya, ubicado en un palacete neoclásico.',            
                ]);

        $district4 = District::create([
            'name' => 'Horta-Guinardó',
            'description' => 'El distrito de Horta-Guinardó es el tercero en extensión de Barcelona, solamente superado por los de Sants-Montjuïc y Sarriá-San Gervasio. Con una superficie de 1.192 ha, representa el 11,9% de la extensión total del municipio. ',            
            ]);

        $district5 = District::create([
                'name' => 'Sant Martí',
                'description' => 'El distrito de San Martín es el décimo de los diez distritos en que se divide administrativamente la ciudad de Barcelona. Se sitúa en el límite noreste de la ciudad, y limita con el municipio de San Adrián del Besós, y los distritos de Ciudad Vieja, Ensanche, Horta-Guinardó y San Andrés.',            
                ]);

        
    }
}
