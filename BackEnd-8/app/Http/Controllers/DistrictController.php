<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function show($id) {
        $district = District::find($id);
        return $district;
    }

    public function showAll() {
        $districts = District::all();
        return $districts;
    }
}
