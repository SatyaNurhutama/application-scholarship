<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Scholarship;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //Show application page with scholarships data
    public function applicationPage()
    {
        $scholarships = Scholarship::all();
        return view('application', compact('scholarships'));
    }

    //Create a new application after validating the input data, stores the uploaded file, and saves it to the database.
    public function createApplication(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number_phone' => 'required|string',
            'semester' => 'required|integer|min:1|max:8',
            'GPA' => 'numeric|min:3',
            'scholarship_id' => 'required|integer',
            'file' => 'required|mimes:jpeg,jpg,png,gif,pdf,zip,rar',
        ]);

        $file = $request->file('file')->store('public');
        $filename = basename($file);

        $application = new Application;
        $application->name = $request->name;
        $application->email = $request->email;
        $application->number_phone = $request->number_phone;
        $application->semester = $request->semester;
        $application->GPA = $request->GPA;
        $application->scholarship_id = $request->scholarship_id;
        $application->file = $filename;
        $application->date_applied = Carbon::now();
        $application->save();

        return redirect('/hasil')->with('message', 'Pengajuan berhasil disimpan');
    }
}
