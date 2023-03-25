<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Response;

class ResultController extends Controller
{
    //Show result page with applications data
    public function resultPage()
    {
        $applications = Application::orderby('created_at', 'DESC')->get();
        return view('result', compact('applications'));
    }
}
