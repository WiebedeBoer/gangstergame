<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Thread;
use App\Models\Post;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main
	//forum list
    public function index()
    {       
        return view('forum.index');        
    }

	//posts
	//edit post
    public function edit($post)
    {       
        $postdata = Post::where('post', $post)->get(); 
		return view('forum.edit', compact('postdata'));        
    }
	
	//threads
	//show posts in thread view
    public function thread($thread)
    {       
 		$threadcount = Thread::where('thread_id', $thread)->count(); 
		if ($threadcount >=1)
		{
			$threaddata = Thread::where('thread_id', $thread)->get(); 
		}
		else {
			$threaddata =[];
		}
 		$postcount = Post::where('thread', $thread)->count(); 
		if ($postcount >=1)
		{
			$postdata = Post::where('thread', $thread)->get(); 
		}
		else {
			$postdata =[];
		}		
		
		$userid = Auth::user()->id;
		
		return view('forum.thread', compact('threaddata','threadcount','postdata','postcount','userid'));        
    }	

	//create thread
    public function create()
    {       
        return view('forum.create');        
    }
	
    //store function
    public function store()
    {          
        $data = request()->validate([            
            'thread_name' => 'required|min:2'
        ]);          
        $thread = new Thread();  
        $thread->framework_name = request('thread_name');
        $thread->save();       
        //return
        return redirect('/forum')->with('message', 'Created');          
    }

    //update function
    public function update(Request $request, $post_id)
    {
        $data = $request->validate([
            'message' => 'required|min:2'      
        ]);
        Post::where('post_id',$post_id)->update($data);
        return redirect('/forum')->with('message', 'Edited');
    }	

	//subfora
	//open view
	public function open()
	{
		$sub ="quest";
		$threadcount = Thread::where('subforum', $sub)->count();
		if ($threadcount >=1)
		{
			$threaddata = Thread::where('subforum', $sub)->get();
		}
		else {
			$threaddata =[];
		}		
		return view('forum.open', compact('threadcount','threaddata'));  
	}
	
	//tavern view
	public function cafe()
	{
		$sub ="cafe";
		$threadcount = Thread::where('subforum', $sub)->count();
		if ($threadcount >=1)
		{
			$threaddata = Thread::where('subforum', $sub)->get();
		}
		else {
			$threaddata =[];
		}
		return view('forum.cafe', compact('threadcount','threaddata'));  
	}

	//intro view
	public function intro()
	{
		$sub ="intro";
		$threadcount = Thread::where('subforum', $sub)->count();
		if ($threadcount >=1)
		{
			$threaddata = Thread::where('subforum', $sub)->get();
		}
		else {
			$threaddata =[];
		}
		return view('forum.intro', compact('threadcount','threaddata'));  
	}
	
	//kingdom view
	public function city()
	{
		$sub ="city";
		$threadcount = Thread::where('subforum', $sub)->count();
		if ($threadcount >=1)
		{
			$threaddata = Thread::where('subforum', $sub)->get();
		}
		else {
			$threaddata =[];
		}
		return view('forum.city', compact('threadcount','threaddata'));  
	}
	
}
