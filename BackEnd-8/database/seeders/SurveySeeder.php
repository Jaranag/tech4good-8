<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Survey;
use App\Models\District;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Survey::factory(240)->create();
        // $this->update();
    }

    // public function update()
    // {
    //     $district = District::find(1);

    //     $attribute1Values = Survey::pluck('attribute1')->where('disctrict_id', $district->id)->toArray();
    //     $attribute2Values = Survey::pluck('attribute2')->where('disctrict_id', $district->id)->toArray();
    //     $attribute3Values = Survey::pluck('attribute3')->where('district_id', $district->id)->toArray();
    //     $attribute4Values = Survey::pluck('attribute4')->where('district_id', $district->id)->toArray();

    //     $district->average_1 = array_sum($attribute1Values) / count($attribute1Values);
    //     $district->average_2 = array_sum($attribute2Values) / count($attribute2Values);
    //     $district->average_3 = array_sum($attribute3Values) / count($attribute3Values);
    //     $district->average_4 = array_sum($attribute4Values) / count($attribute4Values);
    //     $TotalRate = ($district->average_1 + $district->average_2 + $district->average_3 + $district->average_4 / 4);
    //     $district->total_average = $TotalRate;
        
    //     $district->save();


    }
// }
