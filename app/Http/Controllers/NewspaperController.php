<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\Newspaper;
use App\Models\Gang;

class NewspaperController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main newspaper
    public function index(Request $request)
    {            		
    	//user
		$user = auth()->user();
		//gang count
        $gangcount = Gang::where('user', $user->id)->count();
        if($gangcount >=1){
            $gang = Gang::where('user', $user->id)->get();

        }
        else {
            $gang =[];
        }       
		//return view	
		return view('newspaper.index', compact('user','gangcount','gang'));        
    }
    
	//main newspaper
    public function show(Request $request,$id)
    {            		
    	//user
		$user = auth()->user();

            $newscount = Newspaper::where('user', $user->id)->where('gang', $gang->gang_id)->count();
            if($newscount >=1){
                $news = Newspaper::where('user', $user->id)->where('gang', $gang->gang_id)->paginate(10);
            }
            else {
                $news =[];
            }
           
		//return view	
		return view('newspaper.show', compact('user','newscount','news'));        
	}
}
