<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    //Show scholarship page with scholarships data
    public function scholarshipPage(){
        $scholarships = Scholarship::all();
        return view('scholarship', compact('scholarships'));
    }
}
