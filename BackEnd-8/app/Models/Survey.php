<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable =[
        'district_id',
        'attribute1',
        'attribute2',
        'attribute3',
        'attribute4'

    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
