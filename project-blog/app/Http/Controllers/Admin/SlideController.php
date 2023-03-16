<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slide.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slide.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'image' => 'required',
                'name' => 'required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();

            if(strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/slide/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('image/slide', $image);
            }
        }

        Slide::create([
            'image' => $image,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.slide.index')->with('success', 'create successfully');
    }
    public function edit($id)
    {
        $slide = Slide::find($id);

        return view('admin.slide.edit', compact('slide'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name'=>'required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();

            if (strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/slide/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('image/slide', $image);
            }
        }

        $slide = Slide::find($id);
        $slide->update([
            'name' => $request->name,
            'image' => isset($image) ? $image : $slide->image,
        ]);

        return redirect()->route('admin.slide.index', $id)->with('success', 'Update successfully');
    }

    public function delete($id)
    {
        Slide::find($id)->delete();
        return redirect()->route('admin.slide.index')->with('success', 'deleted successfully');
    }
}
