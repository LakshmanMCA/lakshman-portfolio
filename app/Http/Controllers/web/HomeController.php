<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class HomeController extends Controller
{
    public function index(){
        $projects = Projects::where('status',true)->get();
        return view('web.index',compact('projects'));
    }
}
