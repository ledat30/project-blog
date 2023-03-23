<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.post.create', compact('categories' , 'users'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'description' => 'required',
                'content' => 'required',
                'image' => 'required',
                'category_id' => 'required',
                'user_id'=> 'required',
            ]
        );

        $slug = Str::slug($request->title);

        $checkSlug = Post::where('slug', $slug)->first();

        if($checkSlug) {
            $slug = $checkSlug->slug . "_" . Str::random(2);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();

            if(strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/post/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('image/post', $image);
            }
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->get('content'),
            'image' => $image,
            'view_counts' => 0,
            'user_id' => $request->user_id,
            'new_post' => $request->new_post ? 1 : 0,
            'slug' => $slug,
            'category_id' => $request->category_id,
            'highlight_post' => $request->highlight_post ? 1 : 0,
            'status'=>$request->status,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'create successfully');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $users = User::all();

        return view('admin.post.edit', compact('post', 'categories' , 'users'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'description' => 'required',
                'content' => 'required',
            ]
        );

        $slug = Str::slug($request->title);

        $checkSlug = Post::where('slug', $slug)->first();

        if ($checkSlug) {
            $slug = $checkSlug->slug . "_" . Str::random(2);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();

            if (strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/post/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('image/post', $image);
            }
        }

        $post = Post::find($id);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->get('content'),
            'image' => isset($image) ? $image : $post->image,
            'new_post' => $request->new_post ? 1 : 0,
            'slug' => $slug,
            'highlight_post' => $request->highlight_post ? 1 : 0,
            'status'=>$request->status,
        ]);

        return redirect()->route('admin.post.index', $id)->with('success', 'Update successfully');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect()->route('admin.post.index')->with('success', 'deleted successfully');
    }

    public function detail($id){
        $posts = new Post();
        $post = $posts->detail($id);
        return view('admin.post.detail-post',[
            'posts'=>$post,
        ]);
    }

    public function unactive($id){
        DB::table('posts')->where('id',$id)->update(['status' => 1]);
        return redirect()->route('admin.post.index')->with('success', 'Kích hoạt bài viết thành công');
    }

    public function active($id){
        DB::table('posts')->where('id',$id)->update(['status' => 0]);
        return redirect()->route('admin.post.index')->with('success', 'Không kích hoạt bài viết thành công');
    }
}
