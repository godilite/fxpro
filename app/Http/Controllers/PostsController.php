<?php

namespace App\Http\Controllers;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Post;
use App\Tag;
use App\Category;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.posts.index')->with('posts', Post::all()); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $categories = Category::all();

        $tags = Tag::all();

        if($categories->count()==0 || $tags->count()==0)
        {
        Session::flash('info', "You do not have category or tag yet. Create a new Category and tag to add post");
        return redirect()->back();
        }
        return view('admin.posts.create')->with('categories',Category::all())
                                        ->with('tags', Tag::all());        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $this->validate($request,[
        'title'=>'required|max:255',
        'featured'=>'required|mimes:jpeg,bmp,jpg,png,mp4,pdf,mpeg,m4a,mp4a,mpga,mp2,mp2a,mp3,m2a,m3a|between:1, 6000',
        'content'=>'required',
        'category_id'=>'required',
        'tags'=>'required'
        ]);
        $image = $request->file('featured');

       $name = $request->file('featured')->getClientOriginalName();

       $image_name = $request->file('featured');
       $ext = pathinfo($image_name, PATHINFO_EXTENSION);     
                                              
        if($ext=='mp4'||$ext=='mp3') {                                    
        Cloudder::uploadVideo($image_name, null);
        }
        else {
            
        Cloudder::upload($image_name, null);
        
        }
        $image_url= Cloudder::getResult();
   
        // Cloudder::uploadVideo($image_name, array("resource_type" => "video"));
        // $image_url= Cloudder::show(Cloudder::getPublicId());
        
       //Save images
       //$this->saveImages($request, $image_url);
        $post=Post::create([
                'title'=>$request->title,
                'content'=>$request->content,
                'featured'=>$image_url['url'],
                'category_id'=>$request->category_id,
                'slug'=>str_slug($request->title),
                'user_id'=>Auth::id() 
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success',"post $request->title created successfully.");
        return redirect()->back();//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        return view('admin.posts.edit')->with('post', $post)
                                        ->with('categories', Category::all())
                                        ->with('tags', Tag::all()); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
           'title'=> 'required',
           'content'=>'required',
           'category_id'=>'required',
       ]); 
        $post = Post::find($id);
        if ($request->hasFile('featured')) {
            $featured= $request->featured;
            $featured_new_name= time().$featured->getClientOriginalName();
            
            $featured->move('uploads/posts', $featured_new_name);# code...
            
            $post->featured ='uploads/posts/'.$featured_new_name; 
        }

        $post->title=$request->title;

        $post->content=$request->content;

        $post->category_id = $request->category_id;
        
        $post->save();

        $post->tags()->sync($request->tags);

        Session::flash('success', 'Post Updated Successfully.');
        
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        
        $post->delete();
        
        Session::flash('success', "Your post $post->title has been Trashed successfully. To the Trash Can");//
        return redirect()->back();
    }

    public function trashed()
    {
      $posts = Post::onlyTrashed()->get();
      
      return view('admin.posts.trashed')->with('posts', $posts);# code...
    }
    public function kill($id)
    {
      $post = Post::withTrashed()->where('id',$id)->first();
      
      $post->forceDelete();
      
      Session::flash('success', "Post deleted permanently.");# code...
    return redirect()->back();
    }

    public function restore($id)
    {
     $post = Post::withTrashed()->where('id', $id)->first();
     
     $post->restore();

     Session::flash('success', "The post '$post->title' has been restored successfully.");
     
     return redirect()->route('posts');
     # code...
    }
}
