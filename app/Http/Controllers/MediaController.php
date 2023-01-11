<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Image;

class MediaController extends Controller
{
    public function index()
    {
        $data = Media::where('isActive', true)->get();
        return view('admin.media.index', compact('data'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'link' => 'required|url',
            'image' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file("image");

            //create a random file name with time
            $fileName = "mediaCreate_".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = '/public/images';
            $storageDestinationPath=storage_path('app'.$destinationPath);

            if (!\File::exists( $storageDestinationPath)) {
                \File::makeDirectory($storageDestinationPath, 0755, true);
            }

            Image::make($file->getRealPath())
                ->save($storageDestinationPath."/".$fileName,40,"jpg");

            }

            $media = new Media();
            $media->title = $request->title;
            $media->date = $request->date;
            $media->link = $request->link;
            $media->image = $destinationPath."/".$fileName;

        $media->save();

        return redirect()->route('mediaIndex')->with('success', 'Media Saved Successfully');
    }

    public function edit($id)
    {
        $media = Media::find($id);
        return view('admin.media.edit', compact('media'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'link' => 'required|url'
        ]);

        $media = Media::find($id);

        $media->title = $request->title;
        $media->date = $request->date;
        $media->link = $request->link;

        if($request->hasFile('image'))
        {
            $file = $request->file("image");

            //create a random file name with time
            $fileName = "mediaUpdate_".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = '/public/images';
            $storageDestinationPath=storage_path('app'.$destinationPath);

            if (!\File::exists( $storageDestinationPath))
            {
                \File::makeDirectory($storageDestinationPath, 0755, true);
            }

            Image::make($file->getRealPath())
                ->save($storageDestinationPath."/".$fileName,40,"jpg");

            $media->image = $destinationPath."/".$fileName;
        }



        $media->isActive = 1;

        $result = $media->update();

        if($result)
        {
            return redirect()->route('mediaIndex')->with('success', 'Media & Events updated successfully');
        } else
        {
            return back()->with('fail', 'Media & Events update failed');
        }
    }

    public function destroy($id)
    {
        $data = Media::where('id', $id)->first();

        $data->isActive = false;

        $result = $data->save();

        if($result)
        {
            return redirect()->route('mediaIndex')->with('success', 'Media and Events delete successful');
        }
        else
        {
            return back()->with('fail', 'Media and Events delete failed');
        }
    }
}
