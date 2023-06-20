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
            'attribute1' => $request->attribute1,
            'attribute2' => $request->attribute2,
            'attribute3' => $request->attribute3,
            'attribute4' => $request->attribute4
        ]);

        $district->total_average = $district->calculateRateTotal($district);
        $district->save();

        return response()->json(['message' => 'survey done!'],201);
    }


}
