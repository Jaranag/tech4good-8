<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create($id, Request $request) {
        $request->validate([
            'review_text' => ['required', 'max:5000', 'string'],
            'name' => ['max:20', 'string', 'min:2',],
            'last_name' => ['max:20', 'string', 'min:2']
        ]);
        $review = new Review;

        if (!$request->name) {
            $review->name = 'Anónimo';
        }

        $review->text_title = $request->text_title;
        $review->name = $request->name;
        $review->last_name = $request->last_name;
        $review->district_id = $id;
        $review->save();

    }
}
