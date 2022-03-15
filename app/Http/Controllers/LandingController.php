<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index(){
        $landing = Landing::all();
        $title = 'home';
        return view('welcome', compact('landing' , 'title'));
    }
}
