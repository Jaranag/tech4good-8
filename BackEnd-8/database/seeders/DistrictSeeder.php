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

        $district2 = District::create([
            'name' => 'jajaja',
            'description' => 'Lorem ipsisainaskndaf`djsffsdngm,sdfg nsdnfjk dnfo agoifojg sdk fs s sd fspd ss d  @gmail.com',            
            ]);

        $district3 = District::create([
                'name' => 'mango',
                'description' => 'Lorem ipsisainaskndaf`djsffsdngm,sdfg nsdnfjk dnfo agoifojg sdk fs s sd fspd ss d  @gmail.com',            
                ]);

        $district4 = District::create([
            'name' => 'julio',
            'description' => 'Lorem ipsisainaskndaf`djsffsdngm,sdfg nsdnfjk dnfo agoifojg sdk fs s sd fspd ss d  @gmail.com',            
            ]);

        $district5 = District::create([
                'name' => 'eleop',
                'description' => 'Lorem ipsisainaskndaf`djsffsdngm,sdfg nsdnfjk dnfo agoifojg sdk fs s sd fspd ss d  @gmail.com',            
                ]);

        
    }
}
