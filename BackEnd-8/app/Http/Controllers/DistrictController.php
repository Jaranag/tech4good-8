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
}
