<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentBanner;
use Illuminate\Http\Request;

class ContentBannerController extends Controller
{
    public function index()
    {
        $contens = ContentBanner::all();
        return view('admin.content-banner.index', compact('contens'));
    }

    public function create()
    {
        return view('admin.content-banner.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]
        );

        ContentBanner::create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->get('content'),
        ]);

        return redirect()->route('admin.content.index')->with('success', 'create successfully');
    }
    public function edit($id)
    {
        $conten = ContentBanner::find($id);

        return view('admin.content-banner.edit', compact('conten'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]
        );

        $conten = ContentBanner::find($id);
        $conten->update([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->get('content'),
        ]);

        return redirect()->route('admin.content.index', $id)->with('success', 'Update successfully');
    }

    public function delete($id)
    {
        ContentBanner::find($id)->delete();
        return redirect()->route('admin.content.index')->with('success', 'deleted successfully');
    }

    public function detail($id){
        $contens = new ContentBanner();
        $content = $contens->detail($id);
        return view('admin.content-banner.detail-content',[
            'contens'=>$content,
        ]);
    }
}
