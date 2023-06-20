<?php

namespace App\Http\Controllers;
use App\Models\Survey;
use App\Models\District;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create(Request $request, $id){

        $this->validate($request, [

            "attribute1" => "required",
            "attribute2" => "required",
            "attribute3" => "required",
            "attribute4" => "required",
        ]);
        $district = District::find($id);

        $survey = Survey::create([
            'district_id' => $id,
            'attribute1' => $request->atribute1,
            'attribute2' => $request->atribute2,
            'attribute3' => $request->atribute3,
            'attribute4' => $request->atribute4
        ]);

        $district->total_average = $id->calculateRateTotal($district);
        $district->save();

        return response()->json(['message' => 'survey done!'],201);
    }


}
