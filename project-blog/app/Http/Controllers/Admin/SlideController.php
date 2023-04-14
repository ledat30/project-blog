<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
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
        $users = User::all();
        return view('admin.slide.create',compact('users'));
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
            'user_id'=>$request->user_id,
            'status'=>$request->status,
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
            'status'=>$request->status,
        ]);

        return redirect()->route('admin.slide.index', $id)->with('success', 'Update successfully');
    }

    public function delete($id)
    {
        Slide::find($id)->delete();
        return redirect()->route('admin.slide.index')->with('success', 'deleted successfully');
    }

    public function unactive($id){
        DB::table('slides')->where('id',$id)->update(['status' => 1]);
        return redirect()->route('admin.slide.index')->with('success', 'Kích hoạt slide thành công');
    }

    public function active($id){
        DB::table('slides')->where('id',$id)->update(['status' => 0]);
        return redirect()->route('admin.slide.index')->with('success', 'Không kích hoạt slide thành công');
    }
}
