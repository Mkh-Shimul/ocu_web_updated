<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        return view('admin.solutions.index');
    }

    public function create()
    {
        return view('admin.solutions.create');
    }
}
