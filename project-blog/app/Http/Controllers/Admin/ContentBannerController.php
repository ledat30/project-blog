<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\ContentBanner;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContentBannerController extends Controller
{
    public function index()
    {
        $contens = ContentBanner::all();
        return view('admin.content-banner.index', compact('contens'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.content-banner.create',compact('users'));
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
            'user_id'=>$request->user_id,
            'status'=>$request->status,
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
            'status'=>$request->status,
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

    public function unactive($id){
        DB::table('content_banners')->where('id',$id)->update(['status' => 1]);
        return redirect()->route('admin.content.index')->with('success', 'Kích hoạt content thành công');
    }

    public function active($id){
        DB::table('content_banners')->where('id',$id)->update(['status' => 0]);
        return redirect()->route('admin.content.index')->with('success', 'Không kích hoạt content thành công');
    }
}
