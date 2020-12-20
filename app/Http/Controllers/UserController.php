<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Gang;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//show
    public function show($id)
    {       
        $userdata = User::where('id', $id)->firstOrFail();
		$user = auth()->user();
		$user_auth_id = $user->id;
		if($user_auth_id ==$id)
		{
			$dynastycount = Gang::where('user', $id)->count();
			if($dynastycount ==1){
				$dynastydata = Gang::where('user', $id)->first();

				return view('users.show', compact('userdata','dynastycount','dynastydata'));
			}
			else {
				$dynastydata = [];
				$portraitcount = 5;
				return view('users.show', compact('userdata','dynastycount','dynastydata'));				
			}
			
		}
		else 
		{
			return redirect('/home')->with('message', 'Not allowed'); 
		}	
        
    }
	
	//update
    public function update(Request $request, $id)
    {       
		$user = auth()->user();
		$user_auth_id = $user->id;
		if($user_auth_id ==$id)
		{
			$data = $request->validate([
				'audio' => 'required'         
			]);        
        
			$user = new User();
			User::where('id',$id)->update($data);
			return redirect('/users/'.$id)->with('message', 'Changed');  
		}
		else 
		{
			return redirect('/home')->with('message', 'Not allowed'); 
		}
   
    }
}
