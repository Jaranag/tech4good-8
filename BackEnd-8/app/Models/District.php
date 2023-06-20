<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Survey;
use Attribute;

class District extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }

    public function calculateRateTotal($district){

    //get the values and the rate of every attribute

    $attribute1Values = Survey::pluck('attribute1')->toArray();
    $attribute2Values = Survey::pluck('attribute2')->toArray();
    $attribute3Values = Survey::pluck('attribute3')->toArray();
    $attribute4Values = Survey::pluck('attribute4')->toArray();


    //
    $district->average_1 = array_sum($attribute1Values) / count($attribute1Values);
    $district->average_2= array_sum($attribute2Values) / count($attribute2Values);
    $district->average_3 = array_sum($attribute3Values) / count($attribute3Values);
    $district->average_4= array_sum($attribute4Values) / count($attribute4Values);
    $district->save();


    $TotalRate= ($district->average_1+$district->average_2+$district->average_3+$district->average_4)/4;

    return $TotalRate;


    }
}
