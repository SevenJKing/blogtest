<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Posts;
use Carbon\Carbon;

class BlogController extends Controller
{
    function index(){
    	 $posts=Posts::where('published_at','<=', Carbon::now())
                 ->orderby('published_at','desc')
                 ->paginate(config('globe.globe_perpage'));
         return view('blog.index', compact('posts'));
    }

    function showPost(Request $request,$slug){
        $post= Posts::whereSlug($slug)->firstOrFail();
        
        return view('blog.post')->withPost($post);
    }
}
