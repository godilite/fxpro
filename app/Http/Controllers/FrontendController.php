<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
class FrontendController extends Controller
{
public function contact()
    {
     return view('frontend.contact');
    }

public function about()
    {
      return view('frontend.about');  # code...
    }
public function trading()
    {
      return view('frontend.trading');
    }
    
    public function tradeSplash($slug)
    {
     $i = Category::where('slug',$slug)->first();
     $id = $i->id;
      $category = Category::find($id);
      $first_post=$category->posts->last();
      return view('frontend.tradesplash')->with('category',$category->posts()->orderBy('id','DESC')->get())
                            ->with('title',$category->name)
                            ->with('first_post', $first_post)
                            //->with('settings', Setting::first())
                            ->with('categories', Category::take(5)->get());
    }

    public function singlePost($slug)
        {
         $post=Post::where('slug',$slug)->first();
         
         $next_id = Post::where('id', '>',1)->min('id');

          $prev_id = Post::where('id', '<',2)->max('id');

       return view('frontend.single')->with('post', $post)
                            ->with('title', $post->title)
                            //->with('settings', Setting::first())
                            ->with('categories', Category::take(5)->get())
                            ->with('next',Post::find($next_id))
                            ->with('prev',Post::find($prev_id))
                            ->with('tags', Tag::all());
        }

}
