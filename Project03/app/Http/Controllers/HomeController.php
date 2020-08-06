<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Category;
use App\Post;
use App\Comment;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('checkUserRole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       $posts = Post::get();
      
        return view('guest', ['posts'=>$posts]);
    }
    public function adminPosts()

    {
        $posts = Post::get();
        //$posts = \DB::table('posts')
        //->join('users', 'id', '=', 'user_id')
        //->select('posts.*','users.name', 'users.id')->get();
        return view('admin', ['posts'=>$posts] );
    }
    public function guestPosts()

    {
        $posts = Post::get();
        //$posts = \DB::table('posts')
        //->join('users', 'id', '=', 'user_id')
        //->select('posts.*','users.name', 'users.id')->get();
        return view('guest', ['posts'=>$posts] );
    }

    public function createPosts()
    {
       $category = Category::all();
        return view('create', compact("category"));
        
    }
    public function storePosts(StorePost $req)
    {
           $user_id = Auth::user()->id;
           $post = new Post();
           $post->title = $req->title;
           $post->description =  $req->description;
           $post->picture = $req->picture;
           $post->category_id = $req->category;
           $post->user_id = $user_id;
           $post->save();

           

            return redirect('/home/posts');


    }
    public function showPost($id)
    {
        
        $comments = \DB::Table('comments')->where('post_id',$id)->get();
        $post = Post::where('id',$id)->first();
        return view('show',['post'=>$post],['comments'=>$comments] );
    }
    public function storeComment(Request $req, $id)
    {
       
        $post_id = $id; 
        $user_id = Auth::user()->id; 
        $comment = new Comment();
        $comment->comment = $req->comment;
        $comment->user_id = $user_id;
        $comment->post_id = $post_id;
        $comment->save();
        return redirect()->route('showpost');
    }
    public function editPosts($id)
    {
        $category = Category::all();
        $post = Post::where('id',$id)->first();
        return view('update',['post'=>$post], compact("category"));
    }
    public function updatePosts(Request $req, $id)
    {
        $post = Post::where('id',$id)->first();
        if(!empty($post))
        {
           
           $post->title = $req->title;
           $post->description =  $req->description;
           $post->picture = $req->picture;
           $post->category_id = $req->category;
           $post->save();
        }        
        return redirect('/home/edit');
    }
    public function deactivatePost($id)
    {
        $post = Post::find($id);
        $post->isActive = "Inactive";
        $post->save();

        return redirect()->route('guest');
    }

    public function activatePost($id)
    {
        $post = Post::find($id);
        $post->isActive = "Active";
        $post->save();

        return redirect()->route('guest');
    }
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return redirect('/home');
    }
}
