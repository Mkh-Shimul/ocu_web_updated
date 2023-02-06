<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;
use Image;

class SolutionController extends Controller
{
    public function index()
    {
        $data = Solution::where('isActive', true)->get();
        return view('admin.solutions.index', compact('data'));
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file("image");

            //create a random file name with time
            $fileName = "solutionCreate_".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = '/public/images';
            $storageDestinationPath=storage_path('app'.$destinationPath);

            if (!\File::exists( $storageDestinationPath)) {
                \File::makeDirectory($storageDestinationPath, 0755, true);
            }

            Image::make($file->getRealPath())
                ->save($storageDestinationPath."/".$fileName,40,"jpg");

            }

            $sol = new Solution();
            $sol->name = $request->name;
            $sol->short_desc = $request->short_desc;
            $sol->description = $request->description;
            $sol->image = $destinationPath."/".$fileName;

        $sol->save();

        return redirect()->route('solutionIndex')->with('success', 'Solution Saved Successfully');
    }

    public function edit($id)
    {
        $solution = Solution::find($id);
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $solution = Solution::find($id);

        $solution->name = $request->name;
        $solution->short_desc = $request->short_desc;
        $solution->description = $request->description;

        if($request->hasFile('image'))
        {
            $file = $request->file("image");

            //create a random file name with time
            $fileName = "solutionUpdate_".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = '/public/images';
            $storageDestinationPath=storage_path('app'.$destinationPath);

            if (!\File::exists( $storageDestinationPath))
            {
                \File::makeDirectory($storageDestinationPath, 0755, true);
            }

            Image::make($file->getRealPath())
                ->save($storageDestinationPath."/".$fileName,40,"jpg");

            $solution->image = $destinationPath."/".$fileName;
        }

        $solution->isActive = 1;

        $result = $solution->update();
        if($result)
        {
            return redirect()->route('solutionIndex')->with('success', 'Solution updated successfully');
        } else
        {
            return back()->with('fail', 'Solution update failed');
        }
    }

    public function destroy($id)
    {
        $data = Solution::where('id', $id)->first();

        $data->isActive = false;

        $result = $data->save();

        if($result)
        {
            return redirect()->route('solutionIndex')->with('success', 'Solution deleted successful');
        }
        else
        {
            return back()->with('fail', 'Solution delete failed');
        }
    }
}
