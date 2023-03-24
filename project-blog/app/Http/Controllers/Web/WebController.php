<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\ContentBanner;
use App\Models\Post;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebController extends Controller
{
        public function home(){
            $highlight = Post::where('highlight_post' ,1 )
                ->take(3)->get();

            $new = Post::where('new_post' , 1 )->take(3)->get();

            return view('Web.home.home' , compact('highlight','new'));
        }
      //chức năng chia sẻ
        function __construct()
        {
            $conten = ContentBanner::all();
            $slide = Slide::all();
            $category = Category::all();
            $tag = Category::take(5)->get();

            view()->share('slide',$slide);
            view()->share('conten',$conten);
            view()->share('category',$category);
            view()->share('tag',$tag);

            if (Auth::check())
            {
                view()->share('user' ,Auth::user());
            }
        }

         public function post($slug){
            $post = Post::where('slug' , $slug)->first();
            $post->update([
                'view_counts'=>$post->view_counts+1
            ]);
            $relate = Post::where('category_id',$post->category_id)->take(2)->inRandomOrder()->get();
            //post right in detail
            $highlight = Post::where('highlight_post' ,1 )
                ->take(5)->get();

            return view('web.post.post',compact('post','relate','highlight'));
        }

        public function comment(Request $request, $id)
    {
        Comment::create([
            'content' => $request->get('content'),
            'user_id' => Auth::id(),
            'post_id' => $id,
        ]);
            return Redirect::back();
        }

    public function category()
    {
        $posts = Post::simplePaginate(6);
        $categories = Category::all();
        return view('web.category.category', compact('posts', 'categories'));
    }

    public function categorySlug($slug)
    {
        $category = Category::where('slug' , $slug)->first();
        $posts = Post::where('category_id', $category->id)->simplePaginate(6);
        $categories = Category::all();
        return view('web.category.category', compact('posts', 'categories'));
    }
        public function contact()
        {
            return view('web.contact.contact');
        }
        public function store(Request $request)
        {
            $this->validate($request,
                [
                    'name'=>'required',
                    'phone'=>'required',
                    'subject'=>'required',
                    'message'=>'required',
                    'address'=>'required'
                ],
            );
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->address = $request->address;
            $contact->store();
            return Redirect::route('contact.web')->with('success', 'Created contact successfully');
        }

        public function search(Request $request){
            $key =$request->get('key');
            $post = Post::where('title','like',"%$key%")->orWhere('description','like',"%$key%")
                ->orWhere('content','like',"%$key%")->take(30)->simplePaginate(4);
            return view('web.layout-web.search',[
                    'post'=>$post,
                    'key'=>$key,
                ]);
        }
}
