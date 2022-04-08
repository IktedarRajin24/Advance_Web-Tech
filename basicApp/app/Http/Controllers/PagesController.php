<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function profile(){
        $name = "Rajin";
        $id = "19-39757-1";
        $dob = "25/03/2000";
        $names = array("Rajin", "Shehrin", "Rafi");
        return view('profile')
        -> with('name', $name)
        -> with('id', $id)
        -> with('dob', $dob)
        -> with('names', $names);
    }
}
