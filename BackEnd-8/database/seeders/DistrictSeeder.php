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
            'name' => 'Gràcia',
            'description' => 'Lorem ipsisainaskndaf`djsffsdngm,sdfg nsdnfjk dnfo agoifojg sdk fs s sd fspd ss d  ',            
            ]);

        // $district2 = District::create([
        //     'name' => 'APIadmin',
        //     'description' => 'admin@gmail.com',            
        //     ]);

        // $district3 = District::create([
        //         'name' => 'APIadmin',
        //         'description' => 'admin@gmail.com',            
        //         ]);

        // $district4 = District::create([
        //     'name' => 'APIadmin',
        //     'description' => 'admin@gmail.com',            
        //     ]);

        // $district5 = District::create([
        //         'name' => 'APIadmin',
        //         'description' => 'admin@gmail.com',            
        //         ]);

        
    }
}
