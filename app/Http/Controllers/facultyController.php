<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facultyController extends Controller
{
    public function index(){
        return view('complaint.faculty');
    }
}
