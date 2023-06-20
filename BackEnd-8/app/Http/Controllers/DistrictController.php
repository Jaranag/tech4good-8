<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function show($id) {
        $district = District::find($id);
        $response = $district;
        return $response;
    }

    public function showAll() {
        $districts = District::all();
        $response = $districts;
        return $response;
    }
}
