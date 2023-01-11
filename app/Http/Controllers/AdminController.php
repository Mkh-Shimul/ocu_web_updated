<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $data = array();
        if(Session::has('loginID'))
        {
            $data = Admin::where('id', '=', Session::get('loginID'))->first();
            // dd($data);
        }
        return view('admin.index', compact('data'));
    }
}
