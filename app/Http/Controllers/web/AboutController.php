<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\Education;

class AboutController extends Controller
{
    public function index()

    {
        $certifications = Certification::all();
        $educations = Education::all();
        return view('web.about',compact('certifications','educations'));
    }
}
