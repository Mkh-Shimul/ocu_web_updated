<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerOpportunity;


class CareerOpportunityController extends Controller
{
    public function index()
    {
        $data = CareerOpportunity::where('isActive', true)->get();
        return view('admin.careerOpportunity.index', compact('data'));
    }

    public function create()
    {
        return view('admin.careerOpportunity.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'position' => 'required',
            'experience' => 'required',
            'education' => 'required',
            'vacancy' => 'required',
            'link' => 'required'
        ]);

        $result = CareerOpportunity::create($data);

        if($result)
        {
            return redirect()->route('careerOpIndex')->with('success', 'New Career Opportunity Added');
        }
        else
        {
            return back()->with('fail', 'Career Creation Faild. Please Try Again');
        }
    }

    public function edit($id)
    {
        $data = CareerOpportunity::find($id);
        return view('admin.careerOpportunity.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'position' => 'required',
            'experience' => 'required',
            'education' => 'required',
            'vacancy' => 'required',
            'link' => 'required'
        ]);

        $data = CareerOpportunity::find($id);

        $result = $data->update($request->all());

        if($result)
        {
            return redirect()->route('careerOpIndex')->with('success', 'Career Opportunity updated successfully');
        }
        else
        {
            return back()->with('fail', 'Somethings goes wrong');
        }
    }

    public function destroy($id)
    {
        $data = CareerOpportunity::where('id', $id)->first();

        $data->isActive = false;

        $result = $data->save();

        if($result)
        {
            return redirect()->route('careerOpIndex')->with('success', 'Career Opportunity deleted successful');
        }
        else
        {
            return back()->with('fail', 'Career Opportunity delete failed');
        }
    }
}
